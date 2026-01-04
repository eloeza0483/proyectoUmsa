<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Proyecto Umsa</title>
    <link rel="stylesheet" href="{{ asset('assets/libs/fontawesome/fontawesome.min.css') }}">
</head>
<body class="w-screen min-h-screen flex flex-col bg-slate-50">
    <header class="h-auto shadow-md relative z-50">
        @include('nav-bar')
    </header>
    <main class="flex-1">
        @yield('content')
    </main>
    <footer class="bg-emerald-900 text-white text-center py-6 mt-10">
        <p>&copy; {{ date('Y') }} The Habana Club. Todos los derechos reservados.</p>
    </footer>
</body>
</html>