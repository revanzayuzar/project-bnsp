<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Bootstrap 5.3 CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- Custom CSS --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/bg-image-login.css') }}">

    <title>

        Selamat Datang

    </title>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh">
        <div class="col-10 col-sm-8 col-md-6 col-lg-4 px-3 py-5 px-sm-5" style="border-radius: 10px">
            <h1 class="fs-3 text-center mb-0">Selamat Datang</h1>

            <h1 class="fw-bold text-center my-5" style="transform: rotate(350deg)">
                ADMIN <br> PEGAWAI
            </h1>

            <div class="text-center">
                <a href="{{ route('login') }}" class="btn btn-primary px-5 py-2">
                    <i class="bi bi-door-open"></i>
                    Login
                </a>
            </div>
        </div>
    </div>

    {{-- Bootstrap 5.3 JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
