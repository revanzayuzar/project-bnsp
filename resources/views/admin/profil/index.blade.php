@extends('admin.layouts.main')

@php
    $title = 'Profil';
@endphp

@section('title')
    Profil Admin
@endsection

@section('sidebar')
    @include('admin.partials.sidebar')
@endsection

@section('content')
    <div class="col-11 col-sm-9 col-xl-8 bg-light mx-auto border border-success" style="border-radius: 10px">
        <h1 class="bg-success text-light fs-5 text-center mb-0 py-3"
            style="border-top-left-radius: 10px; border-top-right-radius: 10px">
            <i class="bi bi-person-circle"></i>
            <span style="margin-left: 5px">PROFIL ADMIN</span>
        </h1>

        <article class="col-11 mx-auto my-5">
            <img src="{{ asset('img/profile.jpg') }}" alt="Foto Profil"
                class="d-block mx-auto mb-4 border border-success border-5 rounded-circle" style="width: 150px">

            <p class="card-text text-center mb-2"><span class="fw-semibold">Nama : </span>{{ Auth::user()->name }}</p>
            <p class="card-text text-center mb-4"><span class="fw-semibold">Email : </span>{{ Auth::user()->email }}</p>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger d-block mx-auto px-3 py-2">
                    <span>Logout</span>
                </button>
            </form>
        </article>
    </div>
@endsection
