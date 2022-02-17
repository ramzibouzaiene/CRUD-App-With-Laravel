@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
            <h1>Dashboard</h1>
            <p class="lead">Only authenticated users can access this section.</p>
            <a class="btn btn-lg btn-primary" href="https://ramzibouzaiene.github.io/" role="button">Visit my website &raquo;</a>
        @endauth

        @guest
            <h1>Homepage</h1>
            <p class="lead">WELCOME TO THE HOME PAGE</p>
        @endguest
    </div>
@endsection
