<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <link rel="shortcut icon" href="{{ asset('build/assets/images/favicon.png') }}">
    {{-- <link rel="shortcut icon" href="build/assets/images/favicon.png" type=""> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title> Kedai Kopi Family </title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" href="{{ asset('build/assets/css/bootstrap.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="build/assets/css/bootstrap.css" /> --}}

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- nice select  -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
        integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ=="
        crossorigin="anonymous" />
    <!-- font awesome style -->
    <link rel="stylesheet" href="{{ asset('build/assets/css/font-awesome.min.css') }}">
    {{-- <link href="build/assets/font-awesome.min.css" rel="stylesheet" /> --}}

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('build/assets/css/style.css') }}">
    {{-- <link href="build/assets/css/style.css" rel="stylesheet" /> --}}

    <!-- responsive style -->
    <link rel="stylesheet" href="{{ asset('build/assets/css/responsive.css') }}">
    {{-- <link href="build/assets/css/responsive.css" rel="stylesheet" /> --}}

    <!-- Styles untuk Modal -->
    <style>
        /* Style khusus untuk modal logout */
        .modal {
            z-index: 1050;
            /* Pastikan modal berada di atas elemen lain */
        }

        .modal-header {
            background-color: #1A2130;
            color: white;
            /* Warna teks */
            border-bottom: 2px solid #1A2130;
            /* Garis bawah header */
        }

        .modal-footer {
            border-top: none;
            /* Hilangkan garis atas footer */
        }

        .btn-primary {
            background-color: #1A2130;
            border-color: #BCCCDC;
        }

        .btn-primary:hover {
            background-color: #BCCCDC;
            /* Warna hover */
        }

        .btn-secondary:hover {
            background-color: #6c757d;
            /* Warna hover untuk batal */
        }

        .modal-body {
            font-size: 1.1rem;
            /* Perbesar teks */
            text-align: center;
            /* Tengahkan teks */
            padding: 2rem;
            /* Ruang di sekitar teks */
        }

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;900&display=swap');

        *,
        body {
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
            -webkit-font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
            -moz-osx-font-smoothing: grayscale;
        }

        html,
        body {
            height: 100%;
            background-color: #152733;
            overflow: hidden;
        }


        .form-holder {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            min-height: 100vh;
        }

        .form-holder .form-content {
            position: relative;
            text-align: center;
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-align-items: center;
            align-items: center;
            padding: 60px;
        }

        .form-content .form-items {
            border: 3px solid #fff;
            padding: 40px;
            display: inline-block;
            width: 100%;
            min-width: 540px;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            text-align: left;
            -webkit-transition: all 0.4s ease;
            transition: all 0.4s ease;
        }

        .form-content h3 {
            color: #fff;
            text-align: left;
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .form-content h3.form-title {
            margin-bottom: 30px;
        }

        .form-content p {
            color: #fff;
            text-align: left;
            font-size: 17px;
            font-weight: 300;
            line-height: 20px;
            margin-bottom: 30px;
        }


        .form-content label,
        .was-validated .form-check-input:invalid~.form-check-label,
        .was-validated .form-check-input:valid~.form-check-label {
            color: #fff;
        }

        .form-content input[type=text],
        .form-content select {
            width: 100%;
            padding: 9px 20px;
            text-align: left;
            border: 0;
            outline: 0;
            border-radius: 6px;
            background-color: #fff;
            font-size: 15px;
            font-weight: 300;
            color: #8D8D8D;
            -webkit-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }

        .form-control[type="file"] {
            position: relative;
            overflow: hidden;
            width: 100%;
            height: 40px;
            cursor: pointer;
        }

        .form-control[type="file"]::before {
            content: 'Upload';
            display: inline-block;
            background: #8D8D8D;
            color: white;
            border-radius: 5px;
            padding: 4px 10px;
            outline: none;
            white-space: nowrap;
            -webkit-user-select: none;
            cursor: pointer;
            text-align: center;
            font-size: 14px;
        }

        .form-control[type="file"]::-webkit-file-upload-button {
            visibility: hidden;
        }

        .btn-primary {
            background-color: #6C757D;
            outline: none;
            border: 0px;
            box-shadow: none;
        }

        .btn-primary:hover,
        .btn-primary:focus,
        .btn-primary:active {
            background-color: #495056;
            outline: none !important;
            border: none !important;
            box-shadow: none;
        }

        .form-body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 87vh;
        }

        .form-holder {
            width: 100%;
            max-width: 600px;
        }

        .form-content textarea {
            position: static !important;
            width: 100%;
            padding: 8px 20px;
            border-radius: 6px;
            text-align: left;
            background-color: #fff;
            border: 0;
            font-size: 15px;
            font-weight: 300;
            color: #8D8D8D;
            outline: none;
            resize: none;
            height: 120px;
            -webkit-transition: none;
            transition: none;
            margin-bottom: 14px;
        }

        .form-content textarea:hover,
        .form-content textarea:focus {
            border: 0;
            background-color: #ebeff8;
            color: #8D8D8D;
        }

        .mv-up {
            margin-top: -9px !important;
            margin-bottom: 8px !important;
        }

        .invalid-feedback {
            color: #ff606e;
        }

        .valid-feedback {
            color: #2acc80;
        }
    </style>
    <!-- header section strats -->
    <header class="header_section" style="background-color: #131314">
        <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container sticky-top">
                <a class="navbar-brand" href="{{ route('menu.index') }}">
                    <span style="font-family: Dancing Script;">
                        Kedai Kopi Family
                    </span>
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto ">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('menu.index') }}">Home</span></a>
                        </li>
                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle" href="{{ route('menu.menus') }}" id="navbarDropdown"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Menu
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('menu.menus') }}">Lihat Menu</a>
                                <a class="dropdown-item" href="{{ route('menu.create') }}">Tambah Menu <span
                                        class="sr-only">(current)</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('menu.about') }}">About</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">
                                    <i class="fa fa-user"></i>
                                    Login
                                </a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="#" onclick="event.preventDefault(); showLogoutModal();"><i
                                        class="fa fa-sign-out"> Logout</i></a>
                            </li>
                        @endguest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}"> <i class="fa fa-user-plus"></i> Daftar
                                Akun</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="logoutModalLabel">Are Ya Sure?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body"> Apakah kamu yakin ingin logout? </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary" onclick="confirmLogout();">Logout</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Form Logout Tersembunyi -->
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </header>
    <!-- end header section -->
