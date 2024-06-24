@extends('admin.layouts.main')

@php
    $title = 'Dashboard';
@endphp

@section('title')
    Dashboard
@endsection

@section('sidebar')
    @include('admin.partials.sidebar')
@endsection

@section('content')
    <div class="col-11 text-center mx-auto mb-5">
        <h1 class="fs-4 fw-bold">
            <span>SELAMAT DATANG ADMIN</span> <br>
            <span class="text-success">{{ Auth::user()->name }}</span> !
        </h1>
        <p class="fw-semibold mt-3">Berikut beberapa informasi mengenai data Pegawai.</p>
    </div>

    <div class="d-flex flex-wrap flex-column align-items-center flex-md-row justify-content-md-evenly align-items-md-start">
        <div class="card col-9 col-sm-7 col-md-5 d-flex mb-5 border-success shadow-sm">
            <div class="d-flex justify-content-center align-items-center bg-success"
                style="border-top-left-radius: 5px; border-top-right-radius: 5px">
                <i class="bi bi-people" style="font-size: 75px"></i>
            </div>
            <div class="card-body">
                <p class="text-center fw-semibold">Total Pegawai : {{ $totalPegawai }} Orang</p>
            </div>
        </div>

        <div class="card col-9 col-sm-7 col-md-5 d-flex mb-5 border-success shadow-sm">
            <div class="d-flex justify-content-center align-items-center bg-success"
                style="border-top-left-radius: 5px; border-top-right-radius: 5px">
                <i class="bi bi-people" style="font-size: 75px"></i>
            </div>
            <div class="card-body">
                <p class="text-center fw-semibold">Pegawai Laki-Laki : {{ $totalPegawaiLakiLaki }} Orang</p>
            </div>
        </div>

        <div class="card col-9 col-sm-7 col-md-5 d-flex mb-5 border-success shadow-sm">
            <div class="d-flex justify-content-center align-items-center bg-success"
                style="border-top-left-radius: 5px; border-top-right-radius: 5px">
                <i class="bi bi-people" style="font-size: 75px"></i>
            </div>
            <div class="card-body">
                <p class="text-center fw-semibold">Pegawai Perempuan : {{ $totalPegawaiPerempuan }} Orang</p>
            </div>
        </div>

        <div class="card col-9 col-sm-7 col-md-5 d-flex mb-5 border-success shadow-sm">
            <div class="d-flex justify-content-center align-items-center bg-success"
                style="border-top-left-radius: 5px; border-top-right-radius: 5px">
                <i class="bi bi-people" style="font-size: 75px"></i>
            </div>
            <div class="card-body">
                <p class="text-center fw-semibold">Pegawai Tetap : {{ $totalPegawaiTetap }} Orang</p>
            </div>
        </div>

        <div class="card col-9 col-sm-7 col-md-5 d-flex mb-5 border-success shadow-sm">
            <div class="d-flex justify-content-center align-items-center bg-success"
                style="border-top-left-radius: 5px; border-top-right-radius: 5px">
                <i class="bi bi-people" style="font-size: 75px"></i>
            </div>
            <div class="card-body">
                <p class="text-center fw-semibold">Pegawai Kontrak : {{ $totalPegawaiKontrak }} Orang</p>
            </div>
        </div>

        <div class="card col-9 col-sm-7 col-md-5 d-flex mb-5 border-success shadow-sm">
            <div class="d-flex justify-content-center align-items-center bg-success"
                style="border-top-left-radius: 5px; border-top-right-radius: 5px">
                <i class="bi bi-people" style="font-size: 75px"></i>
            </div>
            <div class="card-body">
                <p class="text-center fw-semibold">Pegawai Magang : {{ $totalPegawaiMagang }} Orang</p>
            </div>
        </div>
    </div>
@endsection
