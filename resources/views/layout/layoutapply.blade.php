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
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <div class="ms-5 d-flex">
            <div>
            <a class="navbar-brand fw-bold" href="#">EmpowHer</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Categories</a>
                    </li>
                </ul>
                </div>
                </div>
                <div class="profile-section me-5">
                    <div class="profile-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                    <span class="text-white d-none d-md-inline">Guest User</span>
                </div>
            </div>
    </nav>


    <!-- Main Content -->
    <main class="py-4">
       @yield('content')

       

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>