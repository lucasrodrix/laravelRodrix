@extends('layouts.admin')
    
@section('content')
    <h2>Editar o Curso</h2>
    <a href="{{ route('courses.index') }}"><button>Listar</button></a><br><br>
    <a href="{{ route('courses.show',['course'=>$course->id]) }}"><button>Visualizar</button></a><br><br>

    @if ($errors->any())
    <span style="color: #f00">
        @foreach ($errors->all() as $error)
            {{ $error }}<br>            
        @endforeach
    </span>        
    @endif

    <form action="{{ route('courses.update',['course'=>$course->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nome: </label>
        <input type="text" name="name" id="name" placeholder="Nome do Curso" value="{{ old('name', $course->name) }}"><br><br>
        <label for="price">Preço: </label>
        <input type="text" name="price" id="price" placeholder="Preço do Curso: 2.47" value="{{ old('price', $course->price) }}"><br><br>

        <button type="submit">Salvar</button>
    </form>
@endsection