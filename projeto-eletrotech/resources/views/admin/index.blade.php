@extends('templates.admin')
@section('title', 'Adicione um cliente')
@section('content')

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Número de telefone</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>Rua</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->name }}</td>
                    <td>{{ $cliente->email }}</td> 
                    <td>{{ $cliente->tel }}</td> 
                    <td>{{ $cliente->neighborhood }}</td> 
                    <td>{{ $cliente->city }}</td> 
                    <td>{{ $cliente->state }}</td> 
                    <td>{{ $cliente->street }}</td>     
                </tr>
            @endforeach
        </tbody> 
    </table>


@endsection