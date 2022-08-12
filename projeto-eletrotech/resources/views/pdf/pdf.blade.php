<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('assets/images/eletrotech_favicon.png') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet">
        <title>OS.pdf</title>
    </head>
    <body>

        <h2>Ordem de Serviço</h2>

        <table class="table table-hover mt-3">
            <thead>
                <tr>   
                    <th>N° da OS</th>
                    <th>Data de cadastro</th>
                    <th>Nome</th>
                    <th>Telefone </th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->dateOfEntry }}</td> 
                    <td>{{ $order->name }}</td>
                    @if($order->tel) 
                        <td>{{ $order->tel }}</td>
                    @else
                        <td>Sem Telefone Cadastrado</td>
                    @endif 
                    <td>{{ $order->status }}</td> 
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
                    <th>Valor Total da Ordem de Serviço</th>
                </tr>
            </thead>
            <tbody>
                <tr> 
                    <td>{{$order->equipment}}</td> 
                    <td>{{$order->model}}</td> 
                    <td>{{$order->brand}}</td>
                    <td>{{$order->serialNumber}}</td>
                    <td>R$ {{ $order->valueTotalOs }} Reais</td>
                </tr>
            </tbody> 
        </table>
        <div class="d-flex">
            <div class="form-floating">
                Laudo técnico
                <textarea class="form-control"readonly  name='technicalReport' style="width: 300px; height:150px; resize:none;" placeholder="Leave a comment here" id="Laudo técnico"> {{ $order->technicalReport }}</textarea>
             </div>       
             <div class="form-floating">
                 Defeito ou motivo
                <textarea class="form-control"readonly name='defect' placeholder="Leave a comment here" style="width: 300px; height:150px; resize:none;" id="Defeito ou motivo"> {{ $order->defect }}</textarea>
            </div>
             <div class="form-floating">
                 Observações
                 <textarea class="form-control"readonly name='observation' placeholder="Leave a comment here" style="width: 300px; height:150px; resize:none;" id="Observações"> {{ $order->observation }}</textarea>
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



    </body>
</html>