@extends('layouts.default')

@section('title', 'Cargos')

@section('conteudo')
<h1 class="mb-4">Cargos</h1>
<a href="{{route('cargos.create')}}" class="btn btn-primary position-absolute top-0 end-0 m-4 rounded-circle"><i class="bi bi-plus fs-4"></i></a>

<p>Total de Cargos: {{$totalCargo}}</p>

<form action="#" method="get" class="mb-3 d-flex justify-content-end">
    <div class="input-group me-3">
        <input type="text" name="buscaCargo" class="form-control form-control-lg" placeholder="Nome do Cargos">
        <button class="btn btn-primary btn-lg" type="submit">Procurar</button>
    </div>
    <a href="{{route('cargos.index')}}" class="btn btn-light border btn-lg">Limpar</a>
</form>

<div class="table-responsive">
    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th width="60">ID</th>
                <th class="text-center">Descrição</th>
                <th width="200">Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cargos as $cargo)
            <tr class="align-middle">
                <td>{{$cargo->id}}</td>
                <td class="text-center">{{$cargo->descricao}}</td>
                <td><button type="button" class="btn btn-success m-2"><i class="bi bi-person-fill"></i></button><button type="button" class="btn btn-primary m-2"><i class="bi bi-pen"></i></button><button type="button" class="btn btn-danger m-2"><i class="bi bi-trash"></i></button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection