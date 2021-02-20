@extends('layouts.main')

@section('content')
<h1>Create your coin here!</h1>

<form action="{{ route('coins.update', ['coin' => $coin]) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="">Short name</label>
        <input type="text" name="short_name">
    </div>
    <div>
        <label for="">Name</label>
        <input type="text" name="name">
    </div>
    <div>
        <input type="submit" value="Store">
    </div>
</form>
@endsection
