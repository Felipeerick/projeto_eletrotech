@extends('templates.cliente')
@section('title', 'Ordem de Serviço')
@section('content')

    <h2 class="mt-5">Ordem de Serviços</h2>

    <div class="d-flex">
        <a href="{{ route('orderService.create') }}" class="btn btn-info mt-2">+ Adicionar nova ordem de serviço</a>
        <form action="{{ route('orderService.index') }}" method="get" class='d-flex mt-2'>
            @csrf
            <div class='form-group w-100 me-1 mx-3' >
                <input type="search" id="form1" name='search' class="form-control rounded " placeholder='Pesquisar'/>
            </div>
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-search"></i>
            </button> 
        </form>
        <form action="{{ route('orderService.index') }}" method="get" class="mt-2">
            @csrf
            <div class='form-group w-100' >
                <input type="hidden" id="form1" name='search' class="form-control rounded" value=" " placeholder='Pesquisar'/>
            </div>
            <button type="submit" class="btn btn-primary mx-1">
                Limpar <i class="fa-solid fa-trash"></i> 
            </button> 
        </form>
    </div>

    @if(session()->has('create'))
    <span class="d-block p-2  mt-3 mb-1  alert alert-success">{{ session()->get('create') }}</span>
    @endif

    @if(session()->has('edit'))
    <span class="d-block p-2  mt-3 mb-1  alert alert-warning">{{ session()->get('edit') }}</span>
    @endif

    @if(session()->has('remove'))
    <span class="d-block p-2  mt-3 mb-1  alert alert-danger">{{ session()->get('remove') }}</span>
    @endif

    <table class="table table-hover mt-2">
        <thead>
            <tr>   
                <th>N° da OS</th>
                <th>Nome</th>
                <th>Data de Cadastro</th>
                <th>Valor total</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($order_service as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->name }}</td>
                    <td>{{ date('d/m/Y ', strtotime($order->created_at)) }}</td> 
                    <td>R$ {{ number_format($order->valueTotalOs, 2, ',', '.') }} Reais</td> 
                    <td>{{ $order->status }}</td> 
                    <td> <a href="{{route('orderService.show', $order->id)}}" class="btn btn-info">visualizar</a></td>  
                </tr>
                @empty
                <div class="alert alert-primary mt-4" role="alert">
                    Ops... sua tabela está vazia ou não encontramos resultado para a pesquisa :}
                </div>
            @endforelse
        </tbody> 
    </table>

    <div class="justify-content-center pagination">
        {{ $order_service->links('pagination::bootstrap-4') }}
    </div>

@endsection