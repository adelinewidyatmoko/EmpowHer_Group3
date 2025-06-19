@extends('layouts.loginregister')

@section('content')
<link rel="stylesheet" href="{{ asset('loginstyle.css') }}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

<style>
.subtitle {
    font-size: 0.9em;   
    margin-bottom: 25px;
    text-align: center;
}

</style>


<div class="login-wrapper">
    <div class="login-container">

        <div class="logo-container mb-5">
            <img src="images/logo.png" alt="EmpowHer Logo" class="logo mb-3" width="88" height="95">
        </div>

        <h2>Welcome back!</h2>
        <p class="subtitle">Log in to your existing account of EmpowHer</p>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="input-group">
                <input id="email" type="email" placeholder="&#xf2c0;" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="error-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="input-group">
                <input id="password" type="password" placeholder="&#xf023;" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="error-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="remember-forgot d-flex justify-content-end">
                @if (Route::has('password.request'))
                    <a class="forgot" href="{{ route('password.request') }}" style="text-decoration: none">
                        Forgot Password?
                    </a>
                @endif
            </div>

            <button type="submit" class="login-btn">LOGIN</button>

            <p class="other-login">
                <a href="{{ route('register') }}" class="register-link" style="text-decoration: none">Login With Another Accounts ?</a>
            </p>

        </form>
    </div>
</div>
@endsection
