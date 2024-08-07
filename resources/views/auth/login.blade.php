@extends('layouts.app')

@section('title')
    Login Admin
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-success border-2 shadow">
                <div class="card-header bg-success fs-5 text-light text-center">{{ __('Silahkan Login (Masuk)') }}</div>

                <div class="card-body py-4">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control border-success @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Masukkan Email" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control border-success @error('password') is-invalid @enderror" name="password" placeholder="Masukkan Password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input border-success" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Ingat Saya') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success col-8 d-block mx-auto mt-4 py-3">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>

                    <p class="col-md-6 offset-md-4 text-center mt-4 mb-0">
                        Belum mempunyai akun? Silahkan
                        <a href="{{ route('register') }}" class="text-decoration-none">Register</a>
                    </p>
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="{{ route('index') }}" class="btn btn-primary py-2">
                    <i class="bi bi-caret-left"></i>
                    Kembali
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
