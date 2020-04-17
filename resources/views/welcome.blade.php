@extends('layouts.master')

@section('content')
    @include('components.header')
    @include('partials.carousel')
    @include('partials.domain')
    @include('partials.about')
    @include('partials.history')
    @include('partials.numbers')
    @include('partials.pricing')
    @include('partials.testimonials')
    @include('partials.sponsors')
    @include('components.footer')
@endsection  