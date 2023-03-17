<?php

namespace App\Http\Controllers;

use App\Models\Heroes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeroesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['heroes'] = Heroes::paginate(5);
        return view('heroes.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('heroes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Datosheroes = request()->except('_token');
        if ($request->hasFile('Foto')){
            $Datosheroes['Foto'] = $request->file('Foto')->store('uploads','public');
        }
        Heroes::insert($Datosheroes);
        return response()->json($Datosheroes);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Heroes  $heroes
     * @return \Illuminate\Http\Response
     */
    public function show(Heroes $heroes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Heroes  $heroes
     * @return \Illuminate\Http\Response
     */
    public function edit(Heroes $id)
    {
        $heroe = Heroes::findOrFail($id);
        return view('heroes.edit', compact('heroe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Heroes  $heroes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Datosheroes = request()->except(['_token','_method']);

        if ($request->hasFile('Foto')){
            Storage::delete('public/'.$heroe-> Foto);
            $Datosheroes['Foto'] = $request->file('Foto')->store('uploads','public');
        }

        Heroes::where('id', '=', $id)-> update($Datosheroes);

        $heroe = Heroes::findOrFail($id);
        return view('heroes.edit', compact('heroe'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Heroes  $heroes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Heroes::destroy($id);
        return redirect('heroes');
    }
}
