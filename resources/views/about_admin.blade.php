<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="/build/assets/images/favicon.png" type="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title> Kedai Kopi Family </title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="/build/assets/css/bootstrap.css" />

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- nice select  -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
        integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ=="
        crossorigin="anonymous" />
    <!-- font awesome style -->
    <link href="/build/assets/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="/build/assets/css/style.css" rel="stylesheet" />

    <!-- responsive style -->
    <link href="/build/assets/css/responsive.css" rel="stylesheet" />

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
    </style>
    <!-- header section strats -->
    <header class="header_section" style="background-color: #131314">
        <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container sticky-top">
                <a class="navbar-brand" href="{{ route('menu.home') }}">
                    <span>
                        Kedai Kopi Family
                    </span>
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto ">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('menu.home') }}">Home</a>
                        </li>
                        @if (Auth::guest())
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('arah.menuMakanan') }}">Menu</a>
                            </li>
                        @elseif (Auth::user())
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('menu.menus') }}">Menu</a>
                            </li>
                        @endif
                        <li class="nav-item active">
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
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}"> <i class="fa fa-user-plus"></i> Daftar
                                    Akun</a>
                            </li>
                        @endguest

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

    <div class="hero_area">
        <div class="bg-box">
            <img src="/build/assets/images/hero-bg.jpg" alt="">
        </div>
    </div>

    <!-- about section -->

    <section class="about_section layout_padding">
        <div class="container  ">

            <div class="row">
                <div class="col-md-6 ">
                    <div class="img-box">
                        <img src="/build/assets/images/about.png" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                We Are Kedai Kopi Family
                            </h2>
                        </div>
                        <p>
                            @foreach ($juduls as $judul)
                                {{ $judul['isi'] }} <br>
                            @endforeach
                            {{-- Berdiri sejak tahun 2005 hingga sekarang. <br>
                            Buka dari pukul 07.00 hingga pukul 12.00. <br>
                            Kedai Kopi Family merupakan tempat makanan yang menyediakan sarapan. <br>
                            Menu utama yang dimiliki yaitu Pangsit ayam. <br>
                            Dan beberapa menu lainnya yaitu : <br> TomYam, LoMie, MiSua, Mie Goreng,
                            Bihun Goreng, Bubur Ayam/ikan, dan masih banyak lagi. <br>
                            Kedai Kopi Family juga menyediakan minuman seperti : <br> Kopi O, Kopi susu, Teh tawar Teh
                            Manis, Badak, Markisa dan masih banyak lagi <br>
                            Kedai Kopi Family berada di jalan Satria, no 99. sebelah Hutama Garden. <br> --}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end about section -->

    <!-- book section -->
    <section class="book_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Kolom Komentar
                </h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form_container">
                        <form action="{{ route('komen.store') }}" method="POST" enctype="multipart/form-data"
                            class="requires-validation" novalidate>
                            @csrf
                            <div>
                                <input type="text" class="form-control" placeholder="Nama"
                                    @error('nama') is-invalid @enderror id="nama" name="nama"
                                    value="{{ old('nama') }}" />
                            </div>
                            <div>
                                <input type="text" class="form-control" placeholder="Komentar"
                                    @error('komentar') is-invalid @enderror id="komentar" name="komentar"
                                    value="{{ old('komentar') }}" />
                            </div>
                            <div>
                                <select class="form-control nice-select wide" data-placeholder="Menu" name="menu_id">
                                    <option value="" disabled selected>Nama Menu ...</option>
                                    @foreach ($menus as $menu)
                                        <option value="{{ $menu->id }}" @selected(old('menu_id') == $menu->id)>
                                            {{ $menu->nama_makanan }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <button id="submit" type="submit">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end book section -->

    <!-- footer section -->
    <footer class="footer_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 footer-col">
                    <div class="footer_contact">
                        <h4>
                            Contact Us
                        </h4>
                        <div class="contact_link_box">
                            <a href="https://maps.app.goo.gl/T5LdPnzc9WiQ9cZd6">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>
                                    Location
                                </span>
                            </a>
                            <a href="https://wa.me/nomor_telepon">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>
                                    Call +62 81268866114
                                </span>
                            </a>
                            <a
                                href="https://www.instagram.com/kedaikopifamily?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                <span>
                                    @kedaikopifamily
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 footer-col">
                    <h4>
                        Opening Hours
                    </h4>
                    <p>
                        Everyday
                    </p>
                    <p>
                        06.00 WIB - 12.00 WIB
                    </p>
                </div>
            </div>
            <div class="footer-info">
                <p>
                    &copy; <span id="displayYear"></span>
                    <a href="https://html.design/"></a><br><br>
                    &copy; <span id="displayYear"></span>
                    <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
                </p>
            </div>
        </div>
    </footer>
    <!-- footer section -->

    <!-- jQery -->
    <script src="/build/assets/js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- bootstrap js -->
    <script src="/build/assets/js/bootstrap.js"></script>
    <!-- owl slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- isotope js -->
    <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
    <!-- nice select -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
    <!-- custom js -->
    <script src="/build/assets/js/custom.js"></script>
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
    </script>

</body>

</html>
