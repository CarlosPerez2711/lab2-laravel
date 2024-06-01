<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        .activo a {
            color: red;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <nav>
    <table class="table">
        @include('partials.nav')
    </table>
    </nav>

    <div>
        @yield('content')
    </div>
</body>
</html>


