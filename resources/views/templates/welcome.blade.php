<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('assets/images/eletrotech_favicon.png') }}">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;700;800;900&family=Poppins:wght@400;700&display=swap"rel="stylesheet"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>@yield('title')</title>
    </head>
    <body>
        @yield('content')
    </body>
</html>