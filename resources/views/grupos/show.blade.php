@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Información del grupo</div>

                <div class="card-body">
                <h3>grupo: {{ $grupo->nombre_grupo }}</h3>
                <ul>
                  @foreach($grupo->clientes as $cliente)
                    <li>{{ $cliente->nombre }}</li>
                  @endforeach
                </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection