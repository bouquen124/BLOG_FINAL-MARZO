<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Repositories\UserRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Rol;
use App\User;
use App\Models\Ilustrable;
use Illuminate\Http\Request;
use Flash;
use Laracasts\Flash\Flash as FlashFlash;
use Response;

class user_Controller extends Controller
{
    
public function index(Request $request){


    $user= User::orderby('id','desc')->paginate(6);
    return view('ux.user.index')
    ->with('user',$user);
}



Public function show($id){
$user =User::find($id);

if(empty($user)){

    Flash::error("usuario  no encontrado");

    return redirect(route('user.index'));


}
return view('ux.user.show')->with('user', $user);

}


public function edit($id){

$user =User::find($id);
if(empty($user)){

Flash::error('usuario no encontrado');

return redirect(route('/'));

}
$rol=Rol::pluck('nombre','id');
$imagenes = Ilustrable::where('ilustrable_id', $id)->where('ilustrable_type', 'App\User')->paginate(1);
return view('ux.user.edit',compact('user','rol','imagenes'));

}



public function update($id, Request $request){

$user = User::find($id);

if(empty($user)){
    Flash::error('usuario no encontrado');
    
    return redirect(route('/'));
}


$user = $this->UserRepository->update($request->all(), $id);




Flash::success('usuario updated successfully.');

return redirect(route('user.show', $id));


}

}
