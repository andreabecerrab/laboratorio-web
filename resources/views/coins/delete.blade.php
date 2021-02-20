@extends('layouts.main')

@section('content')

<form action="{{ route('coins.update') }}" method="">
  @csrf

  <input type="submit" value="Submit">
</form> 
@endsection