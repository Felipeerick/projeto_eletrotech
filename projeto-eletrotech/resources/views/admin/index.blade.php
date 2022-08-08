@extends('templates.admin')
@section('title', 'Adicione um cliente')
@section('content')

    <h2 class="mt-5">Listagem de Clientes</h2>

    <table class="table table-hover mt-2">
        <thead>
            <tr>   
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Número de telefone</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->id }}</td>
                    <td>{{ $cliente->name }}</td>
                    <td>{{ $cliente->email }}</td> 
                    <td>{{ $cliente->tel }}</td> 
                    <td> <a href="{{ route('admin.show', $cliente->id) }}" class="btn btn-info">visualizar</a></td>  
                </tr>
            @endforeach
        </tbody> 
    </table>


@endsection