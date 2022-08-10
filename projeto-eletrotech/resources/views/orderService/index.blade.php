@extends('templates.cliente')
@section('title', 'Ordem de Serviço')
@section('content')

<h2 class="mt-5">Ordem de Serviços</h2>

<a href="{{ route('orderService.create') }}" class="btn btn-info mt-2">+ Adicionar nova ordem de serviço</a>

<table class="table table-hover mt-2">
    <thead>
        <tr>   
            <th>N° da OS</th>
            <th>Data de cadastro</th>
            <th>Telefone</th>
            <th>Nome</th>
            <th>Valor da peça/produto</th>
            <th>Valor do Serviço</th>
            <th>Desconto</th>
            <th>Valor total</th>
            <th>Status</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @forelse($order_service as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->dateOfEntry }}</td> 
                @if($order->tel) 
                    <td>{{ $order->tel }}</td>
                @else
                    <td>Sem Telefone Cadastrado</td>
                @endif
                <td>{{ $order->name }}</td> 
                <td>R$ {{ number_format($order->valueProduct, 2, '.', ',')}} Reais</td> 
                <td>R$ {{ number_format($order->valueService, 2, '.', ',') }} Reais</td>
                @if($order->discount) 
                    <td>{{ $order->discount }} meses</td>
                @else
                    <td>Sem Desconto</td>
                @endif
                <td>R$ {{ number_format($order->valueTotal, 2, '.', ',') }} Reais</td> 
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