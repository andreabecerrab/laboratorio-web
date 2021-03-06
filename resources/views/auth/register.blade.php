@extends('layouts.main')

@section('content')
<h1>Registro usuario</h1>

<a href="{{ route('auth.login') }}">Login</a>

<form action="{{ route('auth.do-register') }}" method="POST">
@csrf
    <label for="">Name:</label><br>
    <input type="text"  name="name" ><br>
    <label for="">Email:</label><br>
    <input type="mail"  name="email" ><br>
    <label for="fname">Password:</label><br>
    <input type="password"  name="password" ><br>
    <label for="fname">Confirm Password:</label><br>
    <input type="password"  name="password_confirmation" ><br>

    <input type="submit" value="Submit">
</form>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection
