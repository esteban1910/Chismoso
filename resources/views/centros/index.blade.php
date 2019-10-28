@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Centros Universitarios</div>

                <div class="card-body">
                    <a href="{{ route('centro.create') }}" class="btn btn-success btn-sm">Agregar Centro</a>
                    <table class="table">
                      <thead>
                        <tr><th>ID</th> <th>Centro Universitario</th><th>Acciones</th></tr>
                      </thead>
                      <tbody>
                        @foreach($centros as $centro)
                          <tr>
                            <td>{{ $centro->id }}</td>
                            <td>{{ $centro->centro }}</td>
                            <td>
                                <a href="{{ route('centro.show', $centro->id) }}" class="btn btn-sm btn-info">Ver Detalle</a>
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
@endsection