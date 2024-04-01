@extends('layouts.app')

@section('title', 'Welcome Page - PetsApp')

@section('content')
<header>
    <img src="{{asset('images/logo.png')}}" alt="Logo">
</header>
<section>
    <img class="slide" src="{{ asset('images/family.png') }}" alt="slide">
    <a class="bottom" href="{{ url('login/') }}">Enter</a>
</section>
    
@endsection