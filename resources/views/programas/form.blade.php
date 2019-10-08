@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('registro.store') }}" method="POST">
        @csrf
        
        <label for="pregunta1">Genero de pelicula favorito</label>
        <div id="pregunta1">
            <div class="custom-control custom-radio">
                <input type="radio" id="opcion1" name="pregunta1" class="custom-control-input" value="a">
                <label class="custom-control-label" for="opcion1">Accion</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="opcion2" name="pregunta1" class="custom-control-input" value="b">
                <label class="custom-control-label" for="opcion2">Comedia</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="opcion3" name="pregunta1" class="custom-control-input" value="c">
                <label class="custom-control-label" for="opcion3">Romantica</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="opcion4" name="pregunta1" class="custom-control-input" value="d">
                <label class="custom-control-label" for="opcion4">Drama</label>
            </div>
        </div>
        <br>
        <hr>
        <label for="pregunta2">¿Qué serie prefieres?</label>
        <div id="pregunta2">
            <div class="custom-control custom-radio">
                <input type="radio" id="opcion5" name="pregunta2" class="custom-control-input" value="a">
                <label class="custom-control-label" for="opcion5">Malcolm el de enmedio</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="opcion6" name="pregunta2" class="custom-control-input" value="b">
                <label class="custom-control-label" for="opcion6">Drake y josh</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="opcion7" name="pregunta2" class="custom-control-input" value="c">
                <label class="custom-control-label" for="opcion7">Zoey 101</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="opcion8" name="pregunta2" class="custom-control-input" value="d">
                <label class="custom-control-label" for="opcion8">!Carly</label>
            </div>
        </div>
        <br>
        <hr>
        <label for="pregunta3">¿Qué papas prefieres?</label>
        <div id="pregunta3">
            <div class="custom-control custom-radio">
                <input type="radio" id="opcion9" name="pregunta3" class="custom-control-input"  value="a">
                <label class="custom-control-label" for="opcion9">Doritos</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="opcion10" name="pregunta3" class="custom-control-input" value="b">
                <label class="custom-control-label" for="opcion10">Sabritas</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="opcion11" name="pregunta3" class="custom-control-input" value="c">
                <label class="custom-control-label" for="opcion11">Takis</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="opcion12" name="pregunta3" class="custom-control-input" value="d">
                <label class="custom-control-label" for="opcion12">Chips</label>
            </div>
        </div>
        <br>
        <hr>
        <label for="pregunta4">¿Qué tazos prefieres?</label>
        <div id="pregunta4">
            <div class="custom-control custom-radio">
                <input type="radio" id="opcion13" name="pregunta4" class="custom-control-input" value="a">
                <label class="custom-control-label" for="opcion13">Pokemon</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="opcion14" name="pregunta4" class="custom-control-input" value="b">
                <label class="custom-control-label" for="opcion14">Dragon Ball</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="opcion15" name="pregunta4" class="custom-control-input" value="c">
                <label class="custom-control-label" for="opcion15">Bob esponja</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="opcion16" name="pregunta4" class="custom-control-input" value="d">
                <label class="custom-control-label" for="opcion16">Los Simpson</label>
            </div>
        </div>
        <br>
        <hr>
        <label for="pregunta5">¿Qué producto prefieres?</label>
        <div id="pregunta5">
            <div class="custom-control custom-radio">
                <input type="radio" id="opcion17" name="pregunta5" class="custom-control-input" value="a">
                <label class="custom-control-label" for="opcion17">Los llaveros Funki Punky</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="opcion18" name="pregunta5" class="custom-control-input" value="b">
                <label class="custom-control-label" for="opcion18">Wiwichos</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="opcion19" name="pregunta5" class="custom-control-input" value="c">
                <label class="custom-control-label" for="opcion19">Perritos de vuala</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="opcion20" name="pregunta5" class="custom-control-input" value="d">
                <label class="custom-control-label" for="opcion20">Echa pedos de los Simpson</label>
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>      
@endsection