@extends('templates.cliente')
@section('title', 'Ordem de Serviço')
@section('content')

    <h2 class="mt-5">Ordem de Serviços</h2>

    <a href="{{ route('orderService.create') }}" class="btn btn-info mt-2">+ Adicionar nova ordem de serviço</a>

    <table class="table table-hover mt-2">
        <thead>
            <tr>   
                <th>N° da OS</th>
                <th>Nome</th>
                <th>Data de Cadastro</th>
                <th>Valor total</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($order_service as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->name }}</td>
                    <td>{{ date('d/m/Y ', strtotime($order->dateOfEntry)) }}</td> 
                    <td>R$ {{ number_format($order->valueTotalOs, 2, ',', '.') }} Reais</td> 
                    <td>{{ $order->status }}</td> 
                    <td> <a href="{{route('orderService.show', $order->id)}}" class="btn btn-info">visualizar</a></td>  
                </tr>
                @empty
                <div class="alert alert-primary mt-3" role="alert">
                    Ops... sua tabela está vazia, cadastre um novo usuário para preencher a tabela e a mensagem sumir :}
                </div>
            @endforelse
        </tbody> 
    </table>



@endsection