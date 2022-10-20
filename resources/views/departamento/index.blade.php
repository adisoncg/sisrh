@extends('layouts.default')

@section('title', 'Departamento')

@section('conteudo')
    <h1>Departamentos</h1>
    <a href="{{route('departamentos.create')}}" class="btn btn-primary float-end mb-2 
    rounded-circle fs-4"><i class="bi bi-plus"></i></a>
   <div class="table-responsive">     
    <table class="table table-striped">
        <thead class="table-dark">
            <tr class="text-center">
                <th>ID</th>
                <th>Nome</th>
                <th>Ação</th> 
            </tr>
        </thead>
        <tbody>ç
        @foreach ($departamentos as $departamento)
            <tr class="text-center">
                <td class="align-middle">{{$departamento->id}}</td>
                <td class="align-middle">{{$departamento->nome}}</td>
                <td class="align-middle"><button type="button" class="btn btn-success m-2"><i class="bi bi-person"></i></button><button type="button" class="btn btn-primary m-2"><i class="bi bi-pen"></i></button><button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button></i></td>
            </tr>
            @endforeach
        </tbody> 
     </table>
   </div>
@endsection
