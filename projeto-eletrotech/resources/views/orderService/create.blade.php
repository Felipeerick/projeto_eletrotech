@extends('templates.cliente')
@section('title', 'Adicione uma Ordem De Serviço')
@section('content')

<main class="container">
        <h2 class="mt-4">Ordem de Serviço</h2>
        <form method="POST">
            @csrf
            <div class="mb-3">
                <label for="dateOfEntry" class="form-label">Data de cadastro</label>
                <input name='dateOfEntry' readonly class="form-control" id="dateOfEntry" required  value="{{date('Y-m-d ')}}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nome do Cliente</label>
                <select class="form-control" id="exampleFormControlInput1"> 
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
                <label for="serialNumber" class="form-label">Número de Serial</label>
                <input type="text" name='serialNumber' class="form-control" id="serialNumber" required placeholder="Ex:23343242">
            </div>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="Laudo técnico" style="height: 100px"></textarea>
                <label for="Laudo técnico">Laudo técnico</label>
           
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="Defeito ou motivo" style="height: 100px"></textarea>
                <label for="Defeito ou motivo">Defeito ou motivo</label>
            </div>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="Observações" style="height: 100px"></textarea>
                <label for="Observações">Observações</label>
            </div>
            <hr>

            <h2>Coloque o endereço do cliente</h2>

            <div class="mb-3">
                <label for="neighborhood" class="form-label">Bairro</label>
                <input type="neighborhood" name='neighborhood' class="form-control" required id="neighborhood" placeholder="Ex:7 de abril">
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">Cidade</label>
                <input type="city" name="city" required class="form-control" id="city" placeholder="Ex:Salvador">
            </div>
            <div class="mb-3">
                <label for="state" class="form-label">Estado</label>
                <input type="state" name="state" required class="form-control" id="state" placeholder="Ex:Bahia">
            </div>
            <div class="mb-3">
                <label for="street" class="form-label">Rua</label>
                <input type="street" name="street" required class="form-control" id="street" placeholder="Ex:Rua das pedrinhas">
            </div>
            <button type="submit" class="btn btn-success mb-3">Cadastrar Usuário</button>
        </form>
    </main>


@endsection