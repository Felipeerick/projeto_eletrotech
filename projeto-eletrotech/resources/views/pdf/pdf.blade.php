<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>OS.pdf</title>
    </head>
    <body>

    <img src="https://i.imgur.com/OzAiRlM.jpg" width="100px" alt="logo"> <span style="position: absolute; top:80px; left: 15px">Eletrotech</span>

        <h2 style="margin: 40px 0;">Ordem de Serviço</h2>

        <table border="1px solid" width='100%'>
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
        <table border="1px solid" width='100%' style="margin: 60px 0px;">
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
        </table border="1px solid" width='100%'>
                Laudo técnico
                <textarea readonly  name='technicalReport' style="width: 220px; height:150px; resize:none;" placeholder="Leave a comment here" id="Laudo técnico"> {{ $order->technicalReport }}</textarea>
               
                    <span style="position: absolute; left:470px; top:215px;"> Defeito ou motivo </span>
                     <textarea readonly name='defect' placeholder="Leave a comment here" style="width: 220px; height:150px; resize:none; position:absolute; left:467px; top:232px;  "id="Defeito ou motivo"> {{ $order->defect }}</textarea>

                     <span style="position: absolute; left:237px; top:217px;">Observações</span>
                     <textarea readonly name='observation' placeholder="Leave a comment here" style="width: 220px; height:150px; resize:none; position:absolute;  left:234px; top:232px ;" id="Observações"> {{ $order->observation }}</textarea>
    
        <table border="1px solid" width='100%' style="margin: 50px 0;">
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
        <table border="1px solid" width='100%' style="margin-top: 20px;">
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