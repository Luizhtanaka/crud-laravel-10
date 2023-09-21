@extends('master')


@section('content')

    <h2>Create</h2>

    @if(session()->has('message'))
        {{ session()->get('message') }}
    @endif
    
    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Informe seu nome completo" value="Tanaka">
        <input type="text" name="email" placeholder="Informe seu e-mail" value="luizhenrique.tk@hotmail.com">
        <input type="password" name="password" placeholder="Informa uma senha" value="123456">

        <button type="submit">Create</button>


    </form>

@endsection