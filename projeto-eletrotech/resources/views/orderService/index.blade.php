@extends('templates.cliente')
@section('title', 'Adicione um cliente')
@section('content')

<h2 class="mt-5">Ordem de Serviços</h2>

<a href="#" class="btn btn-info mt-2">+ Adicionar nova ordem de serviço</a>

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
        @forelse($Order_Service as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->dateOfEntry }}</td> 
                <td>{{ $order->cliente()->tel }}</td> 
                <td>{{ $order->cliente()->name }}</td> 
                <td>{{ $order->OrderService_Product()->valueProduct}}</td> 
                <td>{{ $order->OrderService_Service()->valueService }}</td> 
                <td>{{ $order->discount }}</td> 
                <td>{{ $order->valueTotal }}</td> 
                <td>{{ $order->status }}</td> 
                <td> <a href="#" class="btn btn-info">visualizar</a></td>  
            </tr>
            @empty
            <div class="alert alert-primary mt-3" role="alert">
                Ops... sua tabela está vazia, cadastre um novo usuário para preencher a tabela e a mensagem sumir :}
            </div>
        @endforelse
    </tbody> 
</table>



@endsection