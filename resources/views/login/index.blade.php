@extends('layouts.main')

@section('')

@if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/styleSignInUp.css" />
</head>
<body>
    <!-- Sing in  Form -->
    <div class="main">
        <section class="sign-in">
            <div class="containerr">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="img/Tinggal-di-Apartemen2.jpg" alt="sign in image"></figure>
                        <p>Belum memiliki akun?<a href="/register" class="signin-image-link">Daftar</a></p>
                    </div>
                    <div class="signin-form">
                        <h2 class="form-title">Sign in</h2>
                        <form action="/login" method="POST" class="register-form" id="login-form">
                            @csrf
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" name="email" class="@error('email') is-invalid @enderror" id="email" placeholder="Email" required value="{{ old('email') }}"/>
                                @error('email')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" required/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

<!-- <div class="container">
    <form action="/login" method="POST">
        @csrf
        <h2>Login</h2>
        <div class="form-floating">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
            <label for="email">Email:</label>
            @error('email')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-floating">
            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
            <label for="password">Password:</label>
        </div>
        <button type="submit">Login</button>
    </form>
</div> -->

@endsection