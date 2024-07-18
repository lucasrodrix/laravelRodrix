<?php

namespace App\Http\Controllers;

use App\Models\Course;
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
    //Cadastrar o Formulario Cursos
    public function create(){
        return view('courses.create');
    }
    //Cadastrar no Banco de Dados o novo Curso
    public function store(Request $request){
        //Cadastrar no Banco de Dados na tabela Cursos os valores de todos os campos do formulário
        // dd($request->name);
        Course::create([
            'name' => $request->name
        ]);

        //Redirecionar  o usuário, enviar a mensagem de sucesso;
        return redirect()->route('courses.create')->with('success', 'Curso cadastrado com sucesso!');

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
