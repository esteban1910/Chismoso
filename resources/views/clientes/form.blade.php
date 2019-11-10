@extends('layouts.principal')

@section('contenido')
<main class="py-5">
<div class="py-5">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                  @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif

                    @if(isset($cliente))
                      {!! Form::model($cliente, ['route' => ['cliente.update', $cliente->id], 'method' => 'PATCH']) !!}
                    @else
                      {!! Form::open(['route' => 'cliente.store']) !!}
                    @endif
                      <div class="form-group">
                          {!! Form::label('nombre', 'Nombre del Alumno') !!}
                          {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
                      </div>
                      <div class="form-group">
                          {!! Form::label('codigo', 'Código del Alumno') !!}
                          {!! Form::number('codigo', null, ['class' => 'form-control']) !!}
                      </div>
                      <div class="form-group">
                          {!! Form::label('correo', 'Correo del Alumno') !!}
                          {!! Form::email('correo', null, ['class' => 'form-control']) !!}
                      </div>
                      <div class="form-group">
                          {!! Form::label('fecha_nacimiento', 'Fecha Nacimiento') !!}
                          {!! Form::date('fecha_nacimiento', null, ['class' => 'form-control']) !!}
                      </div>

                      <div class="form-group">
                          {!! Form::label('centro_universitario_id', 'Centro Universitario') !!}
                          {!! Form::select('centro_universitario_id', $centros, null, ['class' => 'form-control']) !!}

                      </div>

                      <button type="submit" class="btn btn-primary">Enviar</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection