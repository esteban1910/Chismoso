@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Información del Programa</div>

                <div class="card-body">
                  <a href="{{ route('cliente.index') }}" class="btn btn-default btn-sm">Info. Alumno</a>
                    <table class="table">
                      <thead>
                        <tr><th>ID</th> <th>Nombre</th> <th>Codigo</th> <th>Correo</th> <th>Fecha Nacimiento</th> <th>Centro Universitario</th></tr>
                      </thead>
                      <tbody>
                          <tr>
                            <td>{{ $cliente->id }}</td>
                            <td>{{ $cliente->nombre }}</td>
                            <td>{{ $cliente->codigo }}</td>
                            <td>{{ $cliente->correo }}</td>
                            <td>{{ $cliente->fecha_nacimiento->format('d/m/Y') }}</td>
                            <td>{{ $cliente->centroUniversitario->centro }}</td>
                          </tr>
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection