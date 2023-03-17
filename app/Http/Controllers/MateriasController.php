<?php

namespace App\Http\Controllers;

use App\Models\Materias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MateriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['materias'] = Materias::paginate(6);
        return view('materias.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $Datosmaterias = request()->except('_token');
        Materias::insert($Datosmaterias);
        return response()->json($Datosmaterias);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materias  $materias
     * @return \Illuminate\Http\Response
     */
    public function show(Materias $materias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materias  $materias
     * @return \Illuminate\Http\Response
     */
    public function edit(Materias $id)
    {
        //
        $materia = Materias::findOrFail($id);
        return view('materias.edit', compact('materia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Materias  $materias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $Datosmaterias = request()->except(['_token','_method']);

        if ($request->hasFile('Foto')){
            Storage::delete('public/'.$materia-> Foto);
            $Datosmaterias['Foto'] = $request->file('Foto')->store('uploads','public');
        }

        Materias::where('id', '=', $id)-> update($Datosmaterias);

        $materia = Materias::findOrFail($id);
        return view('materias.edit', compact('materia'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materias  $materias
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Materias::destroy($id);
        return redirect('materia');
    }
}
