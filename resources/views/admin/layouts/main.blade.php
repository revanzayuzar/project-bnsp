<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Bootstrap 5.3 CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- Stack CSS --}}
    @stack('css')

    {{-- Style for DataTables --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bg-image-main.css') }}">

    <title>

        @yield('title')

    </title>
</head>

<body>
    {{-- Container --}}
    <div class="d-flex">
        {{-- Sidebar Container --}}
        <div class="sidebar col-9 col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex flex-column bg-success text-light p-3 overflow-y-auto position-absolute top-0 bottom-0"
            style="height: 100vh; left: 0;">
            <a href="{{ route('admin.dashboard.index') }}" class="text-decoration-none">
                <h1 class="text-warning fw-bold text-center mt-3 mb-5" style="font-size: 100px">
                    P
                </h1>
            </a>
            <ul class="nav nav-pills flex-column mb-auto">

                {{-- Sidebar --}}
                @yield('sidebar')
                {{-- Sidebar End --}}

            </ul>
        </div>
        {{-- Sidebar Container End --}}

        {{-- Main Container --}}
        <div class="bg-image-main col-12 col-lg-9 col-xl-10 bg-light overflow-y-auto position-absolute top-0 bottom-0" style="right: 0;">
            {{-- Main Header --}}
            <nav class="col-12 col-lg-9 col-xl-10 bg-warning d-flex justify-content-between align-items-center shadow-sm px-4 py-3 position-fixed top-0"
                style="right: 0; z-index: 99">
                <div class="d-flex align-items-center">
                    <i class="sidebar-button bi bi-list text-success fs-3" id="sidebarButton"></i>
                    <a href="{{ route('admin.dashboard.index') }}" class="text-decoration-none">
                        <h1 class="text-success fs-5 fw-semibold text-center mb-0" style="margin-left: 10px">
                            PEGAWAI
                        </h1>
                    </a>
                </div>

                <div class="dropdown">
                    <img src="{{ asset('img/profile.jpg') }}" alt="Profile" title="Profile" id="profileDropdown"
                        data-bs-toggle="dropdown" data-bs-auto-close="outside" class="rounded-circle"
                        style="width: 40px">
                    <ul class="dropdown-menu dropdown-menu-end bg-success mt-4 px-5 border-warning border-5" aria-labelledby="profileDropdown"
                        style="width: max-content; border-radius: 20px">
                        <img src="{{ asset('img/profile.jpg') }}" alt="Profile" title="Profile"
                            class="rounded-circle d-block mx-auto my-3" style="width: 75px">
                        <h1 class="text-light fs-5 fw-semibold text-center">{{ Auth::user()->name }}</h1>
                        <small class="d-block text-light text-center my-4 py-1 border-top border-bottom">
                            Admin
                        </small>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger d-block mx-auto mb-3 py-2">
                                <span>Logout</span>
                                <i class="bi bi-caret-right"></i>
                            </button>
                        </form>
                    </ul>
                </div>
            </nav>
            {{-- Main Header End --}}

            {{-- Content Container --}}
            <div class="content pb-5" style="margin-top: 125px">

                {{-- Content --}}
                @yield('content')
                {{-- Content End --}}

            </div>
            {{-- Content Container End --}}

            <footer class="col-12 col-lg-9 col-xl-10 bg-light position-fixed bottom-0 text-center py-1">
                <small>Design by Revan | © 2024</small>
            </footer>
        </div>
        {{-- Main Container End --}}

        {{-- Background Dark --}}
        <div class="background-dark"></div>
        {{-- Background Dark End --}}
    </div>
    {{-- Container End --}}

    {{-- Bootstrap 5.3 JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- jQuery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    {{-- Stack JS --}}
    @stack('js')

    {{-- Script for DataTables --}}
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>

    {{-- Custom JS --}}
    <script src="{{ asset('js/sidebar.js') }}"></script>
</body>

</html>
