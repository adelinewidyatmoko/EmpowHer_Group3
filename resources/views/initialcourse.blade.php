<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educational Courses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
    <style>
        .navbar-brand {
    font-weight: bold;
    color: #fff !important;
}

.header-section {
    background-color: #8B4E52;
    color: white;
    padding: 2rem 0;
    border-radius: 0 0 20px 20px;
}

.profile-section {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.profile-img {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background-color: #ddd;
}

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

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">EMPOWHER</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Courses</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center">
                    <span class="text-white me-3">Welcome, User!</span>
                    <img src="https://via.placeholder.com/40" class="rounded-circle" alt="Profile">
                </div>
            </div>
        </div>
    </nav>

    <header class="header-section mb-5">
        <div class="container">
            <div class="profile-section">
                <div>
                    <h1>Welcome Back!</h1>
                    <p>Ready for your next lesson?</p>
                </div>
            </div>
        </div>
    </header>

    <main class="container">
        <section class="mb-5">
            <h2 class="mb-4">Courses</h2>
            <div class="row mb-5">
                <div class="col-md-3">
                    <div class="platform-card">
                        <img src="https://www.langoly.com/wp-content/uploads/2021/09/coursera-logo.png" class="platform-icon" alt="Coursera">
                        <span class="platform-badge">1</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="platform-card">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e3/Udemy_logo.svg/2560px-Udemy_logo.svg.png" class="platform-icon" alt="Udemy">
                        <span class="platform-badge red">2</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="platform-card">
                        <img src="https://cdn.iconscout.com/icon/free/png-256/free-google-160-189824.png" class="platform-icon" alt="Google">
                        <span class="platform-badge green">1</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="platform-card">
                        <img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" class="platform-icon" alt="LinkedIn">
                        <span class="platform-badge">3</span>
                    </div>
                </div>
            </div>

            <h2 class="mb-4">Top Categories</h2>
            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="category-card">
                        <i class="bi bi-laptop category-icon"></i>
                        <h5>Development</h5>
                        <p>12 Courses</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="category-card">
                        <i class="bi bi-graph-up category-icon"></i>
                        <h5>Marketing</h5>
                        <p>12 Courses</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="category-card">
                        <i class="bi bi-palette category-icon"></i>
                        <h5>Design</h5>
                        <p>11 Courses</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="category-card">
                        <i class="bi bi-camera category-icon"></i>
                        <h5>Photography</h5>
                        <p>14 Courses</p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2>Featured Courses</h2>
                <a href="#" class="btn btn-outline-primary">View All</a>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card course-card">
                        <img src="https://via.placeholder.com/350x200" class="card-img-top course-image" alt="Course">
                        <div class="card-body">
                            <h5 class="card-title">Beginner's Guide to Design</h5>
                            <div class="mb-2">
                                <span class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                </span>
                                <small class="text-muted">(1200 Ratings)</small>
                            </div>
                            <p class="card-text">22 Total Hours • 155 Lectures • Beginner</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="h5 mb-0">$149.9</span>
                                <button class="btn btn-primary">Enroll Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- More course cards can be added here -->
            </div>
        </section>

        <section class="mb-5">
            <h2 class="mb-4">Job Newest</h2>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="job-card">
                        <div class="d-flex align-items-center mb-3">
                            <div class="job-icon">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/8/83/Telegram_2019_Logo.svg" alt="Company Logo" class="rounded-circle">
                            </div>
                            <div class="ms-3">
                                <h5 class="mb-1">QA Marketing</h5>
                                <p class="text-muted mb-0">Remote • Beginner Level</p>
                                <p class="text-muted mb-0">Woman Required</p>
                            </div>
                        </div>
                        <div class="job-tags mb-3">
                            <span class="badge rounded-pill bg-light text-dark">Design</span>
                            <span class="badge rounded-pill bg-light text-dark">Content</span>
                            <span class="badge rounded-pill bg-light text-dark">Stat</span>
                        </div>
                        <p class="job-description">QA Marketing works to ensure the whole progress of marketing going on. With a specification on statistics and Tech related</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
