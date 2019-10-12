<?php

namespace App\Http\Controllers;

use App\rc;
use App\Registro;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Registro::all();
        return view('programas.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('programas.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Registro::create($request->all());
        return redirect()->route('registro.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\rc  $rc
     * @return \Illuminate\Http\Response
     */
    public function show(Registro $registro)
    {
        //
        return view('programas.programaShow',compact('registro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\rc  $rc
     * @return \Illuminate\Http\Response
     */
    public function edit(Registro $registro)
    {
        //
        return view('programas.form', compact('registro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\rc  $rc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registro $registro)
    {
        //
        /*
        $programa->programa = $request->programa;
        $programa->clave = $request->clave;
        $programa->save();
        return redirect()->route('programa.show', $programa->id);
        */
        $registro->pregunta1= $request->pregunta1;
        $registro->pregunta2= $request->pregunta2;
        $registro->pregunta3= $request->pregunta3;
        $registro->pregunta4= $request->pregunta4;
        $registro->pregunta5= $request->pregunta5;

        $registro->save();

        return redirect()->route('registro.show',$registro->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\rc  $rc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registro $registro)
    {
        $registro->delete();
        return redirect()->route('registro.index');
    }
}
