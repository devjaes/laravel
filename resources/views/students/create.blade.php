@extends('students/template')
@section('title', 'Nuevo Estudiante')
@section('content')

<form action="{{url('/students')}}" method='post'>
    @csrf
    <div>
        <label for="dni">Cédula</label>
        <input type="text" name="dni" id="dni">
    </div>

    <div>
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name">
    </div>

    <div>
        <label for="lastname">Apellido</label>
        <input type="text" name="lastname" id="lastname">
    </div>

    <div>
        <label for="address">Dirección</label>
        <input type="text" name="address" id="address">
    </div>

    <div>
        <label for="phone">Teléfono</label>
        <input type="text" name="phone" id="phone">
    </div>

    <button type="subimt">
        Guardar
    </button>
</form>

@endsection