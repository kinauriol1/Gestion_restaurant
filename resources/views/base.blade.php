<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>

    {{-- bar des navigation --}}
    @include('navbar')
    {{-- Tous nos contenus seront affiché ici --}}
    @yield('content')
     <!-- Bootstrap JS (facultatif mais utile pour certains composants) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<style>
    body {
        margin: 0;
        font-family: 'Nunito', sans-serif;
        background-image: url('https://as2.ftcdn.net/v2/jpg/02/39/65/98/1000_F_239365981_1vZKZzZzZzZzZzZzZzZzZzZzZzZzZz.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        position: relative;
        z-index: 0;
    }

    body::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: inherit;
        background-size: inherit;
        background-position: inherit;
        background-repeat: inherit;
        filter: blur(6px) brightness(0.7);
        z-index: -1;
    }

    ul {
        background-color: rgba(0, 0, 0, 0.6);
        padding: 0;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    li a {
        color: #fff;
        padding: 14px 20px;
        text-decoration: none;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    li a:hover {
        background-color: #f39c12;
    }

    li a.active {
        background-color: #c0392b;
    }
</style>
