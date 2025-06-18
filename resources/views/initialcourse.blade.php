<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educational Courses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
    <style>
        .navbar {
    padding: 15px 0;
}

.navbar-brand {
    font-weight: bold;
    color: #fff !important;
    font-size: 1.5rem;
}

.nav-link {
    color: rgba(255, 255, 255, 0.85) !important;
    font-size: 1rem;
    margin: 0 10px;
}

.nav-link:hover {
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
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
        }

        .course-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);
        }

        .course-header {
            background: linear-gradient(135deg, #94576E, #7A4A5A);
            color: white;
            padding: 15px;
            position: relative;
            display: flex;
            align-items: center;
        }

        .course-header.r-programming {
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

        .course-description {
            font-size: 13px;
            color: #666;
            line-height: 1.5;
            margin-bottom: 20px;
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
    background: white;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    overflow: hidden;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.job-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);
}

.job-header {
    background: linear-gradient(135deg, #94576E, #7A4A5A);
    color: white;
    padding: 15px;
    position: relative;
    display: flex;
    align-items: center;
}

.job-header.r-programming {
    background: linear-gradient(135deg, #94576E, #7A4A5A);
}

.job-content {
    padding: 25px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}

.job-salary {
    font-size: 14px;
    color: #28a745;
    font-weight: 600;
}

.job-requirements {
    font-size: 14px;
    color: #666;
    line-height: 1.5;
    word-wrap: break-word;
}

.job-card-wrapper {
    flex-shrink: 0;
}

.job-slider {
    -ms-overflow-style: none;
    scrollbar-width: none;
    padding: 10px 40px;
}

.job-slider::-webkit-scrollbar {
    display: none;
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

    /* Slider Styles */
    .course-slider, .job-slider {
        scroll-behavior: smooth;
        -ms-overflow-style: none;  /* Hide scrollbar IE and Edge */
        scrollbar-width: none;  /* Hide scrollbar Firefox */
        padding: 10px 40px;
    }
    
    .course-slider::-webkit-scrollbar, .job-slider::-webkit-scrollbar {
        display: none; /* Hide scrollbar Chrome, Safari, Opera */
    }

    
    .prev-btn {
        left: 10px;
    }
    
    .next-btn {
        right: 10px;
    }

    .view-course-btn {
            background-color: #94576E;
            color: white;
            text-decoration: none;
            padding: 8px 20px;
            border-radius: 25px;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.3s ease;
            display: inline-block;
            text-align: center;
        }
        
        .view-course-btn:hover {
            background-color: #7A4A5A;
            color: white;
            transform: translateY(-2px);
        }

        .apply-btn {
            background-color: #94576E;
            color: white;
            text-decoration: none;
            padding: 8px 20px;
            border-radius: 25px;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.3s ease;
            display: inline-block;
            text-align: center;
        }
        
        .apply-btn:hover {
            background-color: #7A4A5A;
            color: white;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #8B4E52; color: white;">
        <div class="container">
            <a class="navbar-brand text-white fw-bold" href="#">EmpowHer</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Categories</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center">
                    <div class="bg-light rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                        <i class="fas fa-user"></i>
                    </div>
                    <span class="text-white ms-2">Guest</span>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h2 class="fw-bold mb-4">Partner</h2>
            <div class="row mb-5">
                <div class="col-md-3">
                    <a href="https://www.coursera.org" target="_blank" class="text-decoration-none">
                        <div class="platform-card">
                            <img src="https://www.langoly.com/wp-content/uploads/2021/09/coursera-logo.png" class="platform-icon" alt="Coursera">
                            <span class="platform-badge">1</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="https://www.udemy.com" target="_blank" class="text-decoration-none">
                        <div class="platform-card">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e3/Udemy_logo.svg/2560px-Udemy_logo.svg.png" class="platform-icon" alt="Udemy">
                            <span class="platform-badge red">2</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="https://www.google.com" target="_blank" class="text-decoration-none">
                        <div class="platform-card">
                            <img src="https://cdn.iconscout.com/icon/free/png-256/free-google-160-189824.png" class="platform-icon" alt="Google">
                            <span class="platform-badge green">1</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="https://www.linkedin.com" target="_blank" class="text-decoration-none">
                        <div class="platform-card">
                            <img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" class="platform-icon" alt="LinkedIn">
                            <span class="platform-badge">3</span>
                        </div>
                    </a>
                </div>
            </div>

          

        <section class="mt-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold">Featured Courses</h2>
                <a href="#" class="btn btn-outline-primary">View All</a>
            </div>
            
            <div class="row">
                @forelse($courses as $course)
                <div class="col-md-6 col-lg-4">
                    <div class="course-card">
                        <div class="course-header r-programming">
                            <div class="course-logo">EmpowHer</div>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-graduation-cap me-2" style="font-size: 24px;"></i>
                                <span class="fw-bold">{{ $course->title }}</span>
                            </div>
                        </div>
                        
                        <div class="course-content">
                            <div class="fw-bold mb-3">{{ $course->title }}</div>
                            <div class="course-description mb-3">{{ Str::limit($course->descirption, 120) }}</div>
                            
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="text-muted small">
                                    <i class="fas fa-clock me-1"></i>8 weeks
                                </div>
                                <a href="{{ route('courses.show', $course->courseid) }}" class="apply-btn">
                                    View Course
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12">
                    <div class="alert alert-info">
                        No featured courses available at the moment.
                    </div>
                </div>
                @endforelse
            </div>
        </section>

        <section class="mt-5 mb-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold">Job Newest</h2>
                <a href="#" class="btn btn-outline-primary">View All</a>
            </div>
            
            <div class="job-slider d-flex overflow-auto" id="jobSlider" style="scroll-behavior: smooth; gap: 25px;">
                @forelse($jobs as $job)
                <div class="job-card-wrapper" style="min-width: 420px; max-width: 420px;">
                    <div class="job-card">
                        <div class="job-header r-programming">
                            <div class="course-logo">EmpowHer</div>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-briefcase me-2" style="font-size: 24px;"></i>
                                <span class="fw-bold">{{ $job->title }}</span>
                            </div>
                        </div>
                        
                        <div class="job-content">
                            <div class="fw-bold mb-2">{{ $job->placement }}</div>
                            <div class="job-salary mb-3">
                                <i class="fas fa-dollar-sign me-1"></i>{{ $job->salary }}
                            </div>
                            <div class="job-requirements mb-3">
                                <i class="fas fa-list-ul me-1"></i>{{ Str::limit($job->requirements, 100) }}
                            </div>
                            
                            <div class="d-flex align-items-center justify-content-between mt-auto">
                                <div class="text-muted small">
                                    <i class="fas fa-map-marker-alt me-1"></i>{{ $job->placement }}
                                </div>
                                <a href="{{ route('jobs.show', $job->idjobopportunity) }}" class="apply-btn">
                                    View Job
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12">
                    <div class="alert alert-info">
                        No job opportunities available at the moment.
                    </div>
                </div>
                @endforelse
            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>