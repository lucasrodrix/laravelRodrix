@extends('layouts.admin')
    
@section('content')
    <h2>Cadastrar o Curso</h2>
    <a href="{{ route('courses.index') }}"><button>Listar</button></a><br><br>

    @if (session('success'))
        <p style="color: #082">{{ session('success') }}</p>
    @endif

    <form action="{{route('courses.store')}}" method="POST">
        @csrf
        @method('POST')

        <label for="name">Nome: </label>
        <input type="text" name="name" id="name" placeholder="Nome do Curso" value="{{ old('name') }}" required><br><br>

        <button type="submit">Cadastrar</button>

    </form>
@endsection