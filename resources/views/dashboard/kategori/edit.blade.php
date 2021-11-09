@extends('dashboard.index', ['title' => 'Sunting Kategori'])

@section('content')
    <div class="tab-content">
        <div class="content">
            <div class="flex-column flex-m-row items-center mb-2">
                <h4 class="m-0">Sunting Kategori</h4>
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

            <form method="POST" action="{{ route('kategori.update', $category->id) }}">
            @csrf
            @method('PUT')
                <!-- Kategori ID -->
                <div class="form-input">
                    <label for="text_idn">Nama Kategori (Indonesia)</label>
                    <input type="text" name="kategori_indonesia" id="text_idn" class="input @error('kategori_indonesia') invalid @enderror" value="{{ $category->category_idn }}" required>
                </div>
                <!-- Kategori ENG -->
                <div class="form-input">
                    <label for="text_eng">Nama Kategori (English)</label>
                    <input type="text" name="kategori_english" id="text_eng" class="input @error('kategori_english') invalid @enderror" value="{{ $category->category_eng }}" required>
                </div>
                <!-- Button Submit -->
                <div class="flex-column flex-m-row x-m-reverse mt-1">
                    <button type="submit" class="box-l-3 button-primary mb-1">Perbarui</button>
                    <a href="{{ route('kategori') }}" class="box-l-3 button mb-1">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection