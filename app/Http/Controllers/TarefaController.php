<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function index(){
        $tarefas = Tarefa::all();

        return view('tarefas.index', ['tarefas' => $tarefas]);
    }

    public function create(){
        return view('tarefas.create');
    }

    public function store(Request $request){
        Tarefa::create($request->all());

        return redirect()->route('tarefas.index');
    }
    public function edit($id){
        return
    }

    public function update(Request $request, $id){

    }
    public function destroy($id){
        Tarefa::destroy($id);
        return redirect('/tarefas');
    }
}
