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
            background-color: white;
            font-weight: bold;
            color: #924e55 !important;
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
                        <p class="text-black mb-3" style="text-align: left;">
                            {{ Auth::user()->personalinfo ?? 'Guest' }}
                        </p>

                        <button class="action-button d-flex align-items-center mb-2 w-100"><svg fill="#ffffff" width="20px" height="20px" viewBox="-1 0 19 19" xmlns="http://www.w3.org/2000/svg" class="cf-icon-svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M16.417 9.5a7.919 7.919 0 0 1-15.212 3.082A7.87 7.87 0 0 1 .584 9.5a.554.554 0 0 1 1.109 0 6.81 6.81 0 0 0 13.081 2.65 6.811 6.811 0 0 0-9.66-8.557 6.859 6.859 0 0 0-1.847 1.554h1.276a.554.554 0 0 1 0 1.108h-2.61a.554.554 0 0 1-.555-.554V3.09a.554.554 0 0 1 1.109 0v1.262A7.898 7.898 0 0 1 8.5 1.583 7.911 7.911 0 0 1 16.417 9.5zm-5.181 3a.554.554 0 0 1-.784 0l-2.42-2.42a.552.552 0 0 1-.22-.441V5.168a.554.554 0 1 1 1.11 0v4.234l2.314 2.315a.554.554 0 0 1 0 .784z"></path></g></svg>&nbsp;
                            Riwayat Transaksi</button>

                        <button class="action-button d-flex align-items-center w-100"><svg fill="#ffffff" width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" transform="matrix(-1, 0, 0, 1, 0, 0)" stroke="#ffffff" stroke-width="0.00024000000000000003"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M3,3A1,1,0,0,0,2,4V16a1,1,0,0,0,1,1h9.649l4.726,3.781A1,1,0,0,0,19,20V17h2a1,1,0,0,0,1-1V4a1,1,0,0,0-1-1ZM20,15H18a1,1,0,0,0-1,1v1.919l-3.375-2.7A1,1,0,0,0,13,15H4V5H20Z"></path></g></svg> &nbsp;
                            Experts Chat</button>

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
