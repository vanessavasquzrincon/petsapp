@extends('layouts.app')
@section('title', 'Adoption Page - PetsApp')

@section('content')
<header class="nav level-2">
    <a href="{{route('dashboard')}}">
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
    <h1>MY ADOPTIONS</h1>
    <a href="{{url('adoptions/create')}}"  class="add">
        <img src="{{ asset('images/ico-add.svg')}}" width="30px" alt="">
        Add Adoption
    </a>
    <table>
        <tbody class='adoptions'>
        @forelse ($adps as $adp)
            <tr>
                <td>
                    <img src="{{ asset('images/'.$adp->user->photo) }}" alt="User">
                    <img src="{{ asset('images/'.$adp->pet->photo) }}" alt="User">
                </td>
                <td>
                    <span>{{ $adp->user->fullname }}</span>
                    <span>{{ $adp->pet->name }}</span>
                    <span>{{ $adp->created_at->diffforhumans() }}</span>
                </td>
            </tr>
            @empty
            <p class="no-adoptions">Adoptions no yet... <br>
                Please adopt a pet :)</p>
            
            @endforelse
        </tbody>
        
    </table>
</section>
@endsection
@section('js')
    @if (session('message'))
        <script>
        $(document).ready(function () {
            Swal.fire({
                position: "top-end",
                title: "Great job!",
                text: "{{ session('message') }}",
                icon: "success",
                showConfirmButton: false,
                timer: 5000
            })
        })
        </script>
    @endif
@endsection