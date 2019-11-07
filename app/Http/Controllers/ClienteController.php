<?php

namespace App\Http\Controllers;

use App\CentroUniversitario;
use App\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $centros = CentroUniversitario::pluck('centro', 'id');
        return view('clientes.form', compact('centros'));
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
            'nombre' => 'required|string|max:255',
            'codigo' => 'required|integer|min:1',
            'correo' => 'required|email|unique:clientes,correo',
            'centro_universitario_id' => 'required|integer|min:1',
        ]);
        //Alumno::create($request->all());
        $cliente = new Cliente([
              'nombre' => $request->nombre,
              'codigo' => $request->codigo,
              'correo' => $request->correo,
              'fecha_nacimiento' => $request->fecha_nacimiento,
            ]
        );
        $centro = CentroUniversitario::find($request->centro_universitario_id);
        $centro->clientes()->save($cliente);

        return redirect()->route('cliente.show', $cliente->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        return view('clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
