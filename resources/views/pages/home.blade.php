@extends('layouts.app')

@section('title', 'Home')
@section('content')
    @include('partials.navbar')
    @include('partials.hero')
    @include('partials.about')
    @include('partials.menu')
    @include('partials.gallery')
    @include('partials.contact')
    @include('partials.footer')

@endsection

