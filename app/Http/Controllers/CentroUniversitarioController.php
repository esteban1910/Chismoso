<?php

namespace App\Http\Controllers;

use App\CentroUniversitario;
use Illuminate\Http\Request;

class CentroUniversitarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $centros = CentroUniversitario::all();
        return view('centros.index', compact('centros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('centros.formulario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'centro' => 'required|string|min:3|max:10',
        ]);

        CentroUniversitario::create($request->all());
        return redirect()->route('centro.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CentroUniversitario  $centroUniversitario
     * @return \Illuminate\Http\Response
     */
    public function show(CentroUniversitario $centro)
    {
        return view('centros.show', compact('centro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CentroUniversitario  $centroUniversitario
     * @return \Illuminate\Http\Response
     */
    public function edit(CentroUniversitario $centro)
    {
        return view('centros.formulario', compact('centro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CentroUniversitario  $centroUniversitario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CentroUniversitario $centro)
    {
        $request->validate([
            'centro' => 'required|string|min:3|max:10',
        ]);

        $centro->centro = $request->centro;
        $centro->save();
        return redirect()->route('centro.show', $centro->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CentroUniversitario  $centroUniversitario
     * @return \Illuminate\Http\Response
     */
    public function destroy(CentroUniversitario $centro)
    {
        $centro->delete();
        return redirect()->route('centro.index');
    }
}
