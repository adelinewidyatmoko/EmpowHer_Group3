@extends('layouts.layout')
@section('content')
<style>
        :root {
            --primary-color: #a67c7c;
            --secondary-color: #d4a4a4;
            --accent-color: #4285f4;
            --text-dark: #333;
            --bg-light: #f5f5f5;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--bg-light);
            margin: 0;
            padding: 0;
        }

        .navbar-custom {
            background-color: var(--primary-color);
            padding: 1rem 0;
        }

        .navbar-brand, .nav-link {
            color: white !important;
        }

        .profile-section {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .profile-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-color);
        }

        .application-form {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            padding: 2.5rem;
            margin: 2rem 0;
        }

        .form-header {
            text-align: center;
            margin-bottom: 2.5rem;
            padding-bottom: 1.5rem;
            border-bottom: 2px solid var(--secondary-color);
        }

        .form-header h1 {
            color: var(--primary-color);
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .form-header .job-title {
            color: var(--text-dark);
            font-size: 1.1rem;
            font-weight: 500;
        }

        .form-label {
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
        }

        .form-control, .form-select {
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            padding: 0.75rem 1rem;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(166, 124, 124, 0.25);
        }

        .btn-primary-custom {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            color: white;
            padding: 0.75rem 2rem;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .btn-primary-custom:hover {
            background-color: #8b6666;
            border-color: #8b6666;
            transform: translateY(-2px);
        }

        .btn-secondary-custom {
            background-color: #6c757d;
            border-color: #6c757d;
            color: white;
            padding: 0.75rem 2rem;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .btn-secondary-custom:hover {
            background-color: #5a6268;
            border-color: #5a6268;
        }

        .file-upload-area {
            border: 2px dashed var(--secondary-color);
            border-radius: 8px;
            padding: 2rem;
            text-align: center;
            background-color: #fafafa;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .file-upload-area:hover {
            border-color: var(--primary-color);
            background-color: #f0f0f0;
        }

        .file-upload-icon {
            font-size: 3rem;
            color: var(--secondary-color);
            margin-bottom: 1rem;
        }

        .required-field {
            color: #dc3545;
        }

        .form-section {
            margin-bottom: 2rem;
        }

        @media (max-width: 768px) {
            .application-form {
                margin: 1rem;
                padding: 1.5rem;
            }

            .navbar-custom .nav-link {
                margin: 0.2rem;
                padding: 0.3rem 0.8rem;
            }
        }
    </style>
<main class="py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="application-form">
                    <div class="form-header">
                        <h1><i class="fas fa-briefcase me-2"></i>Job Application</h1>
                        <div class="job-title">Software Engineer - Full Stack Developer</div>
                    </div>

                    <!-- 💬 Success Message -->
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- ❌ Error Messages -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- 🌐 Form -->
                    <form id="jobApplicationForm" action="{{ route('apply.submit') }}" method="POST" enctype="multipart/form-data">
                        @csrf <!-- CSRF token for security -->

                        <!-- Resume Upload -->
                        <div class="form-section">
                            <label for="resume" class="form-label">
                                <i class="fas fa-file-upload me-2"></i>Upload Resume <span class="required-field">*</span>
                            </label>
                            <input type="file" id="resume" name="resume" class="form-control" accept=".pdf,.doc,.docx" required>
                        </div>

                        <!-- Form Fields -->
                        <div class="form-section">
                            <label for="formFields" class="form-label">
                                <i class="fas fa-comment-dots me-2"></i>Why are you a good fit for this job? <span class="required-field">*</span>
                            </label>
                            <textarea id="formFields" name="formFields" class="form-control" rows="5" required></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="form-section text-center">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-paper-plane me-2"></i>Submit Application
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
