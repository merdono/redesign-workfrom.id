@extends('layouts.main')

@section('')

<div class="container">
    <form action="/register" method="POST">
        @csrf
        <h2>Registrasi</h2>
        <div class="form-floating">
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" required value="{{ old('name') }}">
            <label for="name">Full Name</label>
            @error('name')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-floating">
            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" required value="{{ old('phone') }}">
            <label for="phone">Phone</label>
            @error('phone')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-floating">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" required value="{{ old('email') }}">
            <label for="Email" class="form-label">Email Address</label>
            @error('email')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-floating">
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
</div>

@endsection