@extends('index', ['title' => isset($title) ? $title : 'Dashboard'])

@section('main')
    {{-- Navbar --}}
    <x-navbar>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                style="display: none;">
                @csrf
            </form>
            <i class="icon-danger mr-1" data-feather="log-out"></i>Logout
        </a>
    </x-navbar>

    {{-- Content --}}
    <div class='dashboard'>
        <div class='container'>
            <div class="card row flex-column flex-m-row items-center bg-primary white shadow p-2 px-m-3">
                <img class="box-1 bg-white mx-0" height="64px" width="64px" src="{{ Auth::user()->img_profile }}" alt="{{ "Image profile @".Auth::user()->name }}">
                <div class="box-10 text-center text-m-left mx-0 ml-m-3">
                    <span>Selamat datang,</span>
                    <h4 class="m-0">{{ "@".Auth::user()->name }}</h4>
                </div>
            </div>
            <div class="row my-3">
                <div class="tab-box card p-0 shadow">
                    <div class="tab-nav">
                        <a class="{{ Request::is('dashboard/konten*') ? 'active' : '' }}" href="{{ route('konten') }}">
                            Konten Dokumen
                        </a>
                        <a class="{{ Request::is('dashboard/versi*') ? 'active' : '' }}" href="{{ route('versi') }}">
                            Versi Dokumen
                        </a>
                        <a class="{{ Request::is('dashboard/kategori*') ? 'active' : '' }}" href="{{ route('kategori') }}">
                            Kategori Konten
                        </a>
                        <a class="{{ Request::is('dashboard/label*') ? 'active' : '' }}" href="{{ route('label') }}">
                            Label Konten
                        </a>
                    </div>

                    {{-- Content --}}
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready( function () {
            $('.stripe').dataTable({
                aLengthMenu: [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"]],
                bProcessing: true,
                language: {
                    "lengthMenu": "Tampilkan: _MENU_",
                    "search": "Pencarian:",
                    "emptyTable": "Data tidak ada. 🙁",
                    "zeroRecords": "Data tidak ditemukan. 🙁",
                    "info": "Total _TOTAL_ data.",
                    "infoEmpty": "Tidak ditemukan data",
                    "infoFiltered": "",
                    "paginate": {
                        "next": ">",
                        "previous": "<",
                    },
                },
            });
        });

        // Popup Delete
        function deleteAlert( id, tab, message ) {
            Swal.fire({
                title: "Hapus "+tab,
                text: "Ingin menghapus "+tab+" \"" + message + "\"?",
                icon: 'warning',
                showCancelButton: true,
                cancelButtonText: 'Kembali',
                confirmButtonText: 'Hapus',
                focusConfirm: false,
                reverseButtons: true,
                customClass: {
                    title: 'sweet-title',
                    icon: 'sweet-icon',
                    htmlContainer: 'sweet-content',
                    confirmButton: 'button-sweet-danger',
                    cancelButton: 'button-sweet',
                }
            }).then((result) => {
                if (result.value) {
                    document.getElementById('del'+id).submit();
                }
            });
        };
    </script>
@endsection