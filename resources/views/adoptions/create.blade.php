@extends('layouts.app')
@section('title', 'Adoption Page - PetsApp')

@section('content')
<header class="nav level-2">
    <a href="{{url('myadoptions')}}">
        <img src="{{asset('images/ico-back.svg')}}" alt="Back">
    </a>
    <img src="{{asset('images/logo.png')}}" alt="Logo">
    <a href=""> 
        
    </a>
    <a href="" class="mburguer">
        <img src="{{ asset('images/mburguer.svg')}}" alt="">
    </a>
        
</header>
<section class="module">
    <h1 class="mod-h1">ADOPTIONS</h1>
            <div class="pets">
                @forelse ($pets as $pet)
                <article>
                    <header>
                        <img src="{{asset('images/' . $pet->photo)}}" alt="Pet">
                        <p>
                            <span>
                                {{$pet->name}}
                            </span>
                            <span>{{$pet->kind}}</span>
                        </p>

                    </header>
                    <footer>
                        <a href="{{url('myadoptions/add/' . $pet->id)}}">View</a>

                    </footer> 
                    
                </article>
                    
                @empty
                    
                @endforelse
                
            
            </div>
</section>
@endsection