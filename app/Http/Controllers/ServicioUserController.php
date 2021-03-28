<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateServicioRequest;
use App\Http\Requests\UpdateServicioRequest;
use App\Repositories\ServicioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Estado;
use App\Models\Categoria;
use App\Models\Servicio;
use App\Models\Ilustrable;

class ServicioUserController extends AppBaseController
{
    /** @var  ServicioRepository */
    private $servicioRepository;

    public function __construct(ServicioRepository $servicioRepo)
    {
        $this->servicioRepository = $servicioRepo;
    }

    /**
     * Display a listing of the Servicio.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {

        $servicios = Servicio::orderby('id', 'desc')->paginate(4);
        return view('ux.servicio.index' ,compact('servicios'));
    
    }

    /**
     * Show the form for creating a new Servicio.
     *
     * @return Response
     */
    public function create()
    {
        $estados =Estado::pluck('nombre','id');
        $categorias=Categoria::pluck('nombre','id');
        return view('ux.servicio.create',compact('estados','categorias'));
    }

    /**
     * Store a newly created Servicio in storage.
     *
     * @param CreateServicioRequest $request
     *
     * @return Response
     */
    public function store(CreateServicioRequest $request)
    {
        $input = $request->all();

        $servicio = $this->servicioRepository->create($input);

        Flash::success('Servicio saved successfully.');

        return redirect(route('servicio.show', $servicio->id));
    }

    /**
     * Display the specified Servicio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $servicio = $this->servicioRepository->find($id);

        if (empty($servicio)) {
            Flash::error('Servicio not found');

            return redirect(route('servicios.index'));
        }
        $imagenes = Ilustrable::where('ilustrable_id', $id)->where('ilustrable_type', 'App\Models\Servicio')->paginate(5);        
        
        return view('ux.servicio.show', compact('servicio', 'imagenes'));
    }

    /**
     * Show the form for editing the specified Servicio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $servicio = $this->servicioRepository->find($id);

        if (empty($servicio)) {
            Flash::error('Servicio not found');

            return redirect(route('servicios.index'));
        }

        $imagenes = Ilustrable::where('ilustrable_id', $id)->where('ilustrable_type', 'App\Models\Servicio')->paginate(5);        
        $numeroimagenes = Ilustrable::where('ilustrable_id', $id)->where('ilustrable_type', 'App\Models\Servicio')->count();
        $estados =Estado::pluck('nombre','id');
        $categorias =Categoria::pluck('nombre','id');
        return view('ux.servicio.edit', compact('servicio', 'imagenes', 'estados', 'categorias', 'numeroimagenes'));
    }

    /**
     * Update the specified Servicio in storage.
     *
     * @param int $id
     * @param UpdateServicioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateServicioRequest $request)
    {
        $servicio = $this->servicioRepository->find($id);

        if (empty($servicio)) {
            Flash::error('Servicio not found');

            return redirect(route('servicio.index'));
        }

        $servicio = $this->servicioRepository->update($request->all(), $id);

        Flash::success('Servicio updated successfully.');

        return redirect(route('servicio.show', $id));
    }

    /**
     * Remove the specified Servicio from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $servicio = $this->servicioRepository->find($id);

        if (empty($servicio)) {
            Flash::error('Servicio not found');

            return redirect(route('servicios.index'));
        }

        $this->servicioRepository->delete($id);

        Flash::success('Servicio deleted successfully.');

        return redirect(route('servicios.index'));
    }
}
