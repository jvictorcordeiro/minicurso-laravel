<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AtividadeController extends Controller
{
    public function index() {
        $teste = 'Bom dia, o sol ja nasceu la na fazendinha!';
        return view('atividade.index', compact('teste'));
        
    }
}
