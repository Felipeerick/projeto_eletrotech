@extends('templates.cliente')
@section('title', 'Ordem de Serviço')
@section('content')


<table border="1">
 <thead>
 <tr>

 <td>N° da Ordem de Serviço: {{ $order->id }}</td>
  <td >Data de Cadastro da Ordem de Serviço: {{$order->dateOfEntry}}</td>
  <td >Número de Contato do Cliente: {{$order->tel}}</td>
  <td >Valor do Produto: R$ {{ number_format($order->valueProduct, 2, '.', ',')}} Reais</td>
  <td >Valor do Serviço: R$ {{ number_format($order->valueService, 2, '.', ',') }} Reais</td>
  <td>Valor Total: R$ {{ number_format($order->valueTotal, 2, '.', ',') }} Reais</td>
 </tr>
  
  </thead>
</table>

@endsection