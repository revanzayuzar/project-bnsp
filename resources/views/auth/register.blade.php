@extends('layouts.app')

@section('title')
    Register Admin
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-success border-2 shadow">
                <div class="card-header bg-success fs-5 text-light text-center">{{ __('Silahkan Register (Daftar)') }}</div>

                <div class="card-body py-4">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nama') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control border-success @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Masukkan Nama" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control border-success @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Masukkan Email" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control border-success @error('password') is-invalid @enderror" name="password" placeholder="Masukkan Password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Konfirmasi Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control border-success" name="password_confirmation" placeholder="Masukkan Password" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success col-8 d-block mx-auto mt-4 py-3">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>

                    <p class="col-md-6 offset-md-4 text-center mt-4 mb-0">
                        Sudah mempunyai akun? Silahkan
                        <a href="{{ route('login') }}" class="text-decoration-none">Login</a>
                    </p>
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="{{ route('index') }}" class="btn btn-primary px-5 py-2">
                    <i class="bi bi-caret-left"></i>
                    Kembali
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
