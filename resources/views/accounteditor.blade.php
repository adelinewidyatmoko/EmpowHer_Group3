@extends('layouts.layout')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body {
        background-color: #fff5f5;
        font-family: 'Segoe UI', sans-serif;
    }
    .profile-edit-img {
        width: 100px;
        height: 100px;
        background-color: #a07979;
        border-radius: 50%;
        margin: 30px auto 20px auto;
        display: block;
    }
    .form-control, .form-control:focus {
        border-radius: 20px;
        border: 1.5px solid #a07979;
        box-shadow: none;
        background: #fff;
    }
    textarea.form-control {
        min-height: 120px;
        resize: none;
    }
    .tag-btn {
        background: #d1bdb3;
        color: #5a3c36;
        border: 1px solid #a07979;
        border-radius: 20px;
        margin: 10px 15px 0 0;
        padding: 5px 18px;
        font-size: 1rem;
        transition: background 0.2s;
    }
    .tag-btn:hover {
        background: #a07979;
        color: #fff;
    }
    .save-btn {
        background: #a07979;
        color: #fff;
        border-radius: 20px;
        font-weight: bold;
        width: 150px;
        margin: 20px auto 0 auto;
        display: block;
        font-size: 1.2rem;
        border: none;
        padding: 8px 0;
        transition: background 0.2s;
    }
    .save-btn:hover {
        background: #8a6565;
    }
    /* .editor-header {
        background: #a07979;
        color: #fff;
        padding: 18px 0 10px 30px;
        font-size: 1.6rem;
        font-weight: bold;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
        margin-bottom: 0;
    } */
</style>

{{-- <div class="editor-header">Modify Account</div> --}}
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
            <div class="profile-edit-img"></div>
            <form method="POST" action="{{ route('edit') }}">
                {{ csrf_field() }}
                <input type="text" class="form-control mb-3" placeholder="Full Name" name="name">
                <input type="text" class="form-control mb-3" placeholder="Nickame" name="nickname">
                <input type="text" class="form-control mb-3" placeholder="Address" name="address">
                <textarea class="form-control mb-3" placeholder="Description" name="personalinfo"></textarea>
                <div class="d-flex justify-content-between flex-wrap mb-3">
                    <button type="button" class="tag-btn">x Business Dev</button>
                    <button type="button" class="tag-btn">x Marketing</button>
                    <button type="button" class="tag-btn">x SEO</button>
                </div>
                <button type="submit" class="save-btn">Save</button>
            </form>
        </div>
    </div>
</div>

@endsection
