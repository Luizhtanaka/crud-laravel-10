@extends('master')


@section('content')

    <h2>Users</h2>

    <ul>
        @foreach ($users as $user)

        <li>{{ $user->name }} | <a href="">Editar</a> | <a href="">Delete</a></li>
            
        @endforeach
</ul>

@endsection