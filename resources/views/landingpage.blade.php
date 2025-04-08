<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title> <!-- Permite definir títulos diferentes para cada página -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
@extends('layouts.app') <!-- Usa o layout base -->
@yield('Minha LandingPage')

@section('title', 'Minha Landing Page') <!-- Define o título da página -->

    @section('content')

    @include('partials.sobre') <!-- Seção sobre nós -->
    @include('partials.servicos') <!-- Seção sobre Serviços --->
    @include('partials.agendamento') <!-- Seção sobre agendamento --->
    @include('partials.depoimentos') <!---Seção sobre depoimentos --->
    @include('partials.contato')<!---Seção sobre contato --->

@endsection

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
