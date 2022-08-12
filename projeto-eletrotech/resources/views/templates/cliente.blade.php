<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('assets/images/eletrotech_favicon.png') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>@yield('title')</title>
    </head>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-screwdriver-wrench me-2"></i> Admin
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="nav-link active" aria-current="page" href="{{ route('cliente.index') }}">Cliente</a>
                            <a class="nav-link active" href="{{ route('orderService.index') }}">Ordem de Serviço</a>
                            <li><hr class="dropdown-divider"></li>
                            <a href="#" class="nav-link active">Logout</a>
                        </ul>
                    </li>
                </div>
            </div>
        </div>
    </nav>
    </header>
    <body>
        <article class="container">
            @yield('content')
        </article>
    </body>
    <script src="{{ asset('assets/js/checkTel.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>