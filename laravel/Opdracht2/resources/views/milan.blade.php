@extends ('layout')

@section('title')
    <title>Info</title>
@endsection

@section('navbar')
    <ul class="nav nav-underline align-items-center">
        <li class="nav-item">
            <a class="nav-link text-light" href="http://127.0.1.3/laravel/Opdracht2/public/">Home</a>
        </li>
        |
        <li class="nav-item">
            <a class="nav-link text-light" href="http://127.0.1.3/laravel/Opdracht2/public/info">Info</a>
        </li>
        |
        <li class="nav-item">
            <a class="nav-link text-light active" aria-current="page" href="http://127.0.1.3/laravel/Opdracht2/public/milan">Milan</a>
        </li>
    </ul>
@endsection

@section('content')
    <p>This is the Milan page</p>
@endsection
