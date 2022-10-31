<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Models\Funcionario;
use App\Models\Departamento;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function index(Request $request)
    {
        $funcionarios = Funcionario::where('nome', 'like', '%' .
            $request->buscaFuncionario . '%')->orderBy('nome', 'asc')->get();

        $totalFuncionarios = Funcionario::all()->count();
        return view('funcionarios.index', compact('funcionarios', 'totalFuncionarios'));
    }

    public function departamento($id, Request $request)
    {
        $departamento = Departamento::find($id);
        $funcionarios = Funcionario::where('id_departamento', $id)
            ->where('nome', 'like', '%' . $request->buscaFuncionario . '%')
            ->orderBy('nome', 'asc')->get();

        $totalFuncionarios = Funcionario::where('id_departamento', $id)->count();
        return view('funcionarios.index', compact('funcionarios', 'totalFuncionarios', 'departamento'));
    }

    public function create()
    {
        $departamentos = Departamento::all()->sortBy('nome');
        $cargos = Cargo::all()->sortBy('descricao');
        return view('funcionarios.create', compact('departamentos', 'cargos'));
    }

    public function store(Request $request)
    {
        $input = $request->toArray();
        // dd($input['foto']);
        if (!empty($input['foto']) && $input['foto']->isValid()) {
            $nomeArquivo = $input['foto']->hashName();
            $input['foto']->store('public/funcionarios');
            $input['foto'] = $nomeArquivo;
        } else {
            $input['foto'] = null;
        }

        Funcionario::create($input);

        return redirect()->route('funcionarios.index')->with('sucesso', 'Funcionário Cadastrado com sucesso');
    }
}
