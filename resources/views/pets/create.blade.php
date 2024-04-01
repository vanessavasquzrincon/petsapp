@extends('layouts.app')
@section('title', 'Create Pet Page - PetsApp')

@section('content')
@include('layouts.menuburger')
    <header class="nav level-2">
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
    <section class="register create">
        
        <form action="{{ route('pets.store') }}"  method="post" enctype="multipart/form-data">
            @csrf
            <img src="{{asset('images/ico-pets.svg')}}" alt="" id="upload" width="200px">
            <input type="file" name="photo" id="photo" accept="image/*" value="{{ old('photo')}}" >
            <input type="text" name="name" placeholder="Name" value="{{ old('name')}}" >
            <input type="text" name="kind" placeholder="Kind" value="{{ old('kind')}}">
            <input type="number" name="weight" placeholder="Weight" value="{{ old('weight')}}" >
            <input type="number" name="age" placeholder="Age" value="{{ old('age')}}" >
            <input type="text" name="bread" placeholder="Breed" value="{{ old('bread')}}" >
            <input type="text" name="location" placeholder="Location" value="{{ old('location')}}" >
    

        <button type="submit">Register</button>
    </form>
</section>
    
@endsection
@section('js')

    <script>
        $(document).ready(function () {
            $('#upload').click(function (e) {
                e.preventDefault();
                $('#photo').click();
            });
    
            $('#photo').change(function (e) {
                e.preventDefault();
                let reader = new FileReader();
                reader.onload = function (event) {
                    $('#upload').attr('src', event.target.result); // Utilizar event.target.result en lugar de readAsBinaryString
                };
                reader.readAsDataURL(this.files[0]);
            });
        });
    </script>
     @if (count($errors->all()) > 0)
     @php $error = '' @endphp
         @foreach ($errors->all() as $message)
             @php $error .= '<li>' . $message . '</li>' @endphp
         @endforeach
         <script>
             $(document).ready(function () {
                 Swal.fire({
                     position: "top-end",
                     title: "Ops!",
                     html: `@php echo $error @endphp`,
                     text: "{{ $error }}",
                     icon: "error",
                     showConfirmButton: false,
                     timer: 5000
                 })
             })
         </script>
         
     @endif
        
    @endsection
     
