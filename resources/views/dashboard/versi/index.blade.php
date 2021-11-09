@extends('dashboard.index')

@section('content')
    <div class="tab-content">
        <div class="content">
            <div class="flex-column flex-m-row x-m-reverse justify-m-between items-center mb-2">
                <a href="{{ route('versi.create') }}" class="button-primary m-0 mb-2 mb-m-0">+ Tambah</a>
                <h4 class="m-0">Daftar Rilis Versi</h4>
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
            <table id="table" class="stripe mt-2">
                <thead>
                    <tr>
                        <th class="column-fit">No</th>
                        <th class="column-fit" style="width: 20%">Versi</th>
                        <th>Rilis</th>
                        <th class="icon-table">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach ( $version as $row )
                    <tr>
                        <td class="column-fit text-center">{{ $no++ }}</td>
                        <td class="text-center">v.{{ $row->number }}</td>
                        <td class="text-center"><span class="badge {{ $row->stage == 'release' ? '': 'bg-warning' }}">{{ $row->stage == 'rc' ? 'Release Candidate': ucfirst($row->stage) }}</span></td>
                        <td class="icon-table">
                            <a href="{{ route('versi.edit', $row->id) }}" class="button-dark" title="Sunting">
                                <i data-feather="edit-2"></i>
                            </a>
                            <form id="del{{$row->id}}" action="{{ route('versi.destroy', $row->id) }}" method="POST" class="d-m-inline-block" style="transform: translateY(1px)">
                            @csrf
                            @method('delete')
                                <button type="button" onclick="deleteAlert('{{ $row->id }}', 'versi', '{{ $row->number }}')" class="button-danger delete" title="Hapus">
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