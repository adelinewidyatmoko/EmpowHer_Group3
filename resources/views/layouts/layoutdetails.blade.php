<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Details - Empowher</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
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

   @yield('jobheader')
    <!-- Job Header -->

   @yield('jobdetails')
    <!-- Job Details -->

    @yield('scripts')
</body>
</html>
