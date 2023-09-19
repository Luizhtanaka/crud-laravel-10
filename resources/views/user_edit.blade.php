@extends('master')


@section('content')

    <h2>Edit</h2>

    <form action="" method="post">

    <input type="text" name="name" value="{{ $user->name }}">


    </form>

@endsection