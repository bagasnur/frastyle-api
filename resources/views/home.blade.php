@extends('index')

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
            <p style="letter-spacing: 0.25em">WELCOME TO</p>
            <h1 class='bold my-0'>
                FRASTYLE DEV.
            </h1>
            <span style="letter-spacing: 1em">PROJECT</span>
            <div class='row justify-center mt-3'>
                <a class='button-primary m-1'
                href='https://github.com/frastyle'>
                    Go to Github
                </a>
                <a class='button-secondary m-1'
                href='https://frastyle.com'>
                    Visit Website
                </a>
            </div>
        </div>
    </div>
@endsection