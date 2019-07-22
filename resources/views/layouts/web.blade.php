<!DOCTYPE html>
<html lang="es-ES">
    <head>
        <meta charset="UTF-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <title>3 Angles group</title>
        <link
            rel="stylesheet"
            href="css/bootstrap.min.css"
            type="text/css"
            media="all"
        />
        <link
            href="https://fonts.googleapis.com/css?family=Fira+Sans:300,300i,400,400i,700,700i,900,900i&display=swap"
            rel="stylesheet"
        />
        <link
            rel="stylesheet"
            href="css/main.css"
            type="text/css"
            media="all"
        />
        <link
            rel="stylesheet"
            href="css/home.css"
            type="text/css"
            media="all"
        />
        @stack('styles')
    </head>

    <body>
        <div id="app">
            @include('partials.nav')
            @yield('content')
            @include('layouts.footer')
        </div>
        <script
            type="text/javascript"
            src="https://code.jquery.com/jquery-3.3.1.min.js"
        ></script>
        <script
            type="text/javascript"
            src="js/bootstrap.bundle.min.js"
        ></script>
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>
