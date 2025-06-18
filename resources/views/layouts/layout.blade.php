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
          --primary-color: #a67c7c;
            --secondary-color: #d4a4a4;
            --accent-color: #4285f4;
            --text-dark: #333;
            --bg-light: #f5f5f5;
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
    <!-- Main Content -->
    <main class="py-4">
        @yield('content')
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal - Software Engineering</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
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

        .job-card {
            background-color: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            cursor: pointer;
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
    <!-- Main Content -->
    <main class="py-4">
        @yield('content')
</body>
</html>
