@extends('layouts.principal')

@section('contenido')
<main class="py-5">
<div class="py-5">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Información del Programa</div>

                <div class="card-body">
                  <a href="{{ route('registro.index') }}" class="btn btn-default btn-sm">Listado de Programas</a>
                    <table class="table">
                      <thead>
                     <tr><th>ID</th> <th>Respuesta 1</th> <th>Respuesta 2</th> <th>Respuesta 3</th> <th>Respuesta 4</th> <th>Respuesta 5</th> <th>Acciones</th></tr>
                      </thead>
                      <tbody>
                          <tr>
                            <td>{{ $registro->id }}</td>
                            <td>{{ $registro->pregunta1 }}</td>
                            <td>{{ $registro->pregunta2 }}</td>
                            <td>{{ $registro->pregunta3 }}</td>
                            <td>{{ $registro->pregunta4 }}</td>
                            <td>{{ $registro->pregunta5 }}</td>
                            <td>
                              <a href="{{ route('registro.edit', $registro->id) }}" class="btn btn-sm btn-warning">Editar</a>
                              <form action="{{ route('registro.destroy', $registro->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                              </form>
                            </td>
                          </tr>
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
</div>
@endsection