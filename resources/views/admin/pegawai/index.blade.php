@extends('admin.layouts.main')

@php
    $title = 'Pegawai';
@endphp

@section('title')
    Pegawai
@endsection

@section('sidebar')
    @include('admin.partials.sidebar')
@endsection

@section('content')
    <div class="col-11 bg-light mx-auto border border-success" style="border-radius: 10px">
        <h1 class="bg-success text-light fs-5 text-center mb-0 py-3"
            style="border-top-left-radius: 10px; border-top-right-radius: 10px">
            <i class="bi bi-people"></i>
            <span style="margin-left: 5px">DAFTAR PEGAWAI</span>
        </h1>

        {{-- Alert --}}
        @if (session('success'))
            <div class="alert alert-info alert-dismissible m-3 mb-0" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        {{-- Alert End --}}

        <a href="{{ route('admin.pegawai.create') }}" class="btn btn-success mx-3 mt-5 py-2">
            <i class="bi bi-plus-circle"></i>
            <span>Tambah Pegawai</span>
        </a>

        <div class="table-responsive p-3">
            <table class="table table-hover table-bordered w-100 my-3" id="table-pegawai">
                <thead>
                    <tr>
                        <th class="text-center text-nowrap bg-warning">ID</th>
                        <th class="text-center text-nowrap bg-warning">NAMA</th>
                        <th class="text-center text-nowrap bg-warning">NIK</th>
                        <th class="text-center text-nowrap bg-warning">JENIS KELAMIN</th>
                        <th class="text-center text-nowrap bg-warning">TEMPAT LAHIR</th>
                        <th class="text-center text-nowrap bg-warning">TANGGAL LAHIR</th>
                        <th class="text-center text-nowrap bg-warning">ALAMAT</th>
                        <th class="text-center text-nowrap bg-warning">EMAIL</th>
                        <th class="text-center text-nowrap bg-warning">NOMOR TELEPON</th>
                        <th class="text-center text-nowrap bg-warning">STATUS PEGAWAI</th>
                        <th class="text-center text-nowrap bg-warning">JABATAN</th>
                        <th class="text-center text-nowrap bg-warning">GAJI</th>
                        <th class="text-center text-nowrap bg-warning">PENDIDIKAN TERAKHIR</th>
                        <th class="text-center text-nowrap bg-warning">STATUS PERKAWINAN</th>
                        <th class="text-center text-nowrap bg-warning">JUMLAH ANAK</th>
                        <th class="text-center text-nowrap bg-warning">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pegawai as $pegawai)
                        <tr>
                            <td class="text-nowrap text-center">{{ $loop->iteration }}</td>
                            <td class="text-nowrap">{{ $pegawai->nama }}</td>
                            <td class="text-nowrap text-center">{{ $pegawai->nik }}</td>
                            <td class="text-nowrap">{{ $pegawai->jenis_kelamin }}</td>
                            <td class="text-nowrap">{{ $pegawai->tempat_lahir }}</td>
                            <td class="text-nowrap text-center">{{ $pegawai->tanggal_lahir }}</td>
                            <td class="text-nowrap">{{ $pegawai->alamat }}</td>
                            <td class="text-nowrap">{{ $pegawai->email }}</td>
                            <td class="text-nowrap text-center">{{ $pegawai->nomor_telepon }}</td>
                            <td class="text-nowrap">{{ $pegawai->status_pegawai }}</td>
                            <td class="text-nowrap">{{ $pegawai->jabatan }}</td>
                            <td class="text-nowrap text-end">Rp {{ $pegawai->gaji }} Juta</td>
                            <td class="text-nowrap">{{ $pegawai->pendidikan_terakhir }}</td>
                            <td class="text-nowrap">{{ $pegawai->status_perkawinan }}</td>
                            <td class="text-nowrap text-end">{{ $pegawai->jumlah_anak }} Orang</td>

                            <td class="d-flex justify-content-center">
                                <form action="{{ route('admin.pegawai.read', $pegawai->id) }}" method="GET">
                                    <button type="submit" class="btn btn-info fs-5 mx-1">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </form>
                                <form action="{{ route('admin.pegawai.edit', $pegawai->id) }}" method="GET">
                                    <button type="submit" class="btn btn-warning fs-5 mx-1">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                </form>
                                <form action="{{ route('admin.pegawai.destroy', $pegawai->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    {{-- <button type="submit" class="btn btn-danger fs-5 mx-1">
                                        <i class="bi bi-trash3"></i>
                                    </button> --}}

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger fs-5 mx-1" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        <i class="bi bi-trash3"></i>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content border-warning border-3">
                                                <div class="modal-header bg-warning text-dark border-bottom-0">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                        <i class="bi bi-trash3"></i>
                                                        HAPUS PEGAWAI
                                                    </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body text-center">
                                                    <i class="bi bi-exclamation-circle text-warning"
                                                        style="font-size: 50px"></i>
                                                    <p>Apakah Anda yakin ingin menghapus Pegawai?</p>
                                                </div>
                                                <div class="modal-footer border-top-0">
                                                    <button type="button" class="btn btn-success"
                                                        data-bs-dismiss="modal">Tidak</button>
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('css')
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
@endpush

@push('js')
    <script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table-pegawai').DataTable();
        });
    </script>
@endpush
