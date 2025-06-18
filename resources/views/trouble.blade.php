@extends('layouts.layout')
@section('content')
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <style>
        /* body {
            background-color: #f8f9fa;
        }
        .form-container {
            max-width: 800px;
            margin: 40px auto;
            padding: 30px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .banner {
            background: linear-gradient(45deg, #005baa, #00a0e9);
            color: white;
            padding: 40px 0;
            margin-bottom: 30px;
            text-align: center;
        }
        .required-field::after {
            content: " *";
            color: #dc3545;
        }
        .captcha-container {
            margin: 20px 0;
        } */
        .btn-submit {
            background-color: #0072bc;
            color: white;
        }
        .btn-reset {
            background-color: #ffffff;
            border: 1px solid #ced4da;
        }
        .alert {
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        .alert-success {
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
        }
        .alert-error {
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            color: #721c24;
        }
    </style>
<!-- </head> -->

    <div class="container form-container">
        @if(session('success'))
        <div class="alert alert-success">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
            {{ session('success') }}
        </div>
        @endif

        @if(session('error'))
        <div class="alert alert-error">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
            </svg>
            {{ session('error') }}
        </div>
        @endif
        <form action="{{ route('trouble.submit') }}" method="POST" enctype="multipart/form-data">
            @csrf            <div class="mb-4">
                <h5>Report Trouble</h5>
                <hr>
            </div>            <div class="mb-3">
                <label for="type" class="form-label required-field">Subject</label>                <select class="form-select" id="type" name="type" required>
                    <option value="">Choose Subject</option>
                    <option value="general">General Information</option>
                    <option value="account">Account Problem</option>
                    <option value="transaction">Transaction Issue</option>
                    <option value="technical">Technical Problem</option>
                    <option value="complaint">Complaint</option>
                    <option value="suggestion">Suggestions</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="reason" class="form-label required-field">Your Messages</label>
                <textarea class="form-control" id="reason" name="reason" rows="4" required placeholder="Type here"></textarea>
            </div>

            <div class="mb-3">
                <label for="proof" class="form-label">File Attachment (Zip, Rar, JPG, PNG, PDF file format, max 5Mb)</label>
                <input type="file" class="form-control" id="proof" name="proof" accept=".zip,.rar,.jpg,.jpeg,.png,.pdf">
            </div><div class="mt-4 d-flex gap-2 justify-content-end">
                <button type="reset" class="btn btn-reset">Reset</button>
                <button type="submit" class="btn btn-submit">Submit</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


@endsection
<!-- </html> -->