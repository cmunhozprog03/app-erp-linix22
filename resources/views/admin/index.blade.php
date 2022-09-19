@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
Now, and as usual, you just return this view from a controller. It is a recommendation to check out AdminLTE v3 to find out how to build beautiful content for your admin panel. As a preview, the next image shows what you can get with the previous blade template:

