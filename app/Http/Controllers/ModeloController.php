<?php

namespace App\Http\Controllers;

use App\DataTables\ModeloDataTable;
use App\Http\Requests\CreateModeloRequest;
use App\Http\Requests\UpdateModeloRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Modelo;
use Illuminate\Http\Request;

class ModeloController extends AppBaseController
{

    public function __construct()
    {
        $this->middleware('permission:Ver Modelos')->only('show');
        $this->middleware('permission:Crear Modelos')->only(['create','store']);
        $this->middleware('permission:Editar Modelos')->only(['edit','update']);
        $this->middleware('permission:Eliminar Modelos')->only('destroy');
    }
    /**
     * Display a listing of the Modelo.
     */
    public function index(ModeloDataTable $modeloDataTable)
    {
    return $modeloDataTable->render('modelos.index');
    }


    /**
     * Show the form for creating a new Modelo.
     */
    public function create()
    {
        return view('modelos.create');
    }

    /**
     * Store a newly created Modelo in storage.
     */
    public function store(CreateModeloRequest $request)
    {
        $input = $request->all();

        /** @var Modelo $modelo */
        $modelo = Modelo::create($input);

        flash()->success('Modelo guardado.');

        return redirect(route('modelos.index'));
    }

    /**
     * Display the specified Modelo.
     */
    public function show($id)
    {
        /** @var Modelo $modelo */
        $modelo = Modelo::find($id);

        if (empty($modelo)) {
            flash()->error('Modelo no encontrado');

            return redirect(route('modelos.index'));
        }

        return view('modelos.show')->with('modelo', $modelo);
    }

    /**
     * Show the form for editing the specified Modelo.
     */
    public function edit($id)
    {
        /** @var Modelo $modelo */
        $modelo = Modelo::find($id);

        if (empty($modelo)) {
            flash()->error('Modelo no encontrado');

            return redirect(route('modelos.index'));
        }

        return view('modelos.edit')->with('modelo', $modelo);
    }

    /**
     * Update the specified Modelo in storage.
     */
    public function update($id, UpdateModeloRequest $request)
    {
        /** @var Modelo $modelo */
        $modelo = Modelo::find($id);

        if (empty($modelo)) {
            flash()->error('Modelo no encontrado');

            return redirect(route('modelos.index'));
        }

        $modelo->fill($request->all());
        $modelo->save();

        flash()->success('Modelo actualizado.');

        return redirect(route('modelos.index'));
    }

    /**
     * Remove the specified Modelo from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var Modelo $modelo */
        $modelo = Modelo::find($id);

        if (empty($modelo)) {
            flash()->error('Modelo no encontrado');

            return redirect(route('modelos.index'));
        }

        $modelo->delete();

        flash()->success('Modelo eliminado.');

        return redirect(route('modelos.index'));
    }
}
