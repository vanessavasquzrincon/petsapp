@extends('layouts.app')
@section('title', 'Edit User Page - PetsApp')

@section('content')
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
<section class="edit">
    <h1>Edit User</h1>
    <form action="{{ url('users/'.$user->id)}}" class="form_add" method="post" enctype="multipart/form-data"  aria-required="">
        @csrf
        @method('put')
        <input type="hidden" name="photoactual" value="{{$user->photo}}">
            <img src="{{ asset('images/'.$user->photo)}}" alt="" id="upload" width="200px">
            <input type="file" name="photo" id="photo" accept="image/*" >
            <p class="role">{{ $user->role}}</p>
            <input type="number" name="document" placeholder="Document"  value="{{ old('document', $user->document)}}">
            <input type="text" name="fullname" placeholder="Full Name" value="{{ old('fullname', $user->fullname)}}" >
            <select name="gender" id=""  class="select_register">
                <option value="">SELECT GENDER...</option>
                <option value="Female" @if(old('gender') == 'Female') selected @endif>Female</option>
                <option value="Male" @if(old('gender') == 'Male') selected @endif>Male</option>
            </select>
            <input type="date" name="birthdate" placeholder="birthdate" value="{{ old('birthdate', $user->birthdate)}}">
            <input type="text" name="phone" placeholder="Phone Number" value="{{ old('phone', $user->phone)}}" >
            <input type="email" name="email" placeholder="Email" value="{{ old('email', $user->email)}}" >
        

            <button type="submit">UPDATE</button>


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
     



    
