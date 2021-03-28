<?php
namespace App\Http\Controllers;


use App\Http\Requests\CreateModeloRequest;
use App\Http\Requests\UpdateModeloRequest;
use App\Repositories\ModeloRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Modelo;
use Illuminate\Http\Request;

use Flash;
use Response;
use Swagger\Annotations\Get;

class Modelos_user extends Controller
{

 /** @var  ModeloRepository */
 private $modeloRepository;

 public function __construct(ModeloRepository $modeloRepo)
 {
     $this->modeloRepository = $modeloRepo;
 }

 /**
  * Display a listing of the Modelo.
  *
  * @param Request $request
  *
  * @return Response
  */
 public function index(Request $request)
 {
     $modelos=Modelo::orderby('id', 'desc')->paginate(6);

     return view('ux.modelos.index')
         ->with('modelos', $modelos);
 }

/**
     * Show the form for creating a new Modelo.
     *
     * @return Response
     */
    public function create()
    {
        return view('ux.modelos.create');
    }

    /**
     * Store a newly created Modelo in storage.
     *
     * @param CreateModeloRequest $request
     *
     * @return Response
     */
    public function store(CreateModeloRequest $request)
    {
        $input = $request->all();

        $modelo = $this->modeloRepository->create($input);

        Flash::success('Modelo saved successfully.');

        return redirect(route('modelos_user.index'));
    }


    /**
     * Display the specified Modelo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
      

        $modelo=Modelo::find($id);

        if (empty($modelo)) {
            Flash::error('Modelo not found');

            return redirect(route('ux.modelos.index'));
        }

        return view('ux.modelos.show')->with('modelo', $modelo);
    }




     /**
     * Show the form for editing the specified Modelo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $modelo = $this->modeloRepository->find($id);

        if (empty($modelo)) {
            Flash::error('Modelo not found');

            return redirect(route('modelos_user.show'));
        }

        return view('ux.modelos.edit')->with('modelo', $modelo);
    }

    /**
     * Update the specified Modelo in storage.
     *
     * @param int $id
     * @param UpdateModeloRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateModeloRequest $request)
    {
        $modelo = $this->modeloRepository->find($id);

        if (empty($modelo)) {
            Flash::error('Modelo not found');

            return redirect(route('modelos_user.show'));
        }

        $modelo = $this->modeloRepository->update($request->all(), $id);

        Flash::success('Modelo updated successfully.');

        return redirect(route('modelos_user.index'));
    }



    public function destroy($id)
    {
        $modelo = $this->modeloRepository->find($id);

        if (empty($modelo)) {
            Flash::error('Modelo not found');

            return redirect(route('modelos_user.index'));
        }

        $this->modeloRepository->delete($id);

        Flash::success('Modelo deleted successfully.');

        return redirect(route('modelos_user.index'));
    }

}
