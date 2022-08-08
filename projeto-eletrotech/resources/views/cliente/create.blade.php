@extends('templates.cliente')
@section('title', 'Adicione um cliente')
@section('content')

    <main class="container">
        <h2 class="mt-4">Dados básicos</h2>
        <form action="{{ route('cliente.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" name='name' class="form-control" id="name" required placeholder="Ex:Alberto almeida">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email (Opcional)</label>
                <input type="email" name='email' class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="tel" class="form-label">Número de telefone</label>
                <input type="text" name='tel' class="form-control" id="tel" required placeholder="71 9 9999-9999">
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