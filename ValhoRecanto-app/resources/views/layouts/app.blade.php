<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- do Breeze -->

    <!-- qualquer outro CSS pode ir aqui -->
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Seu menu fixo -->
    @include('layouts.navbar')

    <!-- Conteúdo principal -->
    <main class="p-6">
        @yield('content')
    </main>

    <footer class="bg-white text-center text-sm text-gray-500 p-4 border-t mt-10">
        &copy; {{ date('Y') }} ValhoRecanto. Todos os direitos reservados.
    </footer>
</body>
</html>
