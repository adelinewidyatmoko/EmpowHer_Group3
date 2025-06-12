@extends('layouts.loginregister')
@section('content')
<link rel="stylesheet" href="{{ asset('registerstyle.css') }}">

<div class="login-wrapper">
    <div class="login-container">
        <h2>Create account</h2>
        <p class="subtitle">Please fill complete below placeholders</p>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="input-group">
                <input id="name" type="text" name="name" placeholder="Name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="error-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="input-group">
                <input id="email" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="error-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="input-group">
                <input id="password" type="password" name="password" placeholder="Password" required autocomplete="new-password">
                @error('password')
                    <span class="error-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="input-group">
                <input id="password-confirm" type="password" name="password_confirmation" placeholder="Confirm password" required autocomplete="new-password">
                </div>

            <button type="submit" class="register-btn">REGISTER</button>

            <p class="other-register">
                Already Have an Account?
                <a href="{{ route('login') }}" class="login-link">Login</a>
            </p>
        </form>
    </div>
</div>
@endsection
