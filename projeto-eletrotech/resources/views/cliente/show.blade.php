@extends('templates.client')
@section('title', $title)
@section('content')

<h2 class="mt-5">Listagem de Clientes</h2>

<table class="table table-hover mt-2">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Número de telefone</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td>{{ $cliente->id }}</td>
                <td>{{ $cliente->name }}</td>
                <td>{{ $cliente->email }}</td> 
                <td>{{ $cliente->tel }}</td> 
            </tr>
    </tbody> 
</table>

<table class="table table-hover mt-2">
    <thead>
        <tr>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Rua</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td>{{ $cliente->neighborhood }}</td> 
                <td>{{ $cliente->city }}</td> 
                <td>{{ $cliente->state }}</td> 
                <td>{{ $cliente->street }}</td>
                <td class="d-flex">
                    <a href="{{ route('client.edit', $cliente->id) }}" class="btn btn-warning mx-1">editar</a>
                    <form action="{{ route('client.destroy', $cliente->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                      <button type="submit" class="btn btn-danger">remover</button>
                    </form>
                </td>     
            </tr>
    </tbody> 
</table>

@endsection