@extends('dashboard.index', ['title' => 'Sunting Label'])

@section('content')
    <div class="tab-content">
        <div class="content">
            <div class="flex-column flex-m-row items-center mb-2">
                <h4 class="m-0">Sunting Label</h4>
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

            <form method="POST" action="{{ route('label.update', $tag->id) }}">
            @csrf
            @method('PUT')
                <!-- Label ID -->
                <div class="form-input">
                    <label for="text_idn">Nama Label</label>
                    <input type="text" name="nama_label" id="text_idn" class="input @error('nama_label') invalid @enderror" value="{{ $tag->name }}" required>
                </div>
                <!-- Label ENG -->
                <div class="form-input">
                    <label for="text_eng">Nama Label Alternatif</label>
                    <input type="text" name="label_alternatif" id="text_eng" class="input @error('label_alternatif') invalid @enderror" value="{{ $tag->tag_alt }}">
                </div>
                <!-- Button Submit -->
                <div class="flex-column flex-m-row x-m-reverse mt-1">
                    <button type="submit" class="box-l-3 button-primary mb-1">Perbarui</button>
                    <a href="{{ route('label') }}" class="box-l-3 button mb-1">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection