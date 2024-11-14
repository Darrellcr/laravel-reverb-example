@extends('layout')

@section('content')
<main>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <input type="text" name="name">
        <input type="email" name="email">
        <input type="password" name="password">
        <button type="submit">Submit</button>
    </form>
</main>
@endsection