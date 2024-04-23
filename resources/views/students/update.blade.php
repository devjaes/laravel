@extends('students/template')
@section('title', 'Actualizar Estudiante')
@section('content')

<form action="{{url('/students/'.$estudiante['dni'])}}" method='post'>
    @method("PUT")
    @csrf
    <div>
        <label for="dni">Cédula</label>
        <input type="text" name="dni" id="dni" value="{{$estudiante['dni']}}">
    </div>

    <div>
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" value="{{$estudiante['name']}}">
    </div>

    <div>
        <label for="lastname">Apellido</label>
        <input type="text" name="lastname" id="lastname" value="{{$estudiante['lastname']}}">
    </div>

    <div>
        <label for="address">Dirección</label>
        <input type="text" name="address" id="address" value="{{$estudiante['address']}}">
    </div>

    <div>
        <label for="phone">Teléfono</label>
        <input type="text" name="phone" id="phone" value="{{$estudiante['phone']}}">
    </div>

    <button type="submit">
        Actualizar
    </button>
</form>

@endsection