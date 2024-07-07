@extends('admin.layouts.main')

@php
    $title = 'Pegawai';
@endphp

@section('title')
    Detail Pegawai
@endsection

@section('sidebar')
    @include('admin.partials.sidebar')
@endsection

@section('content')
    <div class="col-11 col-sm-9 col-xl-8 bg-light mx-auto border border-success" style="border-radius: 10px">
        <h1 class="bg-success text-light fs-5 text-center mb-0 py-3"
            style="border-top-left-radius: 10px; border-top-right-radius: 10px">
            <i class="bi bi-person-vcard"></i>
            <span style="margin-left: 5px">DETAIL PEGAWAI</span>
        </h1>

        <article class="col-11 mx-auto mt-5 mb-3">
            <img src="{{ asset('storage/' . $pegawai->foto) }}" alt="Foto Pegawai"
                class="d-block mx-auto mb-4 border border-success border-5" style="width: 200px; height: 200px; object-fit: cover">

            <p class="card-text"><span class="fw-semibold">Nama :</span> {{ $pegawai->nama }}</p>
            <p class="card-text"><span class="fw-semibold">NIK :</span> {{ $pegawai->nik }}</p>
            <p class="card-text"><span class="fw-semibold">Jenis Kelamin :</span> {{ $pegawai->jenis_kelamin }}</p>
            <p class="card-text"><span class="fw-semibold">Tempat Lahir :</span> {{ $pegawai->tempat_lahir }}</p>
            <p class="card-text"><span class="fw-semibold">Tanggal Lahir :</span> {{ $pegawai->tanggal_lahir }}</p>
            <p class="card-text"><span class="fw-semibold">Alamat :</span> {{ $pegawai->alamat }}</p>
            <p class="card-text"><span class="fw-semibold">Email :</span> {{ $pegawai->email }}</p>
            <p class="card-text"><span class="fw-semibold">Nomor Telepon :</span> {{ $pegawai->nomor_telepon }}</p>
            <p class="card-text"><span class="fw-semibold">Status Pegawai :</span> {{ $pegawai->status_pegawai }}</p>
            <p class="card-text"><span class="fw-semibold">Jabatan :</span> {{ $pegawai->jabatan }}</p>
            <p class="card-text"><span class="fw-semibold">Gaji :</span> Rp {{ $pegawai->gaji }} Juta</p>
            <p class="card-text"><span class="fw-semibold">Pendidikan Terakhir :</span> {{ $pegawai->pendidikan_terakhir }}
            </p>
            <p class="card-text"><span class="fw-semibold">Status Perkawinan :</span> {{ $pegawai->status_perkawinan }}</p>
            <p class="card-text"><span class="fw-semibold">Jumlah Anak :</span> {{ $pegawai->jumlah_anak }} Orang</p>

            <div class="text-center mt-5 mb-3 pt-3 border-top">
                <form action="{{ route('admin.pegawai.edit', $pegawai->id) }}" method="GET">
                    <button type="submit" class="btn btn-warning">
                        <i class="bi bi-pencil-square"></i>
                        <span>Edit Pegawai</span>
                    </button>
                </form>
            </div>

            <div class="text-center mb-5">
                <form action="{{ route('admin.pegawai.destroy', $pegawai->id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="bi bi-trash3"></i>
                        <span>Hapus Pegawai</span>
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
                                    <i class="bi bi-exclamation-circle text-warning" style="font-size: 50px"></i>
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
            </div>

            <div class="text-center">
                <a href="{{ route('admin.pegawai.index') }}" class="btn btn-success">
                    <i class="bi bi-caret-left"></i>
                    <span>Kembali</span>
                </a>
            </div>
        </article>
    </div>
@endsection
