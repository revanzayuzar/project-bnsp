@extends('admin.layouts.main')

@php
    $title = 'Profil';
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
            <i class="bi bi-person-circle"></i>
            <span style="margin-left: 5px">PROFIL ADMIN</span>
        </h1>

        <article class="col-11 mx-auto mt-5 mb-3">
            <img src="{{ asset('img/profile.jpg') }}" alt="Foto Profil" class="d-block mx-auto mb-4" style="width: 150px">

            <p class="card-text fs-5 text-center"><span class="fw-semibold">Nama : </span>{{ Auth::user()->name }}</p>
            <p class="card-text fs-5 text-center"><span class="fw-semibold">Email : </span>{{ Auth::user()->email }}</p>
        </article>
    </div>
@endsection
