{{--@extends('layouts.principal')--}}
@extends('layouts.app')

@section('content')
{{--<main class="py-5">
<div class="py-5">--}}
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                    <div class="card-body">

                        @if(isset($registro))
                            {!! Form::model($registro, ['route' => ['registro.update', $registro->id], 'method' => 'PATCH']) !!}
                        @else
                            {!! Form::open(['url' => route('registro.store')]) !!}
                        @endif
                        @csrf

                        <label for="pregunta1">Genero de pelicula favorito</label>
                        <div id="pregunta1">
                            <div class="custom-control custom-radio">
                                <input type="radio" name="pregunta1"  class="custom-control-input" id="opcion1" value="a">
                                <label class="custom-control-label" for="opcion1">Comedia</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" name="pregunta1"  class="custom-control-input" id="opcion2" value="b">
                                <label class="custom-control-label" for="opcion2">Comedia</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" name="pregunta1" class="custom-control-input" id="opcion3" value="c">
                                <label class="custom-control-label" for="opcion3">Romantica</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" name="pregunta1" class="custom-control-input" id="opcion4" value="d">
                                <label class="custom-control-label" for="opcion4">Drama</label>
                            </div>
                        </div>

                        <br>
                        <hr>

                        <label for="pregunta2">¿Qué serie prefieres?</label>
                        <div id="pregunta2">
                            <div class="custom-control custom-radio">
                                <input type="radio" name="pregunta2"  class="custom-control-input" id="opcion5" value="a">
                                <label class="custom-control-label" for="opcion5">Malcolm el de enmedio</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" name="pregunta2" class="custom-control-input" id="opcion6" value="b">
                                <label class="custom-control-label" for="opcion6">Drake y josh</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" name="pregunta2" class="custom-control-input" id="opcion7" value="c">
                                <label class="custom-control-label" for="opcion7">Zoey 101</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" name="pregunta2" class="custom-control-input" id="opcion8" value="d">
                                <label class="custom-control-label" for="opcion8">!Carly</label>
                            </div>
                        </div>

                        <br>
                        <hr>

                        <label for="pregunta3">¿Qué papas prefieres?</label>
                        <div id="pregunta3">
                            <div class="custom-control custom-radio">
                                <input type="radio" name="pregunta3" class="custom-control-input" id="opcion9" value="a">
                                <label class="custom-control-label" for="opcion9">Doritos</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" name="pregunta3"  class="custom-control-input" id="opcion10" value="b">
                                <label class="custom-control-label" for="opcion10">Sabritas</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" name="pregunta3" value="{{ $usuario->pregunta3 ?? '' }}" class="custom-control-input" id="opcion11" value="c">
                                <label class="custom-control-label" for="opcion11">Takis</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" name="pregunta3" class="custom-control-input" id="opcion12" value="d">
                                <label class="custom-control-label" for="opcion12">Chips</label>
                            </div>
                        </div>

                        <br>
                        <hr>

                        <label for="pregunta4">¿Qué tazos prefieres?</label>
                        <div id="pregunta4">
                            <div class="custom-control custom-radio">
                                <input type="radio" name="pregunta4" class="custom-control-input" id="opcion13" value="a">
                                <label class="custom-control-label" for="opcion13">Pokemon</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" name="pregunta4" class="custom-control-input" id="opcion14" value="b">
                                <label class="custom-control-label" for="opcion14">Dragon Ball</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" name="pregunta4" class="custom-control-input" id="opcion15" value="c">
                                <label class="custom-control-label" for="opcion15">Bob esponja</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" name="pregunta4" class="custom-control-input" id="opcion16" value="d">
                                <label class="custom-control-label" for="opcion16">Los Simpson</label>
                            </div>
                        </div>

                        <br>
                        <hr>

                        <label for="pregunta5">¿Qué producto prefieres?</label>
                        <div id="pregunta5">
                            <div class="custom-control custom-radio">
                                <input type="radio" name="pregunta5" class="custom-control-input" id="opcion17" value="a">
                                <label class="custom-control-label" for="opcion17">Los llaveros Funki Punky</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" name="pregunta5" class="custom-control-input" id="opcion18" value="b">
                                <label class="custom-control-label" for="opcion18">Wiwichos</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" name="pregunta5" class="custom-control-input" id="opcion19" value="c">
                                <label class="custom-control-label" for="opcion19">Perritos de vuala</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" name="pregunta5" class="custom-control-input" id="opcion20" value="b">
                                <label class="custom-control-label" for="opcion20">Echa pedos de los Simpson</label>
                            </div>
                        </div>

                        <br>

                        <button type="submit" class="btn btn-primary">Enviar</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>  
</main>
</div>    
@endsection