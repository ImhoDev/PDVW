@extends('adminlte::page')

@section('title', 'tablero')

@section('content_header')
@stop

@yield('content')

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop