@extends('auth.index', ['title' => 'Create New Password'])

@section('content')
    {{-- Content --}}
    <form action="">

        <!-- Error Handling -->
        <div class="alert-danger flex-row items-center mb-2">
            <i class="icon-danger" data-feather="alert-circle"></i>
            <div class="alert-desc text-left pl-1">
                <span>Terlalu banyak aktivitas login. Tunggu dan coba beberapa saat lagi.</span>
            </div>
        </div>

        <!-- Passsword -->
        <div class="form-input">
            <label for="password">Passsword</label>
            <input type="password" name="password" id="password" class="input" required>
        </div>

        <!-- Passsword Confirm -->
        <div class="form-input">
            <label for="password">Konfirmasi Passsword</label>
            <input type="password" name="password" id="password" class="input" required>
        </div>

        <!-- Button Submit -->
        <div class="mt-3">
            <!-- <button type="submit" class="button-primary">Masuk</button> -->
            <a href="dashboard" class="button-primary mx-0" style="width: 100%">Ubah password</a>
        </div>
    </form>
@endsection