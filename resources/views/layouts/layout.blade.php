<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal - Software Engineering</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
          --primary-color: #9b5a60;
            --secondary-color: #d4a4a4;
            --accent-color: #4285f4;
            --text-dark: #333;
            --bg-light: #f5f5f5;
            --text-light: #ffffff;
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

        .profile-section .btn {
        background: none;
        border: none;
        color: white;
    }

        .profile-section .btn:hover,
        .profile-section .btn:focus {
            color: rgba(255,255,255,0.8);
        }

        .dropdown-menu {
            min-width: 200px;
            padding: 0.5rem 0;
            margin-top: 0.5rem;
        }

        .dropdown-item {
            padding: 0.5rem 1rem;
        }

        .dropdown-item form button {
            width: 100%;
            text-align: left;
            text-decoration: none;
            color: #212529;
        }

        .dropdown-item form button:hover {
            color: #16181b;
            text-decoration: none;
            background-color: #f8f9fa;
        }

/* initial-course.blade */
        .course-card {
            border-radius: 15px;
            transition: transform 0.3s;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .course-card:hover {
            transform: translateY(-5px);
        }

        .course-image {
            height: 200px;
            object-fit: cover;
            border-radius: 15px 15px 0 0;
        }

        .category-card {
            background-color: #f8f9fa;
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s;
        }

        .category-card:hover {
            transform: translateY(-5px);
        }

        .category-icon {
            font-size: 2rem;
            color: #8B4E52;
            margin-bottom: 1rem;
        }

        .badge-custom {
            background-color: #fff;
            color: #8B4E52;
            padding: 0.5rem 1rem;
            border-radius: 20px;
        }

        .rating {
            color: #ffc107;
        }

        .platform-card {
            background-color: white;
            border-radius: 15px;
            padding: 20px;
            position: relative;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100px;
        }

        .platform-card:hover {
            transform: translateY(-5px);
        }

        .platform-icon {
            max-width: 60px;
            height: auto;
        }

        .platform-badge {
            position: absolute;
            top: -10px;
            right: -10px;
            background-color: #28a745;
            color: white;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            transition: transform 0.3s ease;
        }

        .platform-badge.red {
            background-color: #dc3545;
        }

        .platform-badge.green {
            background-color: #28a745;
        }

        .job-card:hover {
            transform: translateY(-5px);
        }

        .job-icon {
            width: 60px;
            height: 60px;
            overflow: hidden;
        }

        .job-icon img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .job-tags .badge {
            margin-right: 8px;
            padding: 8px 16px;
        }

        .job-description {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 0;
        }

        .profile-dropdown {
            background-color: var(--primary-color);
            padding: 8px 16px;
            border-radius: 4px;
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
        }

        .profile-initial {
            color: var(--primary-color);
            background: var(--text-light);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            font-weight: 500;
        }

        .profile-name {
            color: var(--text-light);
            font-size: 14px;
        }



        /* punya rifqi */
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


        @media (max-width: 768px) {
            .navbar-custom .nav-link {
                margin: 0.2rem;
                padding: 0.3rem 0.8rem;
            }

            .navbar-custom .nav-link i {
                font-size: 1.2rem;
            }

            .header-title {
                font-size: 1.5rem;
            }

            .job-card {
                padding: 1rem;
            }
        }
    </style>
</head>
<body>
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
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/jobopportunity') }}">Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/faq') }}">FaQ</a>
                    </li>
                </ul>

                <div class="profile-section">
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="profile-circle me-2">
                                <span class="profile-initial"></span>
                            </div>
                            <span class="profile-name">{{ Auth::user() ? Auth::user()->name : 'Guest' }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            @auth
                                <li><a class="dropdown-item" href="{{ route('account') }}">Profile</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </li>
                            @else
                                <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                                <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                            @endauth
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </nav>
    <!-- Main Content -->
    <main class="py-4">
        @yield('content')
</body>
</html>
