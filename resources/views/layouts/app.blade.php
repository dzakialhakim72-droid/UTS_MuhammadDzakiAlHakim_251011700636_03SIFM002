<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', "Kim'sCells - Toko Aksesoris HP")</title>
    <link href="{{ asset('Bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">

    @include('partials.navbar')

    <main class="flex-grow-1">
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
