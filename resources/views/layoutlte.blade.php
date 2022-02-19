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
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
    {{-- Colocar scrips adicionales aquí--}}
    <script> console.log('Hi!'); </script>
@stop