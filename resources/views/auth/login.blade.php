@extends('auth.index', ['title' => 'Login'])

@section('content')
    {{-- Content --}}
    <form method="POST" action="{{ route('login') }}">
    @csrf

    @if ($errors->all())
        @foreach ($errors->all() as $message)
            <!-- Error Handling -->
            <div class="alert-danger flex-row items-center justify-between mb-2">
                <i class="icon-danger" data-feather="alert-circle"></i>
                <div class="alert-desc text-left pl-1">
                    <span>{{ $message }}</span>
                </div>
            </div>
        @endforeach
    @endif


        <!-- Email -->
        <div class="form-input">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="input @error('email') invalid @enderror" value="{{ old('email') }}" required autocomplete="email">
        </div>

        <!-- Passsword -->
        <div class="form-input">
            <div class="d-flex justify-between">
                <label for="password">Passsword</label>
                <a href="forgot-password">Lupa sandi?</a>
            </div>
            <input type="password" name="password" id="password" class="input @error('password') invalid @enderror" required autocomplete="password">
        </div>

        <!-- Remember Me -->
        <input type="checkbox" name="remember-me" id="remember-me"><label for="remember-me">Ingat
            saya</label>

        <!-- Button Submit -->
        <div class="mt-3">
            <button type="submit" class="button-primary mx-0" style="width: 100%">Masuk</button>
        </div>
    </form>
@endsection