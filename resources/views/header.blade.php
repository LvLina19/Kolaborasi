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
  <link rel="shortcut icon" href="build/assets/images/favicon.png" type="">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <title> Kedai Kopi Family </title>
  
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="build/assets/css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="build/assets/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="build/assets/css/style.css" rel="stylesheet" />
  
  <!-- responsive style -->
  <link href="build/assets/css/responsive.css" rel="stylesheet" />
  
  <!-- Styles untuk Modal --> 
  <style>
    /* Style khusus untuk modal logout */
    .modal-header {
        background-color: #1A2130; /* Warna biru header */
        color: white; /* Warna teks */
        border-bottom: 2px solid #1A2130; /* Garis bawah header */
    }
    .modal-footer {
        border-top: none; /* Hilangkan garis atas footer */
    }
    .btn-primary {
        background-color: #1A2130; /* Warna biru */
        border-color: #BCCCDC;
    }
    .btn-primary:hover {
        background-color: #BCCCDC; /* Warna hover */
    }
    .btn-secondary:hover {
        background-color: #6c757d; /* Warna hover untuk batal */
    }
    .modal-body {
        font-size: 1.1rem; /* Perbesar teks */
        text-align: center; /* Tengahkan teks */
        padding: 2rem; /* Ruang di sekitar teks */
    }
  </style>

</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="{{ route('menu.index') }}">
            <span>
              Kedai Kopi Family
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mx-auto ">
              <li class="nav-item active">
                <a class="nav-link" href="{{ route('menu.index') }}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('menu.menu') }}">Menu</a>
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
                <a class="nav-link" href="#" onclick="event.preventDefault(); showLogoutModal()">Logout</a>
                {{-- <a class="nav-link" href="#" onclick="event.preventDefault(); confirmLogout();"> Logout </a> 
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> 
                  @csrf 
                </form>  --}}
              </li> 
              @endguest 
            </ul>
          </div>
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true"> 
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
                  <button type="button" class="btn btn-primary" onclick="confirmLogout()">Logout</button> 
                </div> 
              </div> 
            </div> 
          </div>
          <!-- Form Logout Tersembunyi -->
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1>
                      Kedai Kopi Family
                    </h1>
                    <p>
                      Doloremque, itaque aperiam facilis rerum, commodi, temporibus sapiente ad mollitia laborum quam quisquam esse error unde. Tempora ex doloremque, labore, sunt repellat dolore, iste magni quos nihil ducimus libero ipsam.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1>
                      Kedai Kopi Family
                    </h1>
                    <p>
                      Doloremque, itaque aperiam facilis rerum, commodi, temporibus sapiente ad mollitia laborum quam quisquam esse error unde. Tempora ex doloremque, labore, sunt repellat dolore, iste magni quos nihil ducimus libero ipsam.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1>
                      Kedai Kopi Family
                    </h1>
                    <p>
                      Doloremque, itaque aperiam facilis rerum, commodi, temporibus sapiente ad mollitia laborum quam quisquam esse error unde. Tempora ex doloremque, labore, sunt repellat dolore, iste magni quos nihil ducimus libero ipsam.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <ol class="carousel-indicators">
            <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
            <li data-target="#customCarousel1" data-slide-to="1"></li>
            <li data-target="#customCarousel1" data-slide-to="2"></li>
          </ol>
        </div>
      </div>

    </section>