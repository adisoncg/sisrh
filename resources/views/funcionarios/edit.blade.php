@extends('layouts.default')

@section('title', 'Alterar Funcionário')

@section('conteudo')
<div class="container-fluid shadow bg-white p-4">
    <h1 class="mb-5">ALterar Funcionários</h1>
    <form class="row d-4" method="post" action="{{ route('funcionarios.update', $funcionario->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="hidden" value="1" name="id_user">
        <div class="row">
        <div class="col mb-4">
            <label for="nome" class="form-label fs-5 fs-5">Nome</label>
            <input type="text" class="form-control form-control-lg bg-light" id="nome" name="nome" value = "{{ $funcionario->nome }}"required>
        </div>

        <div class="col mb-4">
            <label for="data_nasc" class="form-label">Data de Nascimento</label>
            <input type="date" value="{{$funcionario->data_nasc}}" class="form-control form-control-lg bg-light" id="data_nasc" name="data_nasc" required>
        </div>

        <div class="col mb-4">
            <label for="sexo" class="form-label">Sexo</label>
            <select class="form-select form-control form-control-lg bg-light" id="name" name="sexo" required>
                <option value=""></option>
                <option value="m" @selected($funcionario->sexo == 'm')>Masculino</option>
                <option value="f" @selected($funcionario->sexo == 'f')>Feminino</option>
            </select>
        </div>
</div>
    <div class="row">
        <div class="col mb-4">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" name="cpf" value="{{$funcionario->cpf}}" class="form-control form-control-lg bg-light" id="cpf" required>
        </div>

        <div class="col mb-4">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" name="email" value="{{$funcionario->email}}" class="form-control form-control-lg bg-light" id="email" required>
        </div>

        <div class="col mb-4">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="tel" name="telefone" placeholder="(DDD) XXXXX-XXXX" value="{{$funcionario->telefone}}" class="form-control form-control-lg bg-light" id="telefone" required>
        </div>
    </div>
    <div class="row">
        <div class="col mb-4">
            <label for="id_departamento" class="form-label">Departamento</label>
            <select name="id_departamento" id="" class="form-select form-control form-control-lg bg-light">
                <option value="">--</option>
                @foreach ($departamentos as $departamento)
                <option 
                value="{{ $departamento->id }}" @selected($departamento->id == $funcionario->id_departamento)>{{ $departamento->nome }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="col mb-4">
            <label for="id_cargo" class="form-label">Cargo</label>
            <select name="id_cargo" id="" class="form-select form-control form-control-lg bg-light">
                <option value="">--</option>
                @foreach ($cargos as $cargo)
                <option value="{{ $cargo->id }}" @selected($cargo->id == $funcionario->id_cargo)>{{ $cargo->descricao }}</option>
                @endforeach
            </select>
        </div>

        <div class="col mb-4">
            <label for="salario" class="form-label">Salário</label>
            <input type="text" name="salario" placeholder="R$" value="{{$funcionario->salario}}" class="form-control form-control-lg bg-light" required>
        </div>

        </div>
        <div class="col-md-2">
            <img src="/storage/funcionarios/{{$funcionario->foto}}" class="img-thumbnail" alt="{{$funcionario->nome}}">
        </div>
    <div class="col-md-10">
        <label for="foto" class="form-label fs-5">Foto</label>
        <input type="file" class="form-control form-control-lg bg-light mb-5" id="foto" name="foto">
        <!-- <label class="input-group-text" for="inputGroupFile02">Upload</label> -->
    </div class="col">
    <button type="submit" class="btn btn-primary btn-lg col-md-2 m-2">Alterar</button>
    <a href="{{ route('funcionarios.index') }}" class="btn btn-danger btn-lg col-md-2 m-2">Cancelar</a>

</div>
</form>
@endsection