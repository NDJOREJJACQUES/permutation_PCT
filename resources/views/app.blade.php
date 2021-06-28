<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('dynamicPageTitle') | PERMUTATION</title>
        <link rel="stylesheet" href="{{ asset('assets/styles/main.css') }}">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('assets/styles/form.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/styles/animation.css') }}">
        <script src="./assets/scripts/main.js" async></script>
    </head>
    <body>
        <header>
            <div class="logo">
                <a href="{{ route('accueil') }}">LOGO</a>
            </div>
            <div class="menu"><i class="las la-bars"></i></div>
            @include('pages.partial._nav')
        </header>
        <main>
            @yield('content')
        </main>
    </body>
</html>