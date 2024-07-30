@extends('layouts.admin')
    
@section('content')
    <h2>Editar o Curso</h2>
    <a href="{{ route('courses.index') }}"><button>Listar</button></a><br><br>
    <a href="{{ route('courses.show',['course'=>$course->id]) }}"><button>Visualizar</button></a><br><br>
    <form action="{{ route('courses.update',['course'=>$course->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nome: </label>
        <input type="text" name="name" id="name" placeholder="Nome do Curso" value="{{ old('name', $course->name) }}" required><br><br>

        <button type="submit">Salvar</button>
    </form>
@endsection