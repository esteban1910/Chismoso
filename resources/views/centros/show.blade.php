@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Información del centro</div>

                <div class="card-body">
                  <a href="{{ route('centro.index') }}" class="btn btn-default btn-sm">Listado de centros</a>
                    <table class="table">
                      <thead>
                        <tr><th>ID</th> <th>centro Educativo</th><th>Acciones</th></tr>
                      </thead>
                      <tbody>
                          <tr>
                            <td>{{ $centro->id }}</td>
                            <td>{{ $centro->centro }}</td>
                            <td>
                              <a href="{{ route('centro.edit', $centro->id) }}" class="btn btn-sm btn-warning">Editar</a>
                              <form action="{{ route('centro.destroy', $centro->id) }}" method="POST">
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
@endsection