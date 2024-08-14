<?php

namespace App\Http\Controllers;

use App\Models\Atividade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AtividadeController extends Controller
{

    public function index(){
        $atividade = Atividade::all();

        return view('atividades.index', ['atividades' => $atividade]);
    }

    public function create(){
        return view('atividades.create');
    }

    public function store(Request $request){
        $user_id = Auth::user()->id;

        Atividade::create(['nome' => $request->nome, 'data' => $request->data, 'status' => $request->status,'user_id' => $user_id]);

        return redirect()->route('atividades.index');
    }
    public function edit($id){
        $atividade = Atividade::find($id);
        return view('atividades.edit', compact('atividade') );
    }

    public function update(Request $request, $id){
        $atividade = Atividade::find($id);
        $atividade->update($request->all());
        return redirect()->route('atividades.index');

    }
    public function destroy($id){
        Atividade::destroy($id);
        return redirect('/atividades');
    }
}
