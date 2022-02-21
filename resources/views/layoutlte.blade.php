@extends('adminlte::page')
@extends('footer')
@section('title', 'tablero')
{{-- Colocar nombre de ventana aquí --}}
{{-- Colocar nombre de ventana aquí --}}
@section('content_header')
{{-- Colocar titulo h1 aquí--}}
@stop
@section('content')
{{-- Colocar contenido aquí--}}
@yield('footer')
@stop
@section('css')
    {{-- Colocar estilos adicionales aquí--}}
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles
@stop
@section('js')
    {{-- Colocar scrips adicionales aquí--}}
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    @livewireScripts
@stop