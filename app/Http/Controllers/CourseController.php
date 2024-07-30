<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //Listar Cursos
    public function index(){
        //Recuperar os dados da tabela Cursos
        // $courses = Course::where('id',1000)->get();
        // $courses = Course::paginate(1);
        $courses = Course::orderBy('id','desc')->get();

        //Carrega a View index.blade.php
        return view('courses.index',['courses'=>$courses]);
    }
    //Visualizar o Curso
    public function show(Course $course){
        // $course = Course::where('name', $request->course)->first();

        //Carregar a View
        return view('courses.show',['course'=>$course]);
    }
    //Cadastrar o Formulario Cursos
    public function create(){
        return view('courses.create');
    }
    //Cadastrar no Banco de Dados o novo Curso
    public function store(Request $request){
        //Cadastrar no Banco de Dados na tabela Cursos os valores de todos os campos do formulário
        // dd($request->name);
        $course = Course::create([
            'name' => $request->name
        ]);

        //Redirecionar  o usuário, enviar a mensagem de sucesso;
        return redirect()->route('courses.show',['course'=>$course->id])->with('success', 'Curso cadastrado com sucesso!');

    }
    //Carregar o Formulário para editar o Curso
    public function edit(Course $course){
        // dd($course);
        //Carregar a View
        return view('courses.edit',['course'=>$course]);
    }
    //Editar o registro no banco de dados o curso
    public function update(Request $request, Course $course){
        //Editar o registro no banco de dados o curso
        $course->update([
            'name' => $request->name
        ]);
        //Redireciona o usuário, envia a mensagem de sucesso;
        return redirect()->route('courses.show',['course'=>$course->id])->with('success', 'Curso atualizado com sucesso!');
    }
    //Excluir o registro no banco de dados o curso
    public function destroy(Course $course){
        //excluir o registro no banco de dados
        $course->delete();
        //Redireciona o usuário, envia a mensagem de sucesso;
        return redirect()->route('courses.index')->with('success', 'Curso excluido com sucesso!');
    }
}
