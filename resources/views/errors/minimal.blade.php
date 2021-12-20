@extends('index', ['title' => isset($title) ? $title : null])

@section('main')
    {{-- Navbar --}}
    <x-navbar>
        @auth
            <a href='{{ route('dashboard') }}'>Dashboard</a>
        @else
            <a href='{{ route('login') }}'>Login</a>
        @endauth
    </x-navbar>

    {{-- Content --}}
    <div class='hero'>
        <div class='container text-center'>
            <h1 class='bold my-0' style="letter-spacing: .2em">
                @yield('code')
            </h1>
            <span style="letter-spacing: .5em">
                - @yield('message') -
            </span>
            <div class='row justify-center mt-3'>
                @auth
                    <a href="/dashboard" class='button-secondary'>Return to Dashboard</a>
                @else
                    <a href="/" class='button-secondary'>Return to home</a>
                @endauth
            </div>
        </div>
    </div>
@endsection