</head>

<body class="sub_page">
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3 style="font-family: Dancing Script;">MENU BARU?</h3>
                        <p>Isi lah data berikut</p>
                        <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data"
                            class="requires-validation" novalidate>
                            @csrf
                            <div class="form-group mt-1 mb-3">
                                <label for="foto">Foto Menu (jpg, png, jpeg)</label>
                                <input type="file" class="form-control" @error('foto') is-invalid @enderror
                                    id="foto" name="foto">
                                <span class="text-danger">{{ $errors->first('foto') }}</span>
                            </div>
                            <div class="form-group mt-1 mb-3">
                                <label for="nama_makanan">Nama Menu</label>
                                <input type="text" class="form-control" @error('nama_makanan') is-invalid @enderror
                                    id="nama_makanan" name="nama_makanan" value="{{ old('nama_makanan') }}"
                                    placeholder="Nama Menu..">
                            </div>
                            <div class="form-group mt-1 mb-3">
                                <label for="harga">Harga Menu</label>
                                <input type="text" class="form-control" @error('harga') is-invalid @enderror
                                    id="harga" name="harga" value="{{ old('harga') }}"
                                    placeholder="Harga Menu..">
                                <span class="text-danger">{{ $errors->first('harga') }}</span>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                                    required>
                                <label class="form-check-label" for="invalidCheck">Data yang dimasukkan sudah
                                    benar</label>
                                <div class="invalid-feedback">Cek kembali data yang dimasukkan!
                                </div>
                            </div>


                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer section -->

    <!-- jQery -->
    <script src="{{ asset('build/assets/js/jquery-3.4.1.min.js') }}"></script>
    {{-- <script src="build/assets/js/jquery-3.4.1.min.js"></script> --}}
    <!-- popper js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- bootstrap js -->
    <script src="{{ asset('build/assets/js/bootstrap.js') }}"></script>
    {{-- <script src="build/assets/js/bootstrap.js"></script> --}}
    <!-- owl slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- isotope js -->
    <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
    <!-- nice select -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
    <!-- custom js -->
    <script src="{{ asset('build/assets/js/custom.js') }}"></script>
    {{-- <script src="build/assets/js/custom.js"></script> --}}
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <!-- End Google Map -->

    {{-- modals popup logout --}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
        function showLogoutModal() {
            $('#logoutModal').modal('show');
        }

        function confirmLogout() {
            document.getElementById('logout-form').submit();
        }
        (function() {
            'use strict'
            const forms = document.querySelectorAll('.requires-validation')
            Array.from(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
    <script>
        // Optional JavaScript for additional interactivity 
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            if (!document.getElementById('invalidCheck').checked) {
                document.querySelector('.invalid-feedback').style.display = 'block';
            } else {
                document.querySelector('.invalid-feedback').style.display = 'none';
                alert('Form submitted successfully!');
            }
        });
    </script>

</body>

</html>
