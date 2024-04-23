@extends('students/template')
@section('title', 'MostrarTodos')
@section('content')

<h1>Lista de Estudiantes</h1>

<table class="table">
    <thead>
        <tr>
            <th>Cédula</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Dirección</th>
            <th>Teléfono</th>
        </tr>
    </thead>

    <tbody>
        @foreach($studentsArray AS $student)
        <tr>
            <td>{{$student['dni']}}</td>
            <td>{{$student['name']}}</td>
            <td>{{$student['lastname']}}</td>
            <td>{{$student['address']}}</td>
            <td>{{$student['phone']}}</td>
            <td>
                <form action="{{url('students/' . $student['dni'])}}" method="POST">
                    @method("DELETE")
                    @csrf

                    <button class="btn btn-danger" type="submit">Eliminar 🗑</button>
                </form>
            </td>
            <td>
                <a href="{{url('students/' . $student['dni'])}}" class="btn btn-warning">Editar ✏</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<a href="{{url('/students/create')}}" class="btn btn-success">Crear Nuevo Estudiante ➕</a>