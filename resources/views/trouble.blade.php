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
    </style>
<!-- </head> -->

    <div class="container form-container">
        <form action="{{ route('trouble.submit') }}" method="POST" enctype="multipart/form-data">
            @csrf            <div class="mb-4">
                <h5>Formulir Bantuan</h5>
                <hr>
            </div>            <div class="mb-3">
                <label for="type" class="form-label required-field">Perihal</label>                <select class="form-select" id="type" name="type" required>
                    <option value="">Pilih Perihal</option>
                    <option value="general">Informasi Umum</option>
                    <option value="account">Masalah Akun</option>
                    <option value="transaction">Transaksi</option>
                    <option value="technical">Masalah Teknis</option>
                    <option value="complaint">Pengaduan</option>
                    <option value="suggestion">Saran dan Masukan</option>
                    <option value="other">Lainnya</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="reason" class="form-label required-field">Isi Pesan</label>
                <textarea class="form-control" id="reason" name="reason" rows="4" required placeholder="Jelaskan masalah anda secara detail..."></textarea>
            </div>

            <div class="mb-3">
                <label for="proof" class="form-label">Bukti Pendukung (Zip, Rar, JPG, PNG, PDF file format, max 5Mb)</label>
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
