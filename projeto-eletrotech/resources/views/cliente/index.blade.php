@extends('templates.cliente')
@section('title', 'Adicione um cliente')
@section('content')

    <h2 class="mt-5">Listagem de Clientes</h2>

    <div class="d-flex">
        <a href="{{ route('cliente.create') }}" class="btn btn-info mt-2">+ Adicionar novo cliente</a>
        <form action="{{ route('cliente.index') }}" method="get" class='d-flex mt-2'>
            @csrf
            <div class='form-group w-100 me-1 mx-3' >
                <input type="search" id="form1" name='search' class="form-control rounded " placeholder='Pesquisar'/>
            </div>
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-search"></i>
            </button> 
        </form>
        <form action="{{ route('cliente.index') }}" method="get" class="mt-2">
            @csrf
            <div class='form-group w-100' >
                <input type="hidden" id="form1" name='search' class="form-control rounded" value=" " placeholder='Pesquisar'/>
            </div>
            <button type="submit" class="btn btn-primary mx-1">
                Limpar <i class="fa-solid fa-trash"></i> 
            </button> 
        </form>
    </div>

    @if(session()->has('add'))
        <span class="d-block p-2  mt-3 mb-1  alert alert-success">{{ session()->get('add') }}</span>
    @endif

    @if(session()->has('edit'))
        <span class="d-block p-2  mt-3 mb-1 alert alert-warning">{{ session()->get('edit') }}</span>
    @endif

    @if(session()->has('remove'))
        <span class="d-block p-2 mt-3 mb-1 alert alert-danger">{{ session()->get('remove') }}</span>
    @endif

    <table class="table table-hover mt-2">
        <thead>
            <tr>   
                <th>Nome</th>
                <th>Email</th>
                <th>Número de telefone</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->name }}</td>
                    @if($cliente->email)
                        <td>{{ $cliente->email }}</td>
                    @else 
                        <td>Sem email cadastrado</td>
                    @endif
                    <td>{{ $cliente->tel }}</td> 
                    <td> <a href="{{ route('cliente.show', $cliente->id) }}" class="btn btn-info">visualizar</a></td>  
                </tr>
                @empty
                <div class="alert alert-primary mt-4" role="alert">
                    Ops... sua tabela está vazia ou não encontramos resultado para a pesquisa :}
                </div>
            @endforelse
        </tbody> 
    </table>

    <div class="justify-content-center pagination">
        {{ $clientes->links('pagination::bootstrap-4') }}
    </div>

@endsection