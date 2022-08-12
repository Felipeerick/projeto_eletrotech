@extends('templates.errors')
@section('title', '404 not found')
@section('content')

<article class='mt-5 mx-auto text-center'>
    <h2 class="mb-5">404 | Essa rota não existe ou você não tem acesso!</h2>
    <img src="{{asset('assets/images/not_found.png')}}" width="60%" alt="nof_found">
    <div>
        <a href="/" class="btn btn-primary mt-3">Voltar a tela anterior</a>
    </div>
</article>


@endsection