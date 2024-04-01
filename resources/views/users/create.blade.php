@extends('layouts.app')
@section('title', 'Create User Page - PetsApp')

@section('content')
@include('layouts.menuburger')
    <header class="nav level-2">
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
    <section class="register create">
        <menu>
            <a href="{{ url('login/') }}">Login</a>
            <a href="{{ url('javascript:;') }}">Register</a>
        </menu>
        <form action="{{ route('users.store') }}"  method="post" enctype="multipart/form-data">
            @csrf
            <img src="{{asset('images/ico-users.svg')}}" alt="" id="upload" width="200px">
            <input type="file" name="photo" id="photo" accept="image/*" value="{{ old('photo')}}" >
            <input type="number" name="document" placeholder="Document"  value="{{ old('document')}}">
            <input type="text" name="fullname" placeholder="Full Name" value="{{ old('fullname')}}" >
            <select name="gender" id=""  class="select_register">
                <option value="">SELECT GENDER...</option>
                <option value="Female" @if(old('gender') == 'Female') selected @endif>Female</option>
                <option value="Male" @if(old('gender') == 'Male') selected @endif>Male</option>
            </select>
            <input type="date" name="birthdate" placeholder="birthdate" value="{{ old('birthdate')}}">
            <input type="text" name="phone" placeholder="Phone Number" value="{{ old('phone')}}" >
            <input type="email" name="email" placeholder="Email" value="{{ old('email')}}" >
            <input type="password" name="password" placeholder="Password"  >
            <input type="password" name="password_confirmation" placeholder="Confirmed Password" >
    

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
     
