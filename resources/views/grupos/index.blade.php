@extends('layouts.principal')

@section('contenido')
<main class="py-5">
<div class="py-5">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listado de grupos</div>

                <div class="card-body">
                <table class="table">
                  <tr>
                    <th>grupo</th>
                    <th>clientes</th>
                  </tr>
                  @foreach($grupos as $grupo)
                    <tr>
                      <td>{{ $grupo->nombre_grupo }}</td>
                      <td>
                        <ul>
                        @foreach($grupo->clientes as $cliente)
                          <li>{{ $cliente->nombre }}</li>
                        @endforeach
                        </ul>
                      </td>
                    </tr>
                  @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection