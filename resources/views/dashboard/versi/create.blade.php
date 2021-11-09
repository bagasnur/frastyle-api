@extends('dashboard.index', ['title' => 'Tambah Versi'])

@section('content')
    <div class="tab-content">
        <div class="content">
            <div class="flex-column flex-m-row items-center mb-2">
                <h4 class="m-0">Tambah Versi Baru</h4>
            </div>

            @if ($errors->all())
                <!-- Error Handling -->
                <div class="alert-danger flex-row items-center mb-2">
                    <i class="icon-danger" data-feather="alert-circle"></i>
                    <div class="alert-desc text-left pl-1">
                    @if ($errors->count() == 1)
                        <span>{{ $errors->first() }}</span>
                    @else
                        <ul>
                        @foreach ($errors->all() as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                        </ul>
                    @endif
                    </div>
                </div>
            @endif

            <form method="POST" action="{{ route('versi.store') }}">
            @csrf
                <div class="flex-column flex-m-row">
                    <!-- Versi -->
                    <div class="box-m-6 mt-0 form-input">
                        <label for="versi">Nomor Versi</label>
                        <input type="number" name="versi" id="versi" class="input @error('versi') invalid @enderror" value="{{ old('versi') }}" required>
                    </div>
                    <!-- Tahap Versi -->
                    <div class="box-m-6 mt-0 form-input">
                        <label for="tahap">Tahap Rilis Versi</label>
                        <select name="tahap_versi" id="tahap" class="@error('tahap_versi') invalid @enderror" required>
                            <option selected>Pilih tahap...</option>
                            <option value="beta">Beta</option>
                            <option value="rc">Release Candidate</option>
                            <option value="release">Release</option>
                        </select>
                    </div>
                </div>
                <!-- Button Submit -->
                <div class="flex-column flex-m-row x-m-reverse mt-1">
                    <button type="submit" class="box-l-3 button-primary mb-1">Simpan</button>
                    <a href="{{ route('versi') }}" class="box-l-3 button mb-1">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection