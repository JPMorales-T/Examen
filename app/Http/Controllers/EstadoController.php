<?php

namespace App\Http\Controllers;

use App\DataTables\EstadoDataTable;
use App\Http\Requests\CreateEstadoRequest;
use App\Http\Requests\UpdateEstadoRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Estado;
use Illuminate\Http\Request;

class EstadoController extends AppBaseController
{

    public function __construct()
    {
        $this->middleware('permission:Ver Estados')->only('show');
        $this->middleware('permission:Crear Estados')->only(['create','store']);
        $this->middleware('permission:Editar Estados')->only(['edit','update']);
        $this->middleware('permission:Eliminar Estados')->only('destroy');
    }
    /**
     * Display a listing of the Estado.
     */
    public function index(EstadoDataTable $estadoDataTable)
    {
    return $estadoDataTable->render('estados.index');
    }


    /**
     * Show the form for creating a new Estado.
     */
    public function create()
    {
        return view('estados.create');
    }

    /**
     * Store a newly created Estado in storage.
     */
    public function store(CreateEstadoRequest $request)
    {
        $input = $request->all();

        /** @var Estado $estado */
        $estado = Estado::create($input);

        flash()->success('Estado guardado.');

        return redirect(route('estados.index'));
    }

    /**
     * Display the specified Estado.
     */
    public function show($id)
    {
        /** @var Estado $estado */
        $estado = Estado::find($id);

        if (empty($estado)) {
            flash()->error('Estado no encontrado');

            return redirect(route('estados.index'));
        }

        return view('estados.show')->with('estado', $estado);
    }

    /**
     * Show the form for editing the specified Estado.
     */
    public function edit($id)
    {
        /** @var Estado $estado */
        $estado = Estado::find($id);

        if (empty($estado)) {
            flash()->error('Estado no encontrado');

            return redirect(route('estados.index'));
        }

        return view('estados.edit')->with('estado', $estado);
    }

    /**
     * Update the specified Estado in storage.
     */
    public function update($id, UpdateEstadoRequest $request)
    {
        /** @var Estado $estado */
        $estado = Estado::find($id);

        if (empty($estado)) {
            flash()->error('Estado no encontrado');

            return redirect(route('estados.index'));
        }

        $estado->fill($request->all());
        $estado->save();

        flash()->success('Estado actualizado.');

        return redirect(route('estados.index'));
    }

    /**
     * Remove the specified Estado from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var Estado $estado */
        $estado = Estado::find($id);

        if (empty($estado)) {
            flash()->error('Estado no encontrado');

            return redirect(route('estados.index'));
        }

        $estado->delete();

        flash()->success('Estado eliminado.');

        return redirect(route('estados.index'));
    }
}
