@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Programas Educativos</div>

                <div class="card-body">
                  <a href="{{ route('registro.create') }}" class="btn btn-success btn-sm">Contestar De nuevo</a>
                    <table class="table">
                      <thead>
                        <tr><th>ID</th> <th>Primera pregunta</th> <th>Segunda pregunta</th> <th>Tercera pregunta</th><th>Cuarta pregunta</th><th>Quinta pregunta</th></tr>
                      </thead>
                      <tbody>
                        @foreach($usuarios as $usuario)
                          <tr>
                            <td>{{ $usuario->id }}</td>
                            <td>{{ $usuario->pregunta1 }}</td>
                            <td>{{ $usuario->pregunta2 }}</td>
                            <td>{{ $usuario->pregunta3 }}</td>
                            <td>{{ $usuario->pregunta4 }}</td>
                            <td>{{ $usuario->pregunta5 }}</td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection