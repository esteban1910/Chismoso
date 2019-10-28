@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                {{-- Muestra errores --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card-body">
                    @if(isset($centro))
                        {!! Form::model($centro, ['route' => ['centro.update', $centro->id], 'method' => 'PATCH']) !!}
                    @else
                        {!! Form::open(['route' => 'centro.store']) !!}
                    @endif
                    <div class="form-group">
                        {!! Form::label('centro', 'Centro Universitario') !!}
                        {!! Form::text('centro', null, ['class' => $errors->has('centro') ? 'form-control is-invalid' : 'form-control']) !!}
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection