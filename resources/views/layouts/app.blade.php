@extends('adminlte::page')

@section('title')
@yield('title')
@endsection

@section('content_header')
    <h1>Back Office</h1>
@stop

@section('content')
    @yield('content')
@stop

@section('css')
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop