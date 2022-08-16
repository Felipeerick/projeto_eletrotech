<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>OS.pdf</title>
    </head>
    <body>

    <img src="https://i.imgur.com/OzAiRlM.jpg" style="position: relative; left:10px;" width="100px" alt="logo"> <span style="position: relative; top:20px; left:-80px;">Eletrotech</span>

    <h5 style="position: relative; left: 200px; top: -100px;">
    Av Aliomar Baleeiro N° 4348 <br>
    CEP: 41385160 - BAIRRO: Sete De Abril - CIDADE: Salvador/BA <br>
    CNPJ 94055394500 - TELEFONE: (71) 9 9386-6732 <br> Técnico: {{Auth::user()->name}} </h5>

        <h2 style="margin: -40px 0 10px 260px;">Ordem de Serviço</h2>

        <span style="margin-left: 310px;">{{ $order->status }} </span>

        <table border="1px solid" width='100%' style="margin-top: 10px;">
            <thead>
                <tr>   
                    <th>N° da OS</th>
                    <th>Data de cadastro</th>
                    <th>Nome do Cliente</th>
                    <th>Telefone </th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->created_at }}</td> 
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
        <table border="1px solid" width='100%' style="margin: 30px 0px;">
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
               
                    <span style="position: absolute; left:470px; top:439.5px;"> Defeito ou motivo </span>
                     <textarea readonly name='defect' placeholder="Leave a comment here" style="width: 220px; height:150px; resize:none; position:absolute; left:467px; top:456px;  "id="Defeito ou motivo"> {{ $order->defect }}</textarea>

                     <span style="position: absolute; left:237px;top:439.5px;">Observações</span>
                     <textarea readonly name='observation' placeholder="Leave a comment here" style="width: 220px; height:150px; resize:none; position:absolute;  left:234px;top:456px;   ;" id="Observações"> {{ $order->observation }}</textarea>
    
        <table border="1px solid" width='100%' style="margin: 30px 0;">
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
        <table border="1px solid" width='100%'>
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
    <h5 style="margin-top: 30px;">Termo de Garantia</h5>
    <ol style="margin-left: -21px;">
        <li>90 dias de Garantia dos serviços contados a partir da data de retirada do aparelho</li>
        <li>A garantia não cobre mau uso</li>
        <li>Esse comprovante de entrega é sua garantia por isso guarde com cuidado</li>
        <li>Declaro ter utilizado o serviço dessa empresa e que o produto foi devolvido em perfeito estado de funcionamento</li>
    </ol>
    <p>_________________________Assinatura da Empresa __________________________ Assinatura do Cliente</p>

    </body>
</html>