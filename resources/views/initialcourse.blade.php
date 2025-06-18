@extends('layouts.layout')

@section('content')


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

@endsection
