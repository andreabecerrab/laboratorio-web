@extends('layouts.main')

@section('content')
<h1>List of users</h1>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            @if (Auth::user()->role_id === 4)
            <th>Delete</th>
            @endif
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                @auth
                @if (Auth::user()->role_id === 4)
                <td>
                    <form action="{{ route('users.destroy', ['user' => $item]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="delete" class="btn btn-danger">
                        </input>
                    </form>
                </td>
                @endif
                @endauth

            </tr>
        @endforeach
    </tbody>
</table>

@endsection
