<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGaleriaRequest;
use App\Http\Requests\UpdateGaleriaRequest;
use App\Repositories\GaleriaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Flash;
use Response;
use App\Models\Ilustrable;
use App\Models\Galeria;


class GaleriaUserController extends AppBaseController
{
    /** @var  GaleriaRepository */
    private $galeriaRepository;

    public function __construct(GaleriaRepository $galeriaRepo)
    {
        $this->galeriaRepository = $galeriaRepo;
    }

    /**
     * Display a listing of the Galeria.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $galerias = Galeria::orderby('id', 'desc')->paginate(6);

        return view('ux.galeria.index')
            ->with('galerias', $galerias);
    }

    /**
     * Show the form for creating a new Galeria.
     *
     * @return Response
     */
    public function create()
    {
        return view('ux.galeria.create');
    }

    /**
     * Store a newly created Galeria in storage.
     *
     * @param CreateGaleriaRequest $request
     *
     * @return Response
     */
    public function store(CreateGaleriaRequest $request)
    {
        $input = $request->all();

        $galeria = $this->galeriaRepository->create($input);

        if ($request->file('url')) {
            $archivo = $request->file('url');

            $pathOriginal = Storage::disk('s3')->put('imagenes', $archivo, 'public');
            
        }


        $fotogaleria = $galeria->FotoGaleria()->create([
            //'ilustrable_id' =>,
            //'ilustrable_type' =>,
            'url' => env('AWS_URL').$pathOriginal
        ]);

        Flash::success('Galeria saved successfully.');

        return redirect(route('gallery.show', $galeria->id));
    }

    /**
     * Display the specified Galeria.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $galeria = $this->galeriaRepository->find($id);

        if (empty($galeria)) {
            Flash::error('Galeria not found');

            return redirect(route('galerias.index'));
        }

        return view('ux.galeria.show')->with('galeria', $galeria);
    }

    /**
     * Show the form for editing the specified Galeria.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $galeria = $this->galeriaRepository->find($id);

        if (empty($galeria)) {
            Flash::error('Galeria not found');

            return redirect(route('galerias.index'));
        }

        return view('ux.galeria.edit')->with('galeria', $galeria);
    }

    /**
     * Update the specified Galeria in storage.
     *
     * @param int $id
     * @param UpdateGaleriaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGaleriaRequest $request)
    {
        $galeria = $this->galeriaRepository->find($id);

        if (empty($galeria)) {
            Flash::error('Galeria not found');

            return redirect(route('galerias.index'));
        }

        $galeria = $this->galeriaRepository->update($request->all(), $id);

        Flash::success('Galeria updated successfully.');

        return redirect(route('gallery.show', $id));
    }

    /**
     * Remove the specified Galeria from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $galeria = $this->galeriaRepository->find($id);

        if (empty($galeria)) {
            Flash::error('Galeria not found');

            return redirect(route('galerias.index'));
        }

        $this->galeriaRepository->delete($id);

        Flash::success('Galeria deleted successfully.');

        return redirect(route('gallery.index'));
    }
}
