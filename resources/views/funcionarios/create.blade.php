@extends('layouts.default')

@section('title', 'Cadastrar Funcionário')

@section('conteudo')
<div class="container-fluid shadow bg-white p-4">
<h1 class="mb-5">Cadastrar Funcionários</h1>
<div class="row">
    <div class="col-4 mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" name="nome" class="form-control form-control-lg bg-light" value="" required>
    </div>

    <div class="col-4 mb-3">
        <label for="data_nasc" class="form-label">Data de Nascimento</label>
        <input type="date" name="data_nasc" class="form-control form-control-lg bg-light" value="" required>
    </div>

    <div class="col-4 mb-3">
        <label for="sexo" class="form-label">Sexo</label>
        <select name="sexo" class="form-select form-control form-control-lg bg-light" value="" required>
            <option value=""></option>
            <option value="f">Feminino</option>
            <option value="m">Masculino</option>
        </select>
    </div>
</div>
<div class="row">
    <div class="col-4 mb-3">
        <label for="cpf" class="form-label">CPF</label>
        <input type="text" name="cpf" class="form-control form-control-lg bg-light" value="" required>
    </div>

    <div class="col-4 mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" name="email" class="form-control form-control-lg bg-light" value="" required>
    </div>

    <div class="col-4 mb-3">
        <label for="telefone" class="form-label">Telefone</label>
        <input type="tel" name="telefone" placeholder="(DDD)XXXXX-XXXX" class="form-control form-control-lg bg-light" value="" required>
    </div>
</div>
<div class="row">
    <div class="col-4 mb-3">
        <label for="id_departamento" class="form-label">Departamento</label>
        <input type="text" name="id_departamento" class="form-select form-control form-control-lg bg-light" value="" required>
    </div>

    <div class="col-4 mb-3">
        <label for="id_cargo" class="form-label">Cargo</label>
        <input type="text" name="id_cargo" class="form-select form-control form-control-lg bg-light" value="" required>
    </div>

    <div class="col-4 mb-3">
        <label for="salario" class="form-label">Salário</label>
        <input type="text" name="salario" placeholder="R$" class="form-control form-control-lg bg-light" value="" required>
    </div>
</div>
<div class="row">
    <div class="col-4 input-group mb-3">
        <input type="file" name="foto" class="form-control form-control form-control-lg bg-light">
        <!-- <label class="input-group-text" for="inputGroupFile02">Upload</label> -->
    </div>
</div>
<button type="button" class="btn btn-primary">Cadastrar</button>
<button type="button" class="btn btn-danger">Cancelar</button>
</div>
@endsection