<?php

namespace App\Http\Controllers;

use App\DataTables\TecnicoDataTable;
use App\Http\Requests\CreateTecnicoRequest;
use App\Http\Requests\UpdateTecnicoRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Tecnico;
use Illuminate\Http\Request;

class TecnicoController extends AppBaseController
{

    public function __construct()
    {
        $this->middleware('permission:Ver Tecnicos')->only('show');
        $this->middleware('permission:Crear Tecnicos')->only(['create','store']);
        $this->middleware('permission:Editar Tecnicos')->only(['edit','update']);
        $this->middleware('permission:Eliminar Tecnicos')->only('destroy');
    }
    /**
     * Display a listing of the Tecnico.
     */
    public function index(TecnicoDataTable $tecnicoDataTable)
    {
    return $tecnicoDataTable->render('tecnicos.index');
    }


    /**
     * Show the form for creating a new Tecnico.
     */
    public function create()
    {
        return view('tecnicos.create');
    }

    /**
     * Store a newly created Tecnico in storage.
     */
    public function store(CreateTecnicoRequest $request)
    {
        $input = $request->all();

        /** @var Tecnico $tecnico */
        $tecnico = Tecnico::create($input);

        flash()->success('Tecnico guardado.');

        return redirect(route('tecnicos.index'));
    }

    /**
     * Display the specified Tecnico.
     */
    public function show($id)
    {
        /** @var Tecnico $tecnico */
        $tecnico = Tecnico::find($id);

        if (empty($tecnico)) {
            flash()->error('Tecnico no encontrado');

            return redirect(route('tecnicos.index'));
        }

        return view('tecnicos.show')->with('tecnico', $tecnico);
    }

    /**
     * Show the form for editing the specified Tecnico.
     */
    public function edit($id)
    {
        /** @var Tecnico $tecnico */
        $tecnico = Tecnico::find($id);

        if (empty($tecnico)) {
            flash()->error('Tecnico no encontrado');

            return redirect(route('tecnicos.index'));
        }

        return view('tecnicos.edit')->with('tecnico', $tecnico);
    }

    /**
     * Update the specified Tecnico in storage.
     */
    public function update($id, UpdateTecnicoRequest $request)
    {
        /** @var Tecnico $tecnico */
        $tecnico = Tecnico::find($id);

        if (empty($tecnico)) {
            flash()->error('Tecnico no encontrado');

            return redirect(route('tecnicos.index'));
        }

        $tecnico->fill($request->all());
        $tecnico->save();

        flash()->success('Tecnico actualizado.');

        return redirect(route('tecnicos.index'));
    }

    /**
     * Remove the specified Tecnico from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var Tecnico $tecnico */
        $tecnico = Tecnico::find($id);

        if (empty($tecnico)) {
            flash()->error('Tecnico no encontrado');

            return redirect(route('tecnicos.index'));
        }

        $tecnico->delete();

        flash()->success('Tecnico eliminado.');

        return redirect(route('tecnicos.index'));
    }
}
