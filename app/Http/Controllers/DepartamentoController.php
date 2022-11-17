<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
        $departamentos = Departamento::where('nome','like','%'.$request->buscaDepartamento.'%')->orderBy('nome','asc')->get();
        $totalDepartamento = Departamento::all()->count();
        return view('departamentos.index', compact('departamentos', 'totalDepartamento'));
    }

    public function create(){
        return view('departamentos.create');
    }

    public function store(Request $request) 
    {
       $departamentos = new Departamento;
       $departamentos->nome = $request->nome;
       $departamentos->save();

       return redirect()->route('departamentos.index')->with('sucesso', 'Funcionário Cadastrado com sucesso');

    }
}