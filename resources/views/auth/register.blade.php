@extends('layouts.loginregister')
@section('content')
<link rel="stylesheet" href="{{ asset('registerstyle.css') }}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

<div class="login-wrapper">
    <div class="login-container">
        <h2>Create account</h2>
        <p class="subtitle">Please fill complete below placeholders</p>

        <form method="POST" action="{{ route('register.create') }}">
            @csrf

            <div class="input-group">
                <input id="name" type="text" value name="name" placeholder="&#xf2c0;  Name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="error-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="input-group">
                <input id="email" type="email" name="email" placeholder="&#xf003;  Email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="error-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="input-group">
                <input id="password" type="password" name="password" placeholder="&#xf023;  Password" required autocomplete="new-password">
                @error('password')
                    <span class="error-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="input-group">
                <input id="password-confirm" type="password" name="password_confirmation" placeholder="&#xf023;  Confirm password" required autocomplete="new-password">
                </div>

            <button type="submit" class="register-btn">SIGN UP</button>

            <p class="other-register">
                <a href="{{ route('login') }}" class="login-link" style="text-decoration: none">Already Have an Account?</a>
            </p>
        </form>
    </div>
</div>
@endsection
