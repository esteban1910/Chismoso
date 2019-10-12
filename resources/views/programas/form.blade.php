@extends('layouts.principal')

@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                    <div class="card-body">
                    <!--<form action="{{ route('registro.store') }}" method="POST">
                        @csrf-->
                        <!-- Nueva linea -->
                        
                        @if(isset($programa))
                            {{--<form action="{{ route('registro.update', $registro->id) }}" method="POST"--}}
                                    {!! Form::open(['url' => route('registro.store')]) !!}
                            <input type="hidden" name="_method" value="PATCH">
                        @else
                            {{--<form action="{{ route('registro.store') }}" method="POST">--}}
                                    {!! Form::open(['url' => route('registro.store')]) !!}
                        @endif
                            @csrf
                        <!-- fin linea -->
                        <label for="pregunta1">Genero de pelicula favorito</label>
                        <input type="text" name="pregunta1" value="{{ $usuario->pregunta1 ?? '' }}" class="form-control" id="pregunta1">
                        <!--
                        <div id="pregunta1">
                            <div class="custom-control custom-radio">
                                <input type="radio" name="pregunta1" value="{{ $usuario->pregunta1 ?? '' }}" class="custom-control-input" id="opcion1" value="a">
                                <label class="custom-control-label" for="opcion1">Accion</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" name="pregunta1" value="{{ $usuario->pregunta1 ?? '' }}" class="custom-control-input" id="opcion2" value="b">
                                <label class="custom-control-label" for="opcion2">Comedia</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" name="pregunta1" value="{{ $usuario->pregunta1 ?? '' }}" class="custom-control-input" id="opcion3" value="c">
                                <label class="custom-control-label" for="opcion3">Romantica</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" name="pregunta1" value="{{ $usuario->pregunta1 ?? '' }}" class="custom-control-input" id="opcion4" value="d">
                                <label class="custom-control-label" for="opcion4">Drama</label>
                            </div>
                        </div>
                        -->
                        <br>
                        <hr>
                        <label for="pregunta2">¿Qué serie prefieres?</label>
                        <input type="text" name="pregunta2" value="{{ $usuario->pregunta2 ?? '' }}" class="form-control" id="pregunta2">
                        <!--
                        <div id="pregunta2">
                            <div class="custom-control custom-radio">
                                <input type="radio" name="pregunta2" value="{{ $usuario->pregunta2 ?? '' }}" class="custom-control-input" id="opcion5" value="a">
                                <label class="custom-control-label" for="opcion5">Malcolm el de enmedio</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" name="pregunta2" value="{{ $usuario->pregunta2 ?? '' }}" class="custom-control-input" id="opcion6" value="b">
                                <label class="custom-control-label" for="opcion6">Drake y josh</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" name="pregunta2" value="{{ $usuario->pregunta2 ?? '' }}" class="custom-control-input" id="opcion7" value="c">
                                <label class="custom-control-label" for="opcion7">Zoey 101</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" name="pregunta2" value="{{ $usuario->pregunta2 ?? '' }}" class="custom-control-input" id="opcion8" value="d">
                                <label class="custom-control-label" for="opcion8">!Carly</label>
                            </div>
                        </div>
                        -->
                        <br>
                        <hr>
                        <label for="pregunta3">¿Qué papas prefieres?</label>
                        <input type="text" name="pregunta3" value="{{ $usuario->pregunta3 ?? '' }}" class="form-control" id="pregunta3">
                        <!--
                        <div id="pregunta3">
                            <div class="custom-control custom-radio">
                                <input type="radio" name="pregunta3" value="{{ $usuario->pregunta3 ?? '' }}" class="custom-control-input" id="opcion9" value="a">
                                <label class="custom-control-label" for="opcion9">Doritos</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" name="pregunta3" value="{{ $usuario->pregunta3 ?? '' }}" class="custom-control-input" id="opcion10" value="b">
                                <label class="custom-control-label" for="opcion10">Sabritas</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" name="pregunta3" value="{{ $usuario->pregunta3 ?? '' }}" class="custom-control-input" id="opcion11" value="c">
                                <label class="custom-control-label" for="opcion11">Takis</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" name="pregunta3" value="{{ $usuario->pregunta3 ?? '' }}" class="custom-control-input" id="opcion12" value="d">
                                <label class="custom-control-label" for="opcion12">Chips</label>
                            </div>
                        </div>
                        -->
                        <br>
                        <hr>
                        <label for="pregunta4">¿Qué tazos prefieres?</label>
                        <input type="text" name="pregunta4" value="{{ $usuario->pregunta4 ?? '' }}" class="form-control" id="pregunta4">
                        <!--
                        <div id="pregunta4">
                            <div class="custom-control custom-radio">
                                <input type="radio" name="pregunta4" value="{{ $usuario->pregunta4 ?? '' }}" class="custom-control-input" id="opcion13" value="a">
                                <label class="custom-control-label" for="opcion13">Pokemon</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" name="pregunta4" value="{{ $usuario->pregunta4 ?? '' }}" class="custom-control-input" id="opcion14" value="b">
                                <label class="custom-control-label" for="opcion14">Dragon Ball</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" name="pregunta4" value="{{ $usuario->pregunta4 ?? '' }}" class="custom-control-input" id="opcion15" value="c">
                                <label class="custom-control-label" for="opcion15">Bob esponja</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" name="pregunta4" value="{{ $usuario->pregunta4 ?? '' }}" class="custom-control-input" id="opcion16" value="d">
                                <label class="custom-control-label" for="opcion16">Los Simpson</label>
                            </div>
                        </div>
                        -->
                        <br>
                        <hr>
                        <label for="pregunta5">¿Qué producto prefieres?</label>
                        <input type="text" name="pregunta5" value="{{ $usuario->pregunta5 ?? '' }}" class="form-control" id="pregunta5">
                        <!--
                        <div id="pregunta5">
                            <div class="custom-control custom-radio">
                                <input type="radio" name="pregunta5" value="{{ $usuario->pregunta5 ?? '' }}" class="custom-control-input" id="opcion17" value="a">
                                <label class="custom-control-label" for="opcion17">Los llaveros Funki Punky</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" name="pregunta5" value="{{ $usuario->pregunta5 ?? '' }}" class="custom-control-input" id="opcion18" value="b">
                                <label class="custom-control-label" for="opcion18">Wiwichos</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" name="pregunta5" value="{{ $usuario->pregunta5 ?? '' }}" class="custom-control-input" id="opcion19" value="c">
                                <label class="custom-control-label" for="opcion19">Perritos de vuala</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" name="pregunta5" value="{{ $usuario->pregunta5 ?? '' }}" class="custom-control-input" id="opcion20" value="b">
                                <label class="custom-control-label" for="opcion20">Echa pedos de los Simpson</label>
                            </div>
                        </div>
                        -->
                        <br>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        {!! Form::close() !!}
                    {{--</form>--}}
                </div>
            </div>
        </div>
    </div>
</div>      
@endsection