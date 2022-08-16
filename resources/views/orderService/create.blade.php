@extends('templates.cliente')
@section('title', 'Adicione uma Ordem De Serviço')
@section('content')

    <main class="container">
        <h2 class="mt-4">Ordem de Serviço</h2>
        <form action="{{route('orderService.store')}}" method="POST">
            @csrf
            <div class="d-flex">
                <div class="mb-3">
                    <label for="departureDate" class="form-label">Data de Saída (OPCIONAL)</label>
                    <input type="date" class="form-control" name='departureDate' id="departureDate" style="width: 220px;">
                </div>
                <div class="mb-3  mx-3">
                    <label for="name" class="form-label">Nome do Cliente</label>
                    <select name='name' style="width: 220px;" class="form-control" id="name"> 
                        @foreach($clientes as $cliente)
                            <option value="{{ $cliente->name }}">{{ $cliente->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tel" class="form-label">Número de telefone</label>
                    <input type="text" name='tel' onkeypress="checkTel()" maxlength="14" id="tel" pattern="[0-9]{2} [0-9]{1} [0-9]{4}-[0-9]{4}" class="form-control" required placeholder="71 9 9999-9999">
                </div>
                <div class="mb-3  mx-3">
                    <label for="equipment" class="form-label">Equipamento</label>
                    <input type="text" style="width: 220px;"  name='equipment' class="form-control" id="equipment" required placeholder="Ex:Televisor">
                </div>
            </div>
            <div class="d-flex">
                <div class="mb-3">
                    <label for="model" class="form-label">Modelo</label>
                    <input type="text" style="width: 220px;" name='model' class="form-control" id="model" required placeholder="Ex:PN321Av">
                </div>
                <div class="mb-3 mx-3">
                    <label for="brand" class="form-label">Marca</label>
                    <input type="text"style="width: 220px;" name='brand' class="form-control" id="brand" required placeholder="Ex:Sansung">
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status (Situação Atual)</label>
                    <select name="status" style="width: 220px;" class="form-control" id="status"> 
                            <option value="Orçamento">Orçamento</option>
                            <option value="Finalizado">Finalizado</option>
                            <option value="Pendente">Pendente</option>
                            <option value="Sem Solução">Sem Solução</option>
                    </select>
                </div>
                <div class="mb-3 mx-3">
                    <label for="serialNumber" class="form-label">Número de Serial</label>
                    <input type="text" style="width: 220px;" name='serialNumber' class="form-control" id="serialNumber" required placeholder="Ex:23343242">
                </div>
            </div>
            <div class="d-flex">
                <div class="form-floating">
                    <textarea class="form-control" maxlength="180 " name='technicalReport' placeholder="Leave a comment here" id="Laudo técnico" style="width: 300px; height:150px; resize:none;"></textarea>
                    <label for="Laudo técnico" class="form-label">Laudo técnico</label>
                </div>
            
                <div class="form-floating mx-3">
                    <textarea class="form-control" maxlength="180"name='defect' placeholder="Leave a comment here" id="Defeito ou motivo" style="width: 300px; height:150px; resize:none;"></textarea>
                    <label for="Defeito ou motivo">Defeito ou motivo</label>
                </div>
                <div class="form-floating">
                    <textarea class="form-control" name='observation' placeholder="Leave a comment here" id="Observações" style="width: 300px; height:150px; resize:none;"></textarea>
                    <label for="Observações">Observações</label>
                </div>
            </div>
            <hr>

            <h2>Produtos/Peças</h2>

            <div class="d-flex">
                <div class="form-floating mt-3 mb-2">
                    <textarea class="form-control"maxlength="180" name='productDescription' placeholder="Leave a comment here" id="Descrição do Produto" style="width: 300px; height:150px; resize:none;"></textarea>
                    <label for="Descrição do Produto">Descrição do Produto</label>
                </div>
                <div class="mx-3">
                    <div class="mb-4">
                        <label for="valueProduct" class="form-label">Valor do Produto</label>
                        <input type="text" style="width: 220px;" placeholder="Ex:33" name="valueProduct" required class="form-control" id="valueProduct">
                    </div>
                    <div>
                        <label for="warrantyProduct" class="form-label">Garantia do Produto</label>
                        <input type="number" style="width: 220px;" placeholder="Somente números inteiros Ex:3" name="warrantyProduct" required class="form-control" id="warrantyProduct">
                    </div>
                </div>
                <div>
                    <label for="discountProduct" class="form-label">Desconto do Produto</label>
                    <input type="text" style="width: 220px;" name="discountProduct" placeholder="Somente números inteiros Ex:3" required class="form-control" id="discount">
                </div>
            </div>
            <hr>

            <h2>Serviços realizados</h2>
            <div class="d-flex">
                <div class="form-floating mt-3 mb-2">
                    <textarea class="form-control"maxlength="180" name="serviceDescription" placeholder="Leave a comment here" id="Descrição do Produto" style="width: 300px; height:150px; resize:none;"></textarea>
                    <label for="Descrição do Produto">Descrição do Serviço</label>
                </div>
                <div class="mx-3">
                    <div class="mb-3">
                        <label for="valueService" class="form-label">Valor do Serviço</label>
                        <input type="text" style="width: 220px;" placeholder="Ex:33,00" name="valueService" required class="form-control" id="valueService">
                    </div>
                    <div class="mb-3">
                        <label for="warrantyService" class="form-label">Garantia do Serviço</label>
                        <input type="number" style="width: 220px;" placeholder="Somente números inteiros Ex:3" name="warrantyService" required class="form-control" id="warrantyService">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="discountService" class="form-label">Desconto do Serviço</label>
                    <input type="text" style="width: 220px;" name="discountService" placeholder="Somente números inteiros Ex:3" required class="form-control" id="discount">
                </div>
            </div>
           
            <button type="submit" class="btn btn-success mt-2 mb-4">Cadastrar Ordem de Serviço</button>
        </form>
    </main>


@endsection