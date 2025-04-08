<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Minha Landing Page')</title> <!-- Título dinâmico -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>



</head>
<body>

    @include('partials.header') <!-- Inclui o cabeçalho -->

    <main>
        @yield('content') <!-- Aqui entra o conteúdo de cada página -->
    </main>

    @include('partials.footer') <!-- Inclui o rodapé -->

   


</body>
</html>
