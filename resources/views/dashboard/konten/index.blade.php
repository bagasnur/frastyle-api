@extends('dashboard.index')

@section('content')
    <div class="tab-content">
        <div class="content">
            <div class="flex-column flex-m-row x-m-reverse justify-m-between items-center mb-2">
                <a href="{{ route('konten.create') }}" class="button-primary m-0 mb-2 mb-m-0">+ Tambah</a>
                <h4 class="m-0">Daftar Konten</h4>
            </div>
            @if (Session::has('success'))
                <!-- Success Handling -->
                <div class="alert-success flex-row items-center mb-2">
                    <i class="icon-success" data-feather="check-circle"></i>
                    <div class="alert-desc text-left pl-1">
                        <span>{{ Session::get('success') }}</span>
                    </div>
                </div>
                <script>
                    $(document).ready(function () {
                        setTimeout(function(){
                            $('.alert-success').remove();
                        }, 5000);
                    });
                </script>
            @endif
            <table id="table" class="stripe">
                <thead>
                    <tr>
                        <th class="column-fit">No</th>
                        <th class="column-fit">Versi</th>
                        <th>Judul</th>
                        <th class="column-fit" style="width: 30%">Kategori</th>
                        <th class="icon-table">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach ( $content as $row )
                    <tr>
                        <td class="column-fit text-center">{{ $no++ }}</td>
                        <td class="column-fit text-center">
                        @foreach ( $row->version as $version )
                            <span class="badge {{ $version->stage == 'release' ? '': 'bg-warning' }}">v.{{ $version->number }}</span>
                        @endforeach
                        </td>
                        <td>{{ $row->title }}</td>
                        <td class="column-fit text-center">
                        <span class="badge {{ isset($row->category_id) ? '' : 'bg-light-2 black' }}">{{ isset($row->category_id) ? $row->category->category_idn : 'none' }}</span>
                        </td>
                        <td class="icon-table">
                            <a href="{{ route('konten.edit', $row->id) }}" class="button-dark" title="Sunting">
                                <i data-feather="edit-2"></i>
                            </a>
                            <form id="del{{$row->id}}" action="{{ route('konten.destroy', $row->id) }}" method="POST" class="d-m-inline-block" style="transform: translateY(1px)">
                            @csrf
                            @method('delete')
                                <button type="button" onclick="deleteAlert('{{ $row->id }}', 'konten', '{{ $row->title }}')" class="button-danger delete" title="Hapus">
                                    <i data-feather="trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection