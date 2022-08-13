@extends('templates.errors')
@section('title', '404 Not Found')
@section('content')

<article class='mt-5 mx-auto text-center'>
    <img src="{{asset('assets/images/not_found.png')}}" width="60%" alt="nof_found">
    <h4 class="">404 | Essa rota não existe ou você não tem acesso!</h4>
    <div>
        <a href="/" class="btn btn-primary mt-3">Voltar a tela anterior</a>
    </div>
</article>

@endsection