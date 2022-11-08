@extends('layouts.default')

@section('title', 'Cadastrar Funcionário')

@section('conteudo')
<div class="container-fluid shadow bg-white p-4">
    <h1 class="mb-5">Cadastrar Cargos</h1>
    <form class="row d-4" method="post" action="{{ route('cargos.store') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" value="1" name="id_user">
        <div class="container">
            <label for="nome" class="form-label fw-semibold">Descrição</label>
            <input type="text" name="descricao" class="form-control form-control-lg bg-dark bg-opacity-10 mb-4" value="">
        </div>
        
        <button type="submit" class="btn btn-primary btn-lg col-md-2 m-2">Cadastrar</button>
        <a href="{{route('cargos.index')}}" class="btn btn-danger btn-lg col-md-2 m-2">Cancelar</a>
</div>
</form>
@endsection