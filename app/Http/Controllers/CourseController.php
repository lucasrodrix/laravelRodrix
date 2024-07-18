<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    //Listar Cursos
    public function index(){
        return view('courses.index');
    }
    //Visualizar o Curso
    public function show(){
        return view('courses.show');
    }
    //Cadastrr o Formulario Cursos
    public function create(){
        return view('courses.create');
    }
    //Cadastrar no Banco de Dados o novo Curso
    public function store(){
        dd("Cadastrar");
    }
    //Carregar o Formulário para editar o Curso
    public function edit(){
        return view('courses.edit');
    }
    //Editar o registro no banco de dados o curso
    public function update(){
        dd("Editar");
    }
    //Excluir o registro no banco de dados o curso
    public function destroy(){
        dd("Excluir");
    }
}
