@extends('admin.layouts.main')

@php
    $title = 'Pegawai';
@endphp

@section('title')
    Tambah Pegawai
@endsection

@section('sidebar')
    @include('admin.partials.sidebar')
@endsection

@section('content')
    <div class="col-11 col-xl-9 bg-success-subtle mx-auto border border-success" style="border-radius: 10px">
        <h1 class="bg-success text-light fs-5 text-center mb-0 py-3"
            style="border-top-left-radius: 10px; border-top-right-radius: 10px">
            <i class="bi bi-plus-circle"></i>
            <span style="margin-left: 5px">TAMBAH PEGAWAI</span>
        </h1>

        @error('nik')
            <div class="alert alert-danger alert-dismissible m-3 mb-0" role="alert">
                NIK yang Anda masukkan telah digunakan!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @enderror

        @error('email')
            <div class="alert alert-danger alert-dismissible m-3 mb-0" role="alert">
                Email yang Anda masukkan telah digunakan!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @enderror

        @error('nomor_telepon')
            <div class="alert alert-danger alert-dismissible m-3 mb-0" role="alert">
                Nomor Telepon yang Anda masukkan telah digunakan!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @enderror

        <a href="{{ route('admin.pegawai.index') }}" class="btn btn-warning mx-3 mt-5 py-2">
            <i class="bi bi-caret-left"></i>
            <span>Kembali</span>
        </a>

        <form action="{{ route('admin.pegawai.store') }}" method="POST" class="p-3 px-sm-5" enctype="multipart/form-data">
            @csrf
            {{-- <div class="mx-0 mx-md-5 mx-lg-0 mx-xl-5 mb-4">
                <label for="foto" class="form-label fw-semibold">Pilih Foto Pegawai</label>
                <input type="file" class="form-control p-2 border-success" id="foto" name="foto"
                    value="{{ old('foto') }}" placeholder="Pilih Foto Pegawai" required
                    oninvalid="this.setCustomValidity('Harap Pilih Foto Pegawai!')" oninput="setCustomValidity('')">
            </div> --}}

            <div class="mx-0 mx-md-5 mx-lg-0 mx-xl-5 mb-4">
                <label for="nama" class="form-label fw-semibold">Nama</label>
                <input type="text" class="form-control p-2 border-success" id="nama" name="nama"
                    value="{{ old('nama') }}" placeholder="Masukkan Nama" required
                    oninvalid="this.setCustomValidity('Harap Masukkan Nama!')" oninput="setCustomValidity('')">
            </div>

            <div class="mx-0 mx-md-5 mx-lg-0 mx-xl-5 mb-4">
                <label for="nik" class="form-label fw-semibold">NIK (16 angka)</label>
                <input type="text"
                    class="form-control p-2 border-success @error('nik') is-invalid border-danger @enderror" id="nik"
                    name="nik" value="{{ old('nik') }}" minlength="16" maxlength="16" placeholder="Masukkan NIK"
                    required oninvalid="this.setCustomValidity('Harap Masukkan NIK!')" oninput="setCustomValidity('')">
                @error('nik')
                    <div class="text-danger">NIK yang Anda masukkan telah digunakan. Harap masukkan NIK lain!</div>
                @enderror
            </div>

            <div class="mx-0 mx-md-5 mx-lg-0 mx-xl-5 mb-4">
                <label for="jenis_kelamin" class="form-label fw-semibold">Jenis Kelamin</label>
                <select class="form-select p-2 border-success" id="jenis_kelamin" name="jenis_kelamin" required
                    oninvalid="this.setCustomValidity('Harap Pilih Jenis Kelamin!')" oninput="setCustomValidity('')">>
                    <option value="" selected disabled hidden>Pilih Jenis Kelamin</option>
                    <option value="Laki-Laki" {{ old('jenis_kelamin') == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                    <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>

            <div class="mx-0 mx-md-5 mx-lg-0 mx-xl-5 mb-4">
                <label for="tempat_lahir" class="form-label fw-semibold">Tempat Lahir</label>
                <input type="text" class="form-control p-2 border-success" id="tempat_lahir" name="tempat_lahir"
                    value="{{ old('tempat_lahir') }}" placeholder="Masukkan Tempat Lahir" required
                    oninvalid="this.setCustomValidity('Harap Masukkan Tempat Lahir!')" oninput="setCustomValidity('')">
            </div>

            <div class="mx-0 mx-md-5 mx-lg-0 mx-xl-5 mb-4">
                <label for="tanggal_lahir" class="form-label fw-semibold">Tanggal Lahir</label>
                <input type="date" class="form-control p-2 border-success" id="tanggal_lahir" name="tanggal_lahir"
                    value="{{ old('tanggal_lahir') }}" placeholder="Masukkan Tanggal Lahir" required
                    oninvalid="this.setCustomValidity('Harap Masukkan Tanggal Lahir!')" oninput="setCustomValidity('')">
            </div>

            <div class="mx-0 mx-md-5 mx-lg-0 mx-xl-5 mb-4">
                <label for="alamat" class="form-label fw-semibold">Alamat</label>
                <input type="text" class="form-control p-2 border-success" id="alamat" name="alamat"
                    value="{{ old('alamat') }}" placeholder="Masukkan Alamat" required
                    oninvalid="this.setCustomValidity('Harap Masukkan Alamat!')" oninput="setCustomValidity('')">
            </div>

            <div class="mx-0 mx-md-5 mx-lg-0 mx-xl-5 mb-4">
                <label for="email" class="form-label fw-semibold">Email</label>
                <input type="email"
                    class="form-control p-2 border-success @error('email') is-invalid border-danger @enderror"
                    id="email" name="email" value="{{ old('email') }}" placeholder="Masukkan Email" required
                    oninvalid="this.setCustomValidity('Harap Masukkan Email!')" oninput="setCustomValidity('')">
                @error('email')
                    <div class="text-danger">Email yang Anda masukkan telah digunakan. Harap masukkan Email lain!</div>
                @enderror
            </div>

            <div class="mx-0 mx-md-5 mx-lg-0 mx-xl-5 mb-4">
                <label for="nomor_telepon" class="form-label fw-semibold">Nomor Telepon (12 - 15 angka)</label>
                <input type="text"
                    class="form-control p-2 border-success @error('email') is-invalid border-danger @enderror"
                    id="nomor_telepon" name="nomor_telepon" value="{{ old('nomor_telepon') }}" minlength="12"
                    maxlength="15" placeholder="Masukkan Nomor Telepon" required
                    oninvalid="this.setCustomValidity('Harap Masukkan Nomor Telepon!')" oninput="setCustomValidity('')">
                @error('email')
                    <div class="text-danger">Nomor Telepon yang Anda masukkan telah digunakan. Harap masukkan Nomor Telepon
                        lain!
                    </div>
                @enderror
            </div>

            <div class="mx-0 mx-md-5 mx-lg-0 mx-xl-5 mb-4">
                <label for="status_pegawai" class="form-label fw-semibold">Status Pegawai</label>
                <select class="form-select p-2 border-success" id="status_pegawai" name="status_pegawai" required
                    oninvalid="this.setCustomValidity('Harap Pilih Status Pegawai!')" oninput="setCustomValidity('')">>
                    <option value="" selected disabled hidden>Pilih Status Pegawai</option>
                    <option value="Tetap" {{ old('status_pegawai') == 'Tetap' ? 'selected' : '' }}>Tetap</option>
                    <option value="Kontrak" {{ old('status_pegawai') == 'Kontrak' ? 'selected' : '' }}>Kontrak</option>
                    <option value="Magang" {{ old('status_pegawai') == 'Magang' ? 'selected' : '' }}>Magang</option>
                </select>
            </div>

            <div class="mx-0 mx-md-5 mx-lg-0 mx-xl-5 mb-4">
                <label for="jabatan" class="form-label fw-semibold">Jabatan</label>
                <input type="text" class="form-control p-2 border-success" id="jabatan" name="jabatan"
                    value="{{ old('jabatan') }}" placeholder="Masukkan Jabatan" required
                    oninvalid="this.setCustomValidity('Harap Masukkan Jabatan!')" oninput="setCustomValidity('')">
            </div>

            <div class="mx-0 mx-md-5 mx-lg-0 mx-xl-5 mb-4">
                <label for="gaji" class="form-label fw-semibold">Gaji (0 - 100 Juta)</label>
                <input type="number" class="form-control p-2 border-success" id="gaji" name="gaji"
                    value="{{ old('gaji') }}" min="0" max="100" step="0.01"
                    placeholder="Masukkan Gaji" required oninvalid="this.setCustomValidity('Harap Masukkan Gaji!')"
                    oninput="setCustomValidity('')">
            </div>

            <div class="mx-0 mx-md-5 mx-lg-0 mx-xl-5 mb-4">
                <label for="pendidikan_terakhir" class="form-label fw-semibold">Pendidikan Terakhir</label>
                <input type="text" class="form-control p-2 border-success" id="pendidikan_terakhir"
                    name="pendidikan_terakhir" value="{{ old('pendidikan_terakhir') }}"
                    placeholder="Masukkan Pendidikan Terakhir" required
                    oninvalid="this.setCustomValidity('Harap Masukkan Pendidikan Terakhir!')"
                    oninput="setCustomValidity('')">
            </div>

            <div class="mx-0 mx-md-5 mx-lg-0 mx-xl-5 mb-4">
                <label for="status_perkawinan" class="form-label fw-semibold">Status Perkawinan</label>
                <input type="text" class="form-control p-2 border-success" id="status_perkawinan"
                    name="status_perkawinan" value="{{ old('status_perkawinan') }}"
                    placeholder="Masukkan Status Perkawinan" required
                    oninvalid="this.setCustomValidity('Harap Masukkan Status Perkawinan!')"
                    oninput="setCustomValidity('')">
            </div>

            <div class="mx-0 mx-md-5 mx-lg-0 mx-xl-5 mb-4">
                <label for="jumlah_anak" class="form-label fw-semibold">Jumlah Anak (0 - 20 orang)</label>
                <input type="number" class="form-control p-2 border-success" id="jumlah_anak" name="jumlah_anak"
                    value="{{ old('jumlah_anak') }}" min="0" max="20" placeholder="Masukkan Jumlah Anak"
                    required oninvalid="this.setCustomValidity('Harap Masukkan Jumlah Anak!')"
                    oninput="setCustomValidity('')">
            </div>

            <button type="submit" class="btn btn-success d-block mx-auto mt-5 px-5 py-2">
                <i class="bi bi-plus-circle"></i>
                Tambah
            </button>
        </form>
    </div>
@endsection
