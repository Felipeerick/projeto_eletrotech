@extends('templates.errors')
@section('title', 'Tela de login')
@section('content')  
    <section class="vh-100" style="background-color: rgb(0, 147, 255);">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block ms-auto text-center mx-auto" style="margin-top: 12%;">
                                <img src="{{ asset('assets/images/eletrotech_logo.jpeg') }}"
                                alt="login form" class=" img-responsive" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <span class="h1 fw-bold mb-0"> Eletrotech <i class="fa-solid fa-globe"></i></span>
                                        </div>
                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Bem-vindo Adm</h5>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example17">Email</label>
                                            <input type="email" id="form2Example17" name="email" class="form-control form-control-lg" />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example27">Senha</label>
                                            <input type="password" name="password" id="form2Example27" class="form-control form-control-lg" />
                                        </div>
                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-primary btn-lg btn-block" type="submit"> {{ __('Login') }}</button>
                                        </div>
                                        <div class="d-flex">
                                            <div class="block mt-4">
                                                <label for="remember_me" class="inline-flex items-center">
                                                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                                </label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" >
                        
                    </a>
                @endif