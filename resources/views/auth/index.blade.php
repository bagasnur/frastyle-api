@extends('index', ['title' => isset($title) ? $title : null])

@section('main')
    {{-- Content --}}
    <div class='auth bg-white'>
        <div class='container mt-3 mb-4'>
            <div class="row justify-center text-center">
                <a href="{{ url('/') }}" class="auth-header mb-2">
                    <h1 class='bold my-0'>
                        FRASTYLE DEV.
                    </h1>
                    <span style="letter-spacing: 1em">PROJECT</span>
                </a>
            </div>
            <div class="row justify-center">
                <div class="card box-12 box-m-10 box-l-6 shadow p-2 p-m-3">
                    {{-- Content --}}
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
@endsection