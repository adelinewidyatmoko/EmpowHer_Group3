<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educational Courses - EmpowHer</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #8b5a6b;
            --secondary-color: #6c757d;
            --light-bg: #f8f9fa;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--light-bg);
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

        .course-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .course-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);
        }

        .course-header {
            background: linear-gradient(135deg, #94576E, #7A4A5A);
            color: white;
            padding: 15px;
            border-radius: 12px 12px 0 0;
            position: relative;
        }

        .course-header.r-programming {
            background: linear-gradient(135deg, #94576E, #7A4A5A);
        }

        .course-header.excel {
            background: linear-gradient(135deg, #94576E, #7A4A5A);
        }

        .course-header.python {
            background: linear-gradient(135deg, #94576E, #7A4A5A);
        }

        .course-logo {
            position: absolute;
            top: 10px;
            right: 15px;
            background: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            color: #333;
            font-weight: bold;
        }

        .course-content {
            padding: 20px;
        }

        .course-title {
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .course-description {
            font-size: 12px;
            color: #666;
            line-height: 1.4;
            margin-bottom: 15px;
        }

        .apply-btn {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 8px 20px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .apply-btn:hover {
            background-color: #6d4c57;
        }

        .course-detail-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .course-video-section {
            position: relative;
            background: #f8f9fa;
            padding: 40px;
            text-align: center;
        }

        .video-placeholder {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 12px;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .video-placeholder::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 800"><rect fill="%23667eea" width="1200" height="800"/><circle fill="%23764ba2" cx="200" cy="200" r="100" opacity="0.3"/><circle fill="%23667eea" cx="800" cy="400" r="150" opacity="0.2"/><circle fill="%23764ba2" cx="1000" cy="600" r="80" opacity="0.4"/></svg>');
            background-size: cover;
        }

        .play-button {
            width: 80px;
            height: 80px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 1;
            position: relative;
        }

        .play-button:hover {
            background: white;
            transform: scale(1.1);
        }

        .play-button i {
            font-size: 28px;
            color: var(--primary-color);
            margin-left: 5px;
        }

        .course-info-section {
            padding: 30px;
            text-align: center;
        }

        .course-main-title {
            font-size: 28px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        .course-subtitle {
            color: #666;
            font-size: 14px;
            margin-bottom: 30px;
        }

        .courses-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        @media (max-width: 768px) {
            .courses-grid {
                grid-template-columns: 1fr;
            }
        }

        .breadcrumb-nav {
            background: transparent;
            padding: 0;
            margin-bottom: 20px;
        }

        .breadcrumb-nav .breadcrumb-item a {
            color: var(--primary-color);
            text-decoration: none;
        }

        .breadcrumb-nav .breadcrumb-item.active {
            color: var(--secondary-color);
        }
    </style>
</head>
<body>
    <!-- Navigation -->
   <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">EmpowHer</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/courses') }}">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/categories') }}">Categories</a>
                    </li>
                </ul>
                <div class="profile-section">
                    <div class="profile-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                    <span class="text-white d-none d-md-inline">{{ Auth::user()->name ?? 'Guest' }}</span>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>
