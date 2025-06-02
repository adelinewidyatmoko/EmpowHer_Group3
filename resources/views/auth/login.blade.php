@extends('layouts.loginregister')

@section('content')
<link rel="stylesheet" href="{{ asset('loginstyle.css') }}">

<div class="login-wrapper">
    <div class="login-container">
        <h2>Welcome back!</h2>
        <p class="subtitle">Log in to your existing account of EmpowHer</p>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="input-group">
                <input id="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="error-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="input-group">
                <input id="password" type="password" placeholder="Password" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="error-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="remember-forgot">
                <label>
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    Remember Me
                </label>
                @if (Route::has('password.request'))
                    <a class="forgot" href="{{ route('password.request') }}">
                        Forgot Password?
                    </a>
                @endif
            </div>

            <button type="submit" class="login-btn">LOGIN</button>

            <p class="other-login">
                Don’t have an account?
                <a href="{{ route('register') }}" class="register-link">Register</a>
            </p>

        </form>
    </div>
</div>
@endsection
