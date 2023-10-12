@extends('layouts.main')

@section('')

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
    <div class="main">
        <!-- Sign up form -->
        <section class="signup">
            <div class="containerr">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form action="/register" method="POST" class="register-form" id="register-form">
                            @csrf
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" class="@error('name') is-invalid @enderror" id="name" placeholder="Full Name" required value="{{ old('name') }}"/>
                                @error('name')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="phone"><i class="zmdi zmdi-phone"></i></label>
                                <input type="text" name="phone" class="@error('phone') is-invalid @enderror" id="phone" placeholder="Phone Number" required value="{{ old('phone') }}">
                                @error('phone')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" class="@error('email') is-invalid @enderror" id="email" placeholder="Email" required value="{{ old('email') }}"/>
                                @error('email')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" class="@error('password') is-invalid @enderror" id="password" placeholder="Password" required value="{{ old('password') }}"/>
                                @error('password')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I’ve read and agree with Terms of Service and our Privacy Policy</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="img/Tinggal-di-Apartemen2.jpg" alt="sign up image"></figure>
                        <p>Sudah memiliki akun?<a href="/login" class="signup-image-link">Masuk</a></p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

@endsection
<!-- 
<div class="container">
    <form action="/register" method="POST">
        @csrf
        <h2>Registrasi</h2>
        <div class="form-group">
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" required value="{{ old('name') }}">
            <label for="name">Full Name</label>
            @error('name')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" required value="{{ old('phone') }}">
            <label for="phone">Phone</label>
            @error('phone')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" required value="{{ old('email') }}">
            <label for="Email" class="form-label">Email Address</label>
            @error('email')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" required value="{{ old('password]') }}">
            <label for="password">Password</label>
            @error('password')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit">Sign in</button>
    </form>
</div> -->