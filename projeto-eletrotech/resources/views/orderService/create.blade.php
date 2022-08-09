@extends('templates.cliente')
@section('title', 'Adicione uma Ordem De Serviço')
@section('content')

<main class="container">
        <h2 class="mt-4">Ordem de Serviço</h2>
        <form action="{{route('orderService.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="dateOfEntry" class="form-label">Data de cadastro</label>
                <input name='dateOfEntry' readonly class="form-control" id="dateOfEntry" required  value="{{date('Y-m-d ')}}">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nome do Cliente</label>
                <select name="name" class="form-control" id="name"> 
                    @foreach($clientes as $cliente)
                        <option>{{ $cliente->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="tel" class="form-label">Número de telefone</label>
                <input type="text" name='tel' class="form-control" id="tel" required placeholder="71 9 9999-9999">
            </div>
            <div class="mb-3">
                <label for="equipment" class="form-label">Equipamento</label>
                <input type="text" name='equipment' class="form-control" id="equipment" required placeholder="Ex:Televisor">
            </div>
            <div class="mb-3">
                <label for="model" class="form-label">Modelo</label>
                <input type="text" name='model' class="form-control" id="model" required placeholder="Ex:PN321Av">
            </div>
            <div class="mb-3">
                <label for="brand" class="form-label">Marca</label>
                <input type="text" name='brand' class="form-control" id="brand" required placeholder="Ex:Sansung">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status (Situação Atual)</label>
                <select name="status" class="form-control" id="status"> 
                        <option value="Orçamento">Orçamento</option>
                        <option value="Finalizado">Finalizado</option>
                        <option value="Pendente">Pendente</option>
                        <option value="Sem Solução">Sem Solução</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="serialNumber" class="form-label">Número de Serial</label>
                <input type="text" name='serialNumber' class="form-control" id="serialNumber" required placeholder="Ex:23343242">
            </div>
            <div class="form-floating">
                <textarea class="form-control" maxlength="315" name='technicalReport' placeholder="Leave a comment here" id="Laudo técnico" style="height: 100px"></textarea>
                <label for="Laudo técnico">Laudo técnico</label>
            </div>
           
            <div class="form-floating mt-3 mb-3">
                <textarea class="form-control" maxlength="315"name='defect' placeholder="Leave a comment here" id="Defeito ou motivo" style="height: 100px"></textarea>
                <label for="Defeito ou motivo">Defeito ou motivo</label>
            </div>
            <div class="form-floating">
                <textarea class="form-control" name='observation' placeholder="Leave a comment here" id="Observações" style="height: 100px"></textarea>
                <label for="Observações">Observações</label>
            </div>
            <hr>

            <h2>Produtos/Peças</h2>

            <div class="form-floating mt-3 mb-2">
                <textarea class="form-control"maxlength="315" name='productDescription' placeholder="Leave a comment here" id="Descrição do Produto" style="height: 100px"></textarea>
                <label for="Descrição do Produto">Descrição do Produto</label>
            </div>
            <div class="mb-3">
                <label for="valueProduct" class="form-label">Valor do Produto</label>
                <input type="number" name="valueProduct" placeholder="Somente números inteiros Ex:12345" required class="form-control" id="valueProduct">
            </div>
            <div class="mb-3">
                <label for="warrantyProduct" class="form-label">Garantia do Produto</label>
                <input type="text" name="warrantyProduct" required class="form-control" id="warrantyProduct">
            </div>

            <hr>

            <h2>Serviços realizados</h2>

            <div class="form-floating mt-3 mb-2">
                <textarea class="form-control"maxlength="315" name="serviceDescription" placeholder="Leave a comment here" id="Descrição do Produto" style="height: 100px"></textarea>
                <label for="Descrição do Produto">Descrição do Serviço</label>
            </div>
            <div class="mb-3">
                <label for="valueService" class="form-label">Valor do Serviço</label>
                <input type="number" name="valueService" placeholder="Somente números inteiros Ex:12345" required class="form-control" id="valueService">
            </div>
            <div class="mb-3">
                <label for="warrantyService" class="form-label">Garantia do Serviço</label>
                <input type="text" name="warrantyService" required class="form-control" id="warrantyService">
            </div>
            <button type="submit" class="btn btn-success mb-3">Cadastrar Ordem de Serviço</button>
        </form>
    </main>


@endsection