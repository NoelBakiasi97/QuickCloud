@extends('adminlte::page')

@section('title')
@yield('title')
@endsection

@section('content_header')
    <h1 class="mb-4">Back Office  <span><i class="fas fa-briefcase"></i></span></h1>
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