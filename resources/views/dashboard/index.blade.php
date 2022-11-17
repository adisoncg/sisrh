@extends('layouts.default')

@section('title', 'Sis.RH')



@section('conteudo')
    <h1 class="mb-5">Dashboard</h1>

    <div class="row g-5">
        <div class="col-md-4">
            <div class="bg-primary shadow p-3 text-center text-white">
                <i class="bi bi-people-fill fs-1"></i>
                <h2 class="fs-4">Funcionários</h2>
                <h3 class="fs-1">{{ $totalFuncionarios }}</h3>
            </div>
        </div>
    
        <div class="col-md-4">
            <div class="bg-danger shadow p-3 text-center text-white">
                <i class="bi bi-pen-fill fs-1"></i>
                <h2 class="fs-4">Cargos</h2>
                <h3 class="fs-1">{{ $totalCargos }}</h3>
            </div>
        </div>
    
        <div class="col-md-4">
            <div class="bg-warning shadow p-3 text-center text-white">
                <i class="bi bi-building fs-1"></i>
                <h2 class="fs-4">Departamentos</h2>
                <h3 class="fs-1">{{ $totalDepartamentos }}</h3>
            </div>
        </div>
    </div>
@endsection

