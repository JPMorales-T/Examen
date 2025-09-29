<?php

namespace App\Http\Controllers;

use App\DataTables\MarcaDataTable;
use App\Http\Requests\CreateMarcaRequest;
use App\Http\Requests\UpdateMarcaRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends AppBaseController
{

    public function __construct()
    {
        $this->middleware('permission:Ver Marcas')->only('show');
        $this->middleware('permission:Crear Marcas')->only(['create','store']);
        $this->middleware('permission:Editar Marcas')->only(['edit','update']);
        $this->middleware('permission:Eliminar Marcas')->only('destroy');
    }
    /**
     * Display a listing of the Marca.
     */
    public function index(MarcaDataTable $marcaDataTable)
    {
    return $marcaDataTable->render('marcas.index');
    }


    /**
     * Show the form for creating a new Marca.
     */
    public function create()
    {
        return view('marcas.create');
    }

    /**
     * Store a newly created Marca in storage.
     */
    public function store(CreateMarcaRequest $request)
    {
        $input = $request->all();

        /** @var Marca $marca */
        $marca = Marca::create($input);

        flash()->success('Marca guardado.');

        return redirect(route('marcas.index'));
    }

    /**
     * Display the specified Marca.
     */
    public function show($id)
    {
        /** @var Marca $marca */
        $marca = Marca::find($id);

        if (empty($marca)) {
            flash()->error('Marca no encontrado');

            return redirect(route('marcas.index'));
        }

        return view('marcas.show')->with('marca', $marca);
    }

    /**
     * Show the form for editing the specified Marca.
     */
    public function edit($id)
    {
        /** @var Marca $marca */
        $marca = Marca::find($id);

        if (empty($marca)) {
            flash()->error('Marca no encontrado');

            return redirect(route('marcas.index'));
        }

        return view('marcas.edit')->with('marca', $marca);
    }

    /**
     * Update the specified Marca in storage.
     */
    public function update($id, UpdateMarcaRequest $request)
    {
        /** @var Marca $marca */
        $marca = Marca::find($id);

        if (empty($marca)) {
            flash()->error('Marca no encontrado');

            return redirect(route('marcas.index'));
        }

        $marca->fill($request->all());
        $marca->save();

        flash()->success('Marca actualizado.');

        return redirect(route('marcas.index'));
    }

    /**
     * Remove the specified Marca from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var Marca $marca */
        $marca = Marca::find($id);

        if (empty($marca)) {
            flash()->error('Marca no encontrado');

            return redirect(route('marcas.index'));
        }

        $marca->delete();

        flash()->success('Marca eliminado.');

        return redirect(route('marcas.index'));
    }
}
