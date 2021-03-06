@extends('layouts.main')

@section('content')
<h1>List of users</h1>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>
                    <form action="{{ route('users.destroy', ['user' => $item]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="delete" class="btn btn-danger">

                        </input>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
