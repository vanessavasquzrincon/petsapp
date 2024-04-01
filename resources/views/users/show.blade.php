@extends('layouts.app')
@section('title', 'Show User Page - PetsApp')

@section('content')
<header class="nav level-1">
    <a href="{{url('users')}}">
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
    <h1>Show User</h1>
    <img class="photo" src="{{ asset('images/'.$user->photo)}}"  alt="" width="250px">
    <p class="role">{{ $user->role}}</p>
    <div class="info">
        <p>{{ $user->document}}</p>
        <p>{{ $user->fullname}}</p>
        <p>{{ $user->email}}</p>
        <p>{{ $user->phone}}</p>
        <p>{{ $user->gender}}</p>
        <p>{{ Carbon\Carbon::parse($user->birthdate)->diffforhumans()}}</p>
    </div>
    
            
</section>


@endsection