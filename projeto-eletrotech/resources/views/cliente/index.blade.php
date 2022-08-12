@extends('templates.cliente')
@section('title', 'Adicione um cliente')
@section('content')

    <h2 class="mt-5">Listagem de Clientes</h2>

    <a href="{{ route('cliente.create') }}" class="btn btn-info mt-2">+ Adicionar novo cliente</a>

    <table class="table table-hover mt-2">
        <thead>
            <tr>   
                <th>Nome</th>
                <th>Email</th>
                <th>Número de telefone</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->name }}</td>
                    @if($cliente->email)
                        <td>{{ $cliente->email }}</td>
                    @else 
                        <td>Sem email cadastrado</td>
                    @endif
                    <td>{{ $cliente->tel }}</td> 
                    <td> <a href="{{ route('cliente.show', $cliente->id) }}" class="btn btn-info">visualizar</a></td>  
                </tr>
                @empty
                <div class="alert alert-primary mt-3" role="alert">
                    Ops... sua tabela está vazia, cadastre um novo usuário para preencher a tabela e a mensagem sumir :}
                </div>
            @endforelse
        </tbody> 
    </table>


@endsection