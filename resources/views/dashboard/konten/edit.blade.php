@extends('dashboard.index', ['title' => 'Sunting Konten'])

@section('content')
    <div class="tab-content">
        <div class="content">
            <div class="flex-column flex-m-row items-center mb-2">
                <h4 class="m-0">Sunting Konten</h4>
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

            <form method="POST" action="{{ route('konten.update', $content->id) }}">
            @csrf
            @method('PUT')
                <div class="flex-column flex-m-row">
                    <!-- Versi -->
                    <div class="box-12 mt-0 form-input">
                        <label>Pilih Versi</label>
                        <br>
                        <div class="d-flex">
                        @php $no = 1; @endphp
                        @forelse ($versions as $row)
                            <div>
                            <input id="ver-{{ $no }}" type="checkbox" name="versi[]" style="display: none;" value="{{$row->id}}"
                            @foreach ($content->version as $list) {
                                 @if ($list->id == $row->id)
                                    checked
                                @endif
                            }
                            @endforeach
                            >
                            <label for="ver-{{ $no++ }}" class="badge">{{ $row->number.".x-".$row->stage }}</label>
                            </div>
                        @empty
                            <small>
                            Daftar versi tidak ditemukan. <a class="small" href="{{ route('versi.create') }}">+ Tambah Versi</a>
                            </small>
                        @endforelse
                        </div>
                    </div>
                </div>
                <div class="flex-column flex-m-row">
                    <!-- Judul Konten -->
                    <div class="box-m-6 mt-0 form-input">
                        <label for="judul">Judul Konten</label>
                        <input type="text" name="judul" id="judul" class="input @error('judul') invalid @enderror" value="{{$content->title}}" required>
                    </div>
                    <!-- Nama File -->
                    <div class="box-m-6 mt-0 form-input">
                        <label for="file">Nama File Konten</label>
                        <input type="text" name="nama_file" id="file" class="input @error('nama_file') invalid @enderror" placeholder="sample.mdx" value="{{$content->content_file}}" required>
                    </div>
                </div>
                <div class="flex-column flex-m-row">
                    <!-- Kategori -->
                    <div class="box-m-6 mt-0 form-input">
                        <label for="kategori">Pilih Kategori</label>
                        <select name="kategori" id="kategori" class="input @error('nama_file') invalid @enderror" required>
                            <option>Pilih kategori...</option>
                            @foreach ($categories as $row)
                            <option value="{{$row->id}}" @if (isset($content->category->id) && $content->category->id == $row->id)
                                selected
                            @endif>{{$row->category_idn}}</option>
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
                        @forelse ($tags as $row)
                            <div>
                            <input id="tag-{{ $no }}" type="checkbox" name="label[]" style="display: none;" value="{{$row->id}}" @foreach ($content->tag as $list) {
                                 @if ($list->id == $row->id)
                                    checked
                                @endif
                            }
                            @endforeach
                            >
                            <label for="tag-{{ $no++ }}" class="badge">{{$row->name}}</label>
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
                    <button type="submit" class="box-l-3 button-primary mb-1">Perbarui</button>
                    <a href="{{ route('konten') }}" class="box-l-3 button mb-1">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection