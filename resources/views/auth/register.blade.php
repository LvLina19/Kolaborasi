<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Custom Styles -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins&display=swap');

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box
}

body {
    background-color: #eee;
    height: 100vh;
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(to top, #fff 10%, rgba(93, 42, 141, 0.4) 90%) no-repeat
}

.wrapper {
    max-width: 500px;
    border-radius: 10px;
    margin: 50px auto;
    padding: 30px 40px;
    box-shadow: 20px 20px 80px rgb(206, 206, 206)
}

.h2 {
    font-family: 'Kaushan Script', cursive;
    font-size: 3.5rem;
    font-weight: bold;
    color: #400485;
    font-style: italic
}

.h4 {
    font-family: 'Poppins', sans-serif
}

.input-field {
    border-radius: 5px;
    padding: 5px;
    display: flex;
    align-items: center;
    cursor: pointer;
    border: 1px solid #400485;
    color: #400485
}

.input-field:hover {
    color: #7b4ca0;
    border: 1px solid #7b4ca0
}

input {
    border: none;
    outline: none;
    box-shadow: none;
    width: 100%;
    padding: 0px 2px;
    font-family: 'Poppins', sans-serif
}

.fa-eye-slash.btn {
    border: none;
    outline: none;
    box-shadow: none;
    background-color: transparent;
}

a {
    text-decoration: none;
    color: #400485;
    font-weight: 700
}

a:hover {
    text-decoration: none;
    color: #7b4ca0
}

.option {
    position: relative;
    padding-left: 30px;
    cursor: pointer
}

.option label.text-muted {
    display: block;
    cursor: pointer
}

.option input {
    display: none
}

.checkmark {
    position: absolute;
    top: 3px;
    left: 0;
    height: 20px;
    width: 20px;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 50%;
    cursor: pointer
}

.option input:checked~.checkmark:after {
    display: block
}

.option .checkmark:after {
    content: "";
    width: 13px;
    height: 13px;
    display: block;
    background: #400485;
    position: absolute;
    top: 48%;
    left: 53%;
    border-radius: 50%;
    transform: translate(-50%, -50%) scale(0);
    transition: 300ms ease-in-out 0s
}

.btn.btn-block {
    border-radius: 20px;
    background-color: #400485;
    color: #fff
}

.btn.btn-block:hover {
    background-color: #55268be0
}

@media(max-width: 575px) {
    .wrapper {
        margin: 10px
    }
}

@media(max-width:424px) {
    .wrapper {
        padding: 30px 10px;
        margin: 5px
    }

    .option {
        position: relative;
        padding-left: 22px
    }

    .option label.text-muted {
        font-size: 0.95rem
    }

    .checkmark {
        position: absolute;
        top: 2px
    }

    .option .checkmark:after {
        top: 50%
    }

    #forgot {
        font-size: 0.95rem
    }
}
        /* body {
            background-color: #f8f9fa;
            font-family: 'Nunito', sans-serif;
            height: 100vh;
            margin: 0;
        }

        .gradient-custom {
            background: linear-gradient(45deg, #ff6f61, #ff9456);
        }

        .card {
            border-radius: 1rem;
            background-color: #343a40;
            color: white;
            /* padding: 2rem; */
        }

        .form-outline {
            margin-bottom: 1.5rem;
        }

        .btn-outline-light {
            border: 2px solid white;
            color: white;
        }

        .btn-outline-light:hover {
            background-color: white;
            color: #343a40;
        }

        .text-white-50 {
            color: rgba(255, 255, 255, 0.5) !important;
        }

        .text-white-50:hover {
            color: white !important;
        } */
    </style>
</head>

<body>
    <section class="vh-100 gradient-custom">
        <div class="wrapper bg-white">
            <div class="h2 text-center">Kedai Kopi Family</div>
            <div class="h4 text-muted text-center pt-2">Please enter your details to register!</div>
            <form class="pt-3" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group py-2">
                    <div class="input-field"> <span class="far fa-user p-2"></span>     
                        <input type="text" id="name" name="name" placeholder="Username" required autofocus>
                    </div>
                </div>
                <div class="form-group py-2">
                    <div class="input-field"> <span class="far fa-user p-2"></span> 
                        <input type="email" id="email" name="email" placeholder="Email Address" required> 
                    </div>
                </div>
                <div class="form-group py-1 pb-2">
                    <div class="input-field"> 
                        <span class="fas fa-lock p-2"></span> 
                        <input type="password" id="password" name="password" placeholder="Enter your Password" required> <button class="btn bg-white text-muted"> <span class="far fa-eye-slash"></span> </button> </div>
                </div>
                <div class="form-group py-1 pb-2">
                    <div class="input-field"> 
                        <span class="fas fa-lock p-2"></span> 
                        <input type="password" id="password-confirm" name="password_confirmation" placeholder="Confirm Password" required>
                </div>
                <button class="btn btn-block text-center my-3" type="submit">Register</button>
            </form>
        </div>
    </section>

    <!-- Bootstrap dan jQuery JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>


{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
