@extends('auth.index', ['title' => 'Forgot Password'])

@section('content')
    {{-- Content --}}
    <form action="POST">

        <!-- Error Handling -->
        <div class="alert-danger flex-row items-center mb-2">
            <i class="icon-danger" data-feather="alert-circle"></i>
            <div class="alert-desc text-left pl-1">
                <span>Terlalu banyak aktivitas login. Tunggu dan coba beberapa saat lagi.</span>
            </div>
        </div>

        <!-- Email -->
        <div class="form-input">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="input" required>
        </div>

        <!-- Button Submit -->
        <div class="mt-3">
            <!-- <button type="submit" class="button-primary">Masuk</button> -->
            <a href="reset-password" class="button-primary mx-0" style="width: 100%">Kirim link perubahan password</a>
        </div>
    </form>
@endsection