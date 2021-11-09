@extends('dashboard.index', ['title' => 'Tambah Konten'])

@section('content')
    <div class="tab-content">
        <div class="content">
            <div class="flex-column flex-m-row items-center mb-2">
                <h4 class="m-0">Tambah Konten Baru</h4>
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

            <form method="POST" action="{{ route('konten.store') }}">
            @csrf
                <div class="flex-column flex-m-row">
                    <!-- Versi -->
                    <div class="box-12 mt-0 form-input">
                        <label>Pilih Versi</label>
                        <br>
                        <div class="d-flex">
                        @php $no = 1; @endphp
                        @forelse ($versions as $version)
                            <div>
                            <input id="ver-{{ $no }}" type="checkbox" name="versi[]" style="display: none;" value="{{$version->id}}">
                            <label for="ver-{{ $no++ }}" class="badge">{{ "v.".$version->number." ".$version->stage }}</label>
                            </div>
                        @empty
                            <small>
                            Daftar versi dokumen tidak ditemukan. <a class="small" href="{{ route('versi.create') }}">+ Tambah Versi</a>
                            </small>
                        @endforelse
                        </div>
                    </div>
                </div>
                <div class="flex-column flex-m-row">
                    <!-- Judul Konten -->
                    <div class="box-m-6 mt-0 form-input">
                        <label for="judul">Judul Konten</label>
                        <input type="text" name="judul" id="judul" class="input @error('judul') invalid @enderror" required>
                    </div>
                    <!-- Nama File -->
                    <div class="box-m-6 mt-0 form-input">
                        <label for="file">Nama File Konten</label>
                        <input type="text" name="nama_file" id="file" class="input @error('nama file') invalid @enderror" placeholder="sample.mdx" required>
                    </div>
                </div>
                <div class="flex-column flex-m-row">
                    <!-- Kategori -->
                    <div class="box-m-6 mt-0 form-input">
                        <label for="kategori">Pilih Kategori</label>
                        <select name="kategori" id="kategori" required>
                            <option selected value>Pilih kategori...</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->category_idn}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="flex-column flex-m-row">
                    <!-- Label -->
                    <div class="box-12 mt-0 form-input">
                        <label>Pilih Label</label>
                        <br>
                        <div class="d-flex">
                        @php $no = 1; @endphp
                        @forelse ($tags as $tag)
                            <div>
                            <input id="tag-{{ $no }}" type="checkbox" name="label[]" style="display: none;" value="{{$tag->id}}">
                            <label for="tag-{{ $no++ }}" class="badge">{{$tag->name}}</label>
                            </div>
                        @empty
                            <small>
                            Daftar label tidak ditemukan. <a class="small" href="{{ route('label.create') }}">+ Tambah Label</a>
                            </small>
                        @endforelse
                        </div>
                    </div>
                </div>
                <!-- Button Submit -->
                <div class="flex-column flex-m-row x-m-reverse mt-1">
                    <button type="submit" class="box-l-3 button-primary mb-1">Simpan</button>
                    <a href="{{ route('konten') }}" class="box-l-3 button mb-1">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection