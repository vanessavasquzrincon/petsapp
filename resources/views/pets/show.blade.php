@extends('layouts.app')
@section('title', 'Show Pet Page - PetsApp')

@section('content')
<header class="nav level-1">
    <a href="{{url('pets')}}">
        <img src="{{asset('images/ico-back.svg')}}" alt="Back">
    </a>
    <img src="{{asset('images/logo.png')}}" alt="Logo">
    <a href=""> 
        
    </a>
    <a href="javascript:;" class="mburguer">
        <img src="{{ asset('images/mburguer.svg')}}" alt="">
    </a>
        
</header>

<section class="show">
    <h1>Show Pet</h1>
    <img class="photo" src="{{ asset('images/'.$pet->photo)}}"  alt="" width="250px">
    <div class="info">
        <p>{{ $pet->name}}</p>
        <p>{{ $pet->kind}}</p>
        <p>{{ $pet->weight}} Kls</p>
        <p>{{ $pet->age}} Years</p>
        <p>{{ $pet->bread}}</p>
        <p>{{ $pet->location}}</p>
    </div>
    
            
</section>


@endsection