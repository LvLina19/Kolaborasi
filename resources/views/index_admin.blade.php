<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <link rel="shortcut icon" href="build/assets/images/favicon.png" type="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title> Kedai Kopi Family </title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="build/assets/css/bootstrap.css" />

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- nice select  -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
        integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ=="
        crossorigin="anonymous" />
    <!-- font awesome style -->
    <link href="build/assets/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="build/assets/css/style.css" rel="stylesheet" />

    <!-- responsive style -->
    <link href="build/assets/css/responsive.css" rel="stylesheet" />

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
                        <li class="nav-item active">
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

<body>
    <div class="hero_area">
        @guest
        @else
            <header class="header_section" style="background-color: #131314; justify-content: center">
                <div class="container">
                    <nav class="navbar navbar-expand-lg custom_nav-container sticky-top">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-right: 15%">
                            <ul class="navbar-nav mx-auto ">
                                <li class="nav-item">
                                    <a class="nav-link" href="#" onclick="openPopup()"
                                        style="font-family: Dancing Script;">
                                        <h4>Tambah Judul</h4>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </header>
            <!-- Overlay Background -->
            <div id="popupOverlay"
                style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 9999;"
                onclick="closePopup()"></div>

            <!-- Modal Tambah Judul -->
            <div id="popupForm"
                style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; box-shadow: 0 0 10px rgba(0,0,0,0.25); z-index: 10000; border-radius: 10px;">
                <div style="text-align: right;">
                    <button onclick="closePopup()"
                        style="background: none; border: none; font-size: 20px; cursor: pointer;">&times;</button>
                </div>
                <h5 style="font-family: Dancing Script; text-align: center;">Tambah Judul</h5><br>
                <form action="{{ route('judul.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="isi">Deskripsi</label>
                        <input class="form-control" @error('isi') is-invalid @enderror id="isi" name="isi"
                            value="{{ old('isi') }}">
                        <span class="text-danger">{{ $errors->first('isi') }}</span>
                    </div>
                    <div style="text-align: center;">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-primary" onclick="closePopup()">Batal</button>
                    </div>
                </form>
            </div>
        @endguest
        <div class="bg-box">
            <img src="build/assets/images/header-pangsit.jpg" alt="">
        </div>

        <!-- slider section -->
        <section class="slider_section ">
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @if (Auth::guest())
                        @foreach ($juduls as $judul)
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-md-7 col-lg-6 ">
                                            <div class="detail-box">
                                                <h1>
                                                    Kedai Kopi Family
                                                </h1>
                                                <p>
                                                    {{ $judul['isi'] }} <br>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @elseif (Auth::user())
                        @foreach ($juduls as $judul)
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-md-7 col-lg-6 ">
                                            <div class="detail-box">
                                                <h1>
                                                    Kedai Kopi Family
                                                </h1>
                                                <p>
                                                    {{ $judul['isi'] }} <br>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="container">
                    <ol class="carousel-indicators">
                        @foreach ($juduls as $index => $juduls)
                            <li data-target="#customCarousel1" data-slide-to="<?= $index ?>"
                                class="<?= $index === 0 ? 'active' : '' ?>"></li>
                        @endforeach
                    </ol>
                </div>
            </div>

        </section>
        <!-- end slider section -->
    </div>

    <!-- Pembatas section -->

    <section class="offer_section layout_padding-bottom">
    </section>

    <!-- end Pembatas section -->

    <!-- food section -->

    <section class="food_section layout_padding-bottom">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Our Menu
                </h2>
            </div>

            <div class="filters-content">
                <div class="row grid">
                    @foreach ($menus as $menu)
                        <div class="col-sm-6 col-lg-4 all pizza">
                            <div class="box">
                                <div>
                                    <div class="img-box">
                                        <img src="{{ Storage::url($menu->foto) }}" alt="">
                                    </div>
                                    <div class="detail-box">
                                        <h4>{{ $menu['nama_makanan'] }}</h4>
                                        <h6>{{ $menu['deskripsi'] }}</h6>
                                        <div class="options">
                                            <h6>Rp. {{ $menu['harga'] }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- end food section -->

    <!-- about section -->

    <section class="about_section layout_padding">
        <div class="container  ">

            <div class="row">
                <div class="col-md-6 ">
                    <div class="img-box">
                        <img src="build/assets/images/about.png" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                Kedai Kopi Family
                            </h2>
                        </div>
                        <p>
                            Berdiri sejak tahun 2005 hingga sekarang. <br>
                            Buka dari pukul 07.00 hingga pukul 12.00. <br>
                            Kedai Kopi Family merupakan tempat makanan yang menyediakan sarapan. <br>
                            Menu utama yang dimiliki yaitu Pangsit ayam. <br>
                            Dan beberapa menu lainnya yaitu : <br> TomYam, LoMie, MiSua, Mie Goreng,
                            Bihun Goreng, Bubur Ayam/ikan, dan masih banyak lagi. <br>
                            Kedai Kopi Family juga menyediakan minuman seperti : <br> Kopi O, Kopi susu, Teh tawar Teh
                            Manis, Badak, Markisa dan masih banyak lagi <br>
                            Kedai Kopi Family berada di jalan Satria, no 99. sebelah Hutama Garden. <br>
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

    <!-- client section -->

    <section class="client_section layout_padding-bottom">
        <div class="container">
            <div class="heading_container heading_center psudo_white_primary mb_45">
                <h2>
                    What Says Our Customers
                </h2>
            </div>
            <div class="carousel-wrap row ">
                <div class="owl-carousel client_owl-carousel">
                    @if (Auth::guest())
                        @foreach ($komens as $komen)
                            <div class="item">
                                <div class="box">
                                    <div class="detail-box">
                                        <h5><b>{{ $komen->menu->nama_makanan }}</b></h5>
                                        <p>
                                            {{ $komen['komentar'] }}
                                        </p>
                                        <h6>
                                            By : {{ $komen['nama'] }}
                                        </h6>
                                    </div>
                                    <div class="img-box">
                                        <img src="{{ Storage::url($komen->menu->foto) }}" alt="">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @elseif (Auth::user())
                        @foreach ($komens as $komen)
                            <div class="item">
                                <div class="box">
                                    <div class="detail-box">
                                        <h5><b>{{ $komen->menu->nama_makanan }}</b></h5>
                                        <p>
                                            {{ $komen['komentar'] }}
                                        </p>
                                        <h6>
                                            By : {{ $komen['nama'] }}
                                        </h6><br>
                                        <!-- Tombol Hapus -->
                                        <form action="/komen/{{ $komen->id }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-secondary btn-sm ml-2"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i
                                                    class="fa fa-trash" aria-hidden="true"></i></button>
                                        </form>
                                    </div>
                                    <div class="img-box">
                                        <img src="{{ Storage::url($komen->menu->foto) }}" alt="">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- end client section -->

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
    <script src="build/assets/js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- bootstrap js -->
    <script src="build/assets/js/bootstrap.js"></script>
    <!-- owl slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- isotope js -->
    <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
    <!-- nice select -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
    <!-- custom js -->
    <script src="build/assets/js/custom.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <!-- End Google Map -->

    {{-- modals popup logout --}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script>
        function showLogoutModal() {
            $('#logoutModal').modal('show');
        }

        function confirmLogout() {
            document.getElementById('logout-form').submit();
        }

        function openPopup() {
            document.getElementById('popupForm').style.display = 'block';
            document.getElementById('popupOverlay').style.display = 'block';
        }

        function closePopup() {
            document.getElementById('popupForm').style.display = 'none';
            document.getElementById('popupOverlay').style.display = 'none';
        }
    </script>
</body>

</html>
