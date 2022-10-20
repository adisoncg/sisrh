<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use App\Models\Departamento;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function index(Request $request)
    {
        $funcionarios = Funcionario::where('nome', 'like', '%'.
        $request->buscaFuncionario.'%')->orderBy('nome','asc')->get();

        $totalFuncionarios = Funcionario::all()->count();
        return view('funcionarios.index', compact('funcionarios', 'totalFuncionarios'));
    }

    public function departamento($id, Request $request)
    {
        $departamento = Departamento::find($id);
        $funcionarios = Funcionario::where('id_departamento', $id)
        ->where('nome', 'like', '%'.$request->buscaFuncionario.'%')
        ->orderBy('nome','asc')->get();

        $totalFuncionarios = Funcionario::where('id_departamento', $id)->count();
        return view('funcionarios.index', compact('funcionarios', 'totalFuncionarios', 'departamento'));
    }

    public function create()
    {

        return view('funcionarios.create');
    }
}
