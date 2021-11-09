@extends('auth.index', ['title' => 'Login'])

@section('content')
    {{-- Content --}}
        <!-- Error Handling -->
        <div class="alert-danger flex-row items-center mb-2">
            <i class="icon-danger" data-feather="check-circle"></i>
            <div class="alert-desc text-left pl-1">
                <span>Terlalu banyak aktivitas login. Tunggu dan coba beberapa saat lagi.</span>
            </div>
        </div>
@endsection