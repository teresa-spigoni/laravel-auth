<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <img class="header-pic" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4e/Aeroporti_di_Roma_Logo.svg/1280px-Aeroporti_di_Roma_Logo.svg.png" alt="">


    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        Powered by Teresa
    </footer>
</body>
</html>
