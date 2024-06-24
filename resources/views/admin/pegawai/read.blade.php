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
    <div class="col-11 col-sm-9 col-xl-8 mx-auto border border-success" style="border-radius: 10px">
        <h1 class="bg-success text-light fs-5 text-center mb-0 py-3"
            style="border-top-left-radius: 10px; border-top-right-radius: 10px">
            <i class="bi bi-person-vcard"></i>
            <span style="margin-left: 5px">DETAIL PEGAWAI</span>
        </h1>

        <article class="col-11 mx-auto mt-5 mb-3">
            {{-- <img src="{{ asset('storage/' . $berita->gambar) }}" alt="Gambar" class="my-3"
                style="width: 100%; height: 300px; object-fit: cover"> --}}

            <img src="{{ asset('img/profile.jpg') }}" alt="Foto Profil" class="d-block mx-auto mb-4" style="width: 200px">

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
            <p class="card-text"><span class="fw-semibold">Pendidikan Terakhir :</span> {{ $pegawai->pendidikan_terakhir }}</p>
            <p class="card-text"><span class="fw-semibold">Status Perkawinan :</span> {{ $pegawai->status_perkawinan }}</p>
            <p class="card-text"><span class="fw-semibold">Jumlah Anak :</span> {{ $pegawai->jumlah_anak }} Orang</p>


            <div class="text-center mt-5">
                <a href="{{ route('admin.pegawai.index') }}" class="btn btn-warning">
                    <i class="bi bi-caret-left"></i>
                    <span>Kembali</span>
                </a>
            </div>
        </article>
    </div>
@endsection
