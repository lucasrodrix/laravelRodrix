@extends('layouts.admin')
    
@section('content')
    <h2>Detalhes do Curso</h2>

    <a href="{{ route('courses.index') }}"><button>Listar</button></a><br><br>
    <a href="{{ route('courses.edit',['course'=>$course->id]) }}"><button>Editar</button></a><br><br>
    <form action="{{ route('courses.destroy', ['course'=>$course->id]) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit" onclick="return confirm('Tem certeza que deseja excluir o registro?')">Excluir</button>
    </form>
    <br>
    @if (session('success'))
        <p style="color: #082">{{ session('success') }}</p>
    @endif
    
    ID: {{ $course->id }}<br>
    Nome: {{ $course->name }}<br>
    Criado em: {{ \Carbon\Carbon::parse($course->created_at)->format('d/m/Y H:i:s') }}<br>
    Atualizado em: {{ \Carbon\Carbon::parse($course->updated_at)->format('d/m/Y H:i:s') }}<br>
@endsection