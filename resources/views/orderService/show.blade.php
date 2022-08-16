@extends('templates.cliente')
@section('title', 'Ordem de Serviço')
@section('content')

  <h3 class="mt-3 mb-2">Ordem de Serviço do Cliente {{$order->name}}</h3>

  <div class="mt-4 d-flex">
      <a href="{{ route('pdf', $order->id) }}" class="btn btn-info">Gerar PDF da Ordem de Serviço</a>

      <form action="{{ route('orderService.destroy', $order->id)  }}" method="POST" >
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger mx-3">Deletar essa Ordem de Serviço</button>
      </form>

      <a href="{{ route('orderService.edit', $order->id) }}" class="btn btn-success">Editar essa Ordem de Serviço</a>
  </div>

  <table class="table table-hover mt-3">
      <thead>
          <tr>   
              <th>N° da OS</th>
              <th>Data de cadastro</th>
              <th>Data de Saída</th>
              <th>Status</th>
          </tr>
      </thead>
      <tbody>
              <tr>
                  <td>{{ $order->id }}</td>
                  <td>{{ $order->created_at }}</td> 
                  @if($order->departureDate)
                    <td>{{ $order->departureDate }}</td>
                  @else
                    <td>Sem data de Saída cadastrada</td>
                  @endif
                  <td>{{ $order->status }}</td> 
              </tr>
      </tbody> 
  </table>
  <table class="table table-hover mt-3">
      <thead>
          <tr>   
              <th>Nome</th>
              <th>Telefone </th>
              <th>Valor Total da Ordem de Serviço</th>  
          </tr>
      </thead>
      <tbody>
              <tr>
                  <td>{{ $order->name }}</td>
                  @if($order->tel) 
                      <td>{{ $order->tel }}</td>
                  @else
                      <td>Sem Telefone Cadastrado</td>
                  @endif 
                  <td>R$ {{ number_format($order->valueTotalOs, 2, '.', ',') }} Reais</td>
              </tr>
      </tbody> 
  </table>
  <table class="table table-hover mt-2">
      <thead>
          <tr>   
              <th>Equipamento</th>
              <th>Modelo</th>
              <th>Marca</th>
              <th>Número de Serial</th>
              
          </tr>

      
      </thead>
      <tbody>
              <tr> 
                  <td>{{$order->equipment}}</td> 
                  <td>{{$order->model}}</td> 
                  <td>{{$order->brand}}</td>
                  <td>{{$order->serialNumber}}</td>
              </tr>
      </tbody> 
  </table>
  <div class="d-flex">
      <div class="form-floating">
          <textarea class="form-control"readonly  name='technicalReport' style="width: 300px; height:150px; resize:none;" placeholder="Leave a comment here" id="Laudo técnico"> {{ $order->technicalReport }}</textarea>
          <label for="Laudo técnico">Laudo técnico</label>
      </div>       
      <div class="form-floating mx-3">
          <textarea class="form-control"readonly name='defect' placeholder="Leave a comment here" style="width: 300px; height:150px; resize:none;" id="Defeito ou motivo"> {{ $order->defect }}</textarea>
          <label for="Defeito ou motivo">Defeito ou motivo</label>
      </div>
      <div class="form-floating">
          <textarea class="form-control"readonly name='observation' placeholder="Leave a comment here" style="width: 300px; height:150px; resize:none;" id="Observações"> {{ $order->observation }}</textarea>
          <label for="Observações">Observações</label>
      </div>
  </div>
  <table class="table table-hover mt-2">
      <thead>
          <tr>   
            <th>Valor da Peça/Produto</th>
            <th>Garantia da Peça/Produto</th>
            <th>Desconto do Produto</th>
            <th>Valor Total do Produto</th>
          </tr>

      
      </thead>
      <tbody>
              <tr> 
                <td>R$ {{ number_format($order->valueProduct, 2, '.', ',')}} Reais</td> 
                <td>{{ $order->warrantyProduct }}  meses</td>
                @if($order->discountProduct) 
                  <td>R$ {{ number_format($order->discountProduct, 2, ',', '.') }} Reais</td>
                @else
                  <td>Sem Desconto</td>
                @endif
                <td>R$ {{ number_format($order->valueTotalProduct, 2, '.', ',') }} Reais</td> 
              </tr>
      </tbody> 
  </table>
  <table class="table table-hover mt-2">
      <thead>
          <tr>   
            <th>Valor do Serviço</th>
            <th>Garantia do Serviço</th>
            <th>Desconto do Serviço</th>
            <th>Valor Total do Serviço</th>
          </tr>

      
      </thead>
      <tbody>
              <tr> 
                <td>R$ {{ $order->valueService }} Reais</td> 
                <td>{{ $order->warrantyService }}  meses</td>
                @if($order->discountService) 
                  <td>R$ {{ number_format($order->discountService, 2, ',', '.') }} Reais</td>
                @else
                  <td>Sem Desconto</td>
                @endif
                <td>R$ {{ number_format($order->valueTotalService, 2, '.', ',') }} Reais</td> 
              </tr>
      </tbody> 
  </table>



@endsection