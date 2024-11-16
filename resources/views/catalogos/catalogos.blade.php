@extends('plantillas.plantilla')

@section('contenido')

       {{--  <div class="list-group col-2 mt-3">
            <a href="#" class="list-group-item list-group-item-primary list-group-item-action">Periodos</a>
            <a href="{{route('plazas.index')}}" class="list-group-item list-group-item-primary list-group-item-action">Plazas</a>
            <a href="{{route('puestos.index')}}" class="list-group-item list-group-item-primary list-group-item-action">Puestos</a>
            <a href="#" class="list-group-item list-group-item-primary list-group-item-action">Personal</a>
            <a href="#" class="list-group-item list-group-item-primary list-group-item-action">Deptos</a>
            <a href="#" class="list-group-item list-group-item-primary list-group-item-action">Carreras</a>
            <a href="#" class="list-group-item list-group-item-primary list-group-item-action">Reticulas</a>
            <a href="{{route('carreras.index')}}" class="list-group-item list-group-item-primary list-group-item-action">Materias</a>
            <a href="{{ route('alumnos.index') }}" class="list-group-item list-group-item-primary list-group-item-action">Alumnos</a>
            <a href="{{ route('edificios.index') }}" class="list-group-item list-group-item-primary list-group-item-action">Edificios</a>
            <a href="{{ route('lugares.index') }}" class="list-group-item list-group-item-primary list-group-item-action">Lugares</a>
        </div> --}}
        <div class="list-group mt-3">
            <a href=""
                class="list-group-item list-group-item-primary list-group-item-action">Periodos</a>
            <a href="{{ route('plazas.index') }}"
                class="list-group-item list-group-item-primary list-group-item-action">Plazas</a>
            <a href="{{ route('puestos.index') }}"
                class="list-group-item list-group-item-primary list-group-item-action">Puestos</a>
            <a href="{{ route('personals.index') }}" class="list-group-item list-group-item-primary list-group-item-action">Personal</a>
            <a href="{{ route('personalPlazas.index') }}"
                class="list-group-item list-group-item-primary list-group-item-action">Personal Plazas</a>
            <a href=""
                class="list-group-item list-group-item-primary list-group-item-action">Deptos</a>
            <a href="{{ route('carreras.index') }}"
                class="list-group-item list-group-item-primary list-group-item-action">Carreras</a>
            <a href=""
                class="list-group-item list-group-item-primary list-group-item-action">Reticulas</a>
            <a href=""
                class="list-group-item list-group-item-primary list-group-item-action">Materias</a>
            <a href="{{ route('alumnos.index') }}"
                class="list-group-item list-group-item-primary list-group-item-action">Alumnos</a>
            <a href="{{ route('edificios.index') }}"
                class="list-group-item list-group-item-primary list-group-item-action">Edificios</a>
            <a href="{{ route('lugares.index') }}"
                class="list-group-item list-group-item-primary list-group-item-action">Lugares</a>
        </div>

@endsection


