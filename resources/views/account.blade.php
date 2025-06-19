@extends('layouts.layout')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
        body {
            background-color: #fff5f5;
            font-family: 'Segoe UI', sans-serif;
        }
        .profile-box {
            max-width: 600px;
            margin: 40px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
            text-align: center;
        }
        .profile-img {
            width: 100px;
            height: 100px;
            background-color: #d9d9d9;
            border-radius: 50%;
        }
        .badge-role {
            background-color: #f7d9dd;
            color: #924e55;
            font-size: 0.75rem;
            border-radius: 10px;
            padding: 2px 10px;
            margin-left: 10px;
        }
        .action-button {
            background-color: #a07979;
            color: white;
            margin: 10px auto;
            width: 60%;
            border-radius: 10px;
            padding: 10px;
            font-weight: 500;
            border: none;
        }
        .delete-btn {
            background-color: #c70000;
            color: white;
            padding: 10px 30px;
            margin-top: 20px;
            border: none;
            border-radius: 8px;
        }
        .change-link {
            color: #924e55;
            font-weight: 500;
            text-decoration: none;
            margin-left: 10px;
        }
        .change-link:hover {
            text-decoration: underline;
        }
</style>

<div class="container py-5 px-5">
    <div class="container px-5">
        <div class="row justify-content-center">
            <div class="col col-6 justify-content-lg-around">
                <div class="d-flex align-items-start mb-3">
                    <div class="profile-img me-4 flex-shrink-0"></div>
                    <div style="flex:1;">
                        <div class="d-flex align-items-center mb-2">
                            <h4 class="mb-0">{{ Auth::user()->name ?? 'Guest' }}</h4>
                            <span class="badge-role ms-2">Digital Marketing</span>
                            <a href="{{ route('change') }}" class="change-link ms-3">Change</a>
                        </div>
                        <p class="text-muted mb-1">{{ Auth::user()->email ?? 'Guest' }}</p>
                        <p class="text-secondary mb-3" style="text-align: left;">
                            {{ Auth::user()->personalinfo ?? 'Guest' }}
                        </p>

                        <button class="action-button d-flex align-items-center mb-2 w-100"><i class="bi bi-clock-history me-2"></i>Riwayat Transaksi</button>

                        <button class="action-button d-flex align-items-center w-100"><i class="bi bi-clock-history me-2"></i>Experts Chat</button>

                        <div class="d-flex justify-content-center mt-3">
                            <form action="{{ route('deleteAccount') }}" method="POST" onsubmit="return confirm('Are you sure you want to delete your account?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-btn w-100">Delete Account</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.js"></script>

@endsection
