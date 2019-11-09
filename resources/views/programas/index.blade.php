{{--@extends('layouts.principal')--}}
@extends('layouts.app')

@section('content')
{{--<main class="py-5">
<div class="py-5">--}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Todas las respuestas</div>

                <div class="card-body">
                  <a href="{{ route('registro.create') }}" class="btn btn-success btn-sm">Contestar De nuevo</a>
                    <table class="table">
                      <thead>
                        <tr><th>ID</th> <th>Primera pregunta</th> <th>Segunda pregunta</th> <th>Tercera pregunta</th><th>Cuarta pregunta</th><th>Quinta pregunta</th> <th>Acciones</th> </tr>
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
                            <td>
                              <a href="{{ route('registro.show', $usuario->id) }}" class="btn btn-sm btn-info">Ver Detalle</a>
                          </td>
                          </tr>
                        @endforeach
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