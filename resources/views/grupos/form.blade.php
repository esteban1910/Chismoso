@extends('layouts.principal')

@section('contenido')
<main class="py-5">
<div class="py-5">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Captura de Grupo</div>

                <div class="card-body">
                    @if(isset($grupo))
                      {!! Form::model($grupo, ['route' => ['grupo.update', $grupo->id], 'method' => 'PATCH']) !!}
                    @else
                      {!! Form::open(['route' => 'grupo.store']) !!}
                    @endif
                      <div class="form-group">
                          {!! Form::label('nombre_grupo', 'Nombre del grupo') !!}
                          {!! Form::text('nombre_grupo', null, ['class' => 'form-control']) !!}
                      </div>
                      <div class="form-group">
                          {!! Form::label('cliente_id[]', 'clientes') !!}
                          {!! Form::select('cliente_id[]', $clientes, $seleccionados ?? null, ['class' => 'form-control', 'multiple']) !!}
                      </div>

                      <button type="submit" class="btn btn-primary">Enviar</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection