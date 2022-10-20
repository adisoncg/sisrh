@extends('layouts.default')

@section('title', 'Funcionários')

@section('conteudo')
    <h1>Funcionários</h1>

    <a href="{{ route('funcionarios.create') }}"
        class="btn btn-primary position-absolute top-0 end-0 m-4 rounded-circle fs-4"><i
            class="bi bi-person-plus-fill"></i></a>

    <p>Total de funcionário: {{ $totalFuncionarios }}</p>

    <form action="" method="get" class="mb-3 d-flex justify-content-end">
        <div class="input-group me-3">
            <input type="text" name="buscaFuncionario" class="form-control form-control-lg"
                placeholder="Nome do funcionário">
            <button class="btn btn-primary btn-lg" type="submit">Procurar</button>
        </div>
        <a href="" class="btn btn-light border btn-lg">Limpar</a>
    </form>

    <table class="table table-striped">
        <thead class="table-dark">
            <tr class="text-center">
                <th>ID</th>
                <th>Foto</th>
                <th>Nome</th>
                <th>Cargos</th>
                <th>Departamento</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($funcionarios as $funcionario)
                <tr class="text-center">
                    <td class="align-middle">{{ $funcionario->id }}</td>
                    <td class="align-middle"><img src="/images/funcionarios/{{ $funcionario->foto }}"
                            alt="{{ $funcionario->nome }}" width="100"></td>
                    <td class="align-middle">{{ $funcionario->nome }}</td>
                    <td class="align-middle">{{ $funcionario->cargo->descricao }}</td>
                    <td class="align-middle">{{ $funcionario->departamento->nome }}</td>
                    <td class="align-middle"><button type="button" class="btn btn-primary m-2"><i
                                class="bi bi-pen"></i></button><button type="button" class="btn btn-danger"><i
                                class="bi bi-trash"></i></button></i></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
