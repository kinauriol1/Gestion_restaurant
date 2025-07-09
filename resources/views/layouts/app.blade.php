<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="font-family: sans-serif; margin: 2rem;">

    @include('layouts.nav')

    <h1>@yield('title')</h1>
    <div>
        @yield('content')
    </div>

</body>
</html>
