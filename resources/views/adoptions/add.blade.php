@extends('layouts.app')
@section('title', 'Show Pet Page - PetsApp')

@section('content')
<header class="nav level-2">
    <a href="{{url('adoptions/create')}}">
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
    <h1>Adoption</h1>
    <img class="photo" src="{{ asset('images/'.$pet->photo)}}"  alt="" width="250px">
    <div class="info">
        <p>{{ $pet->name}}</p>
        <p>{{ $pet->kind}}</p>
        <p>{{ $pet->weight}} Kls</p>
        <p>{{ $pet->age}} Years</p>
        <p>{{ $pet->bread}}</p>
        <p>{{ $pet->location}}</p>
    </div>

    <form action="{{ url('myadoptions/store') }}" method="post">
        @csrf
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        <input type="hidden" name="pet_id" value="{{ $pet->id }}">
        <button class="btn">Adopt Me</button>
    </form>
</section>



@endsection