<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') | RabyPudding</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <x-navbar :username="$username ?? ''" />

    <main class="main-content">
        @yield('content')
    </main>

    @include('components.footer')

</body>
</html>