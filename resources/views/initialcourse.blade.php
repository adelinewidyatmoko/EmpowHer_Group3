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
    
    .slider-control {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        margin: 0 10px;
        opacity: 0.6;
        background-color: rgba(255, 255, 255, 0.8);
    }
    
    .slider-control:hover {
        background-color: #8B4E52;
        color: white;
        opacity: 0.8;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);
    }
    
    .prev-btn {
        left: 10px;
    }
    
    .next-btn {
        right: 10px;
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

            <h2 class="fw-bold mb-4">Top Categories</h2>
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

        <section class="mt-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold">Featured Courses</h2>
                <a href="#" class="btn btn-outline-primary">View All</a>
            </div>
            
            <div class="position-relative">
                <div class="course-slider row flex-nowrap overflow-hidden">
                <div class="col-md-4 mb-4">
                    <div class="course-card">
                        <div class="course-header r-programming">
                            <div class="course-logo">Coursera</div>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-graduation-cap me-2" style="font-size: 24px;"></i>
                                <span class="fw-bold">Data Science with R</span>
                            </div>
                        </div>
                        <div class="course-content">
                            <h5 class="course-title">Master data analysis with R Programming</h5>
                            <p class="course-description">Powerful, open-source programming and software environment widely used in data science for statistical analysis, visualization, and more.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="fw-bold">8 weeks</span>
                                </div>
                                <a href="#" class="btn btn-sm btn-outline-primary">View Course</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="course-card">
                        <div class="course-header excel">
                            <div class="course-logo">Microsoft</div>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-table me-2" style="font-size: 24px;"></i>
                                <span class="fw-bold">Excel for Data Analysis</span>
                            </div>
                        </div>
                        <div class="course-content">
                            <h5 class="course-title">Master data analysis with Excel</h5>
                            <p class="course-description">Learn how to use Excel for data analysis, visualization, and business intelligence with practical examples and case studies.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="fw-bold">6 weeks</span>
                                </div>
                                <a href="#" class="btn btn-sm btn-outline-primary">View Course</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="course-card">
                        <div class="course-header python">
                            <div class="course-logo">Udemy</div>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-code me-2" style="font-size: 24px;"></i>
                                <span class="fw-bold">Python for Data Science</span>
                            </div>
                        </div>
                        <div class="course-content">
                            <h5 class="course-title">Learn Python for data analysis and visualization</h5>
                            <p class="course-description">Comprehensive course on using Python for data analysis, machine learning, and data visualization with pandas, numpy, and matplotlib.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="fw-bold">10 weeks</span>
                                </div>
                                <a href="#" class="btn btn-sm btn-outline-primary">View Course</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="course-card">
                        <div class="course-header" style="background: linear-gradient(135deg, #94576E, #7A4A5A);">
                            <div class="course-logo">LinkedIn</div>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-chart-line me-2" style="font-size: 24px;"></i>
                                <span class="fw-bold">Business Analytics</span>
                            </div>
                        </div>
                        <div class="course-content">
                            <h5 class="course-title">Business Analytics for Decision Making</h5>
                            <p class="course-description">Learn how to use data analysis to make better business decisions and drive strategic initiatives with practical case studies and real-world examples.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="fw-bold">7 weeks</span>
                                </div>
                                <a href="#" class="btn btn-sm btn-outline-primary">View Course</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="course-card">
                        <div class="course-header" style="background: linear-gradient(135deg, #94576E, #7A4A5A);">
                            <div class="course-logo">Google</div>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-mobile-alt me-2" style="font-size: 24px;"></i>
                                <span class="fw-bold">UX Design</span>
                            </div>
                        </div>
                        <div class="course-content">
                            <h5 class="course-title">User Experience Design Fundamentals</h5>
                            <p class="course-description">Master the principles of user-centered design and learn to create interfaces that are both beautiful and functional for mobile and web applications.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="fw-bold">9 weeks</span>
                                </div>
                                <a href="#" class="btn btn-sm btn-outline-primary">View Course</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="course-card">
                        <div class="course-header" style="background: linear-gradient(135deg, #94576E, #7A4A5A);">
                            <div class="course-logo">Coursera</div>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-brain me-2" style="font-size: 24px;"></i>
                                <span class="fw-bold">Machine Learning</span>
                            </div>
                        </div>
                        <div class="course-content">
                            <h5 class="course-title">Machine Learning for Women in Tech</h5>
                            <p class="course-description">Learn the fundamentals of machine learning algorithms and applications with a focus on empowering women to excel in AI and data science careers.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="fw-bold">12 weeks</span>
                                </div>
                                <a href="#" class="btn btn-sm btn-outline-primary">View Course</a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                
                <button class="btn btn-light slider-control prev-btn position-absolute top-50 start-0 translate-middle-y" style="z-index: 10; opacity: 0.6;">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="btn btn-light slider-control next-btn position-absolute top-50 end-0 translate-middle-y" style="z-index: 10; opacity: 0.6;">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </section>

        <section class="mt-5 mb-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold">Job Newest</h2>
                <a href="#" class="btn btn-outline-primary">View All</a>
            </div>
            
            <div class="position-relative">
                <div class="job-slider row flex-nowrap overflow-hidden">
                    <!-- First slide: 6 jobs (3x2) -->
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-4 mb-4">
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
                                    <p class="job-description">QA Marketing works to ensure the whole progress of marketing going on. With a specification on statistics and Tech related</p>
                                </div>
                            </div>
                            
                            <div class="col-md-4 mb-4">
                                <div class="job-card">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="job-icon">
                                            <img src="https://cdn-icons-png.flaticon.com/512/174/174874.png" alt="Company Logo" class="rounded-circle">
                                        </div>
                                        <div class="ms-3">
                                            <h5 class="mb-1">Data Analyst</h5>
                                            <p class="text-muted mb-0">Remote • Intermediate Level</p>
                                            <p class="text-muted mb-0">Woman Required</p>
                                        </div>
                                    </div>
                                    <p class="job-description">Looking for a data analyst with proficiency in Excel, SQL, and visualization tools to work on women's health data projects.</p>
                                </div>
                            </div>
                            
                            <div class="col-md-4 mb-4">
                                <div class="job-card">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="job-icon">
                                            <img src="https://cdn-icons-png.flaticon.com/512/2504/2504903.png" alt="Company Logo" class="rounded-circle">
                                        </div>
                                        <div class="ms-3">
                                            <h5 class="mb-1">Frontend Developer</h5>
                                            <p class="text-muted mb-0">Hybrid • Senior Level</p>
                                            <p class="text-muted mb-0">Woman Required</p>
                                        </div>
                                    </div>
                                    <p class="job-description">Frontend developer with experience in modern frameworks needed to build educational platform focusing on women's empowerment.</p>
                                </div>
                            </div>
                            
                            <div class="col-md-4 mb-4">
                                <div class="job-card">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="job-icon">
                                            <img src="https://cdn-icons-png.flaticon.com/512/5969/5969226.png" alt="Company Logo" class="rounded-circle">
                                        </div>
                                        <div class="ms-3">
                                            <h5 class="mb-1">UX Designer</h5>
                                            <p class="text-muted mb-0">Remote • Mid Level</p>
                                            <p class="text-muted mb-0">Woman Required</p>
                                        </div>
                                    </div>
                                    <p class="job-description">UX Designer needed to create intuitive interfaces for women's career advancement platform with focus on accessibility.</p>
                                </div>
                            </div>
                            
                            <div class="col-md-4 mb-4">
                                <div class="job-card">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="job-icon">
                                            <img src="https://cdn-icons-png.flaticon.com/512/5968/5968853.png" alt="Company Logo" class="rounded-circle">
                                        </div>
                                        <div class="ms-3">
                                            <h5 class="mb-1">Project Manager</h5>
                                            <p class="text-muted mb-0">Remote • Senior Level</p>
                                            <p class="text-muted mb-0">Woman Required</p>
                                        </div>
                                    </div>
                                    <p class="job-description">Project manager with experience in tech-focused education platforms needed for women's skills development initiative.</p>
                                </div>
                            </div>
                            
                            <div class="col-md-4 mb-4">
                                <div class="job-card">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="job-icon">
                                            <img src="https://cdn-icons-png.flaticon.com/512/888/888856.png" alt="Company Logo" class="rounded-circle">
                                        </div>
                                        <div class="ms-3">
                                            <h5 class="mb-1">Content Creator</h5>
                                            <p class="text-muted mb-0">Remote • Entry Level</p>
                                            <p class="text-muted mb-0">Woman Required</p>
                                        </div>
                                    </div>
                                    <p class="job-description">Content creator for developing educational materials focused on women's career advancement in tech industries.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Second slide: 6 more jobs (3x2) -->
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <div class="job-card">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="job-icon">
                                            <img src="https://cdn-icons-png.flaticon.com/512/5968/5968282.png" alt="Company Logo" class="rounded-circle">
                                        </div>
                                        <div class="ms-3">
                                            <h5 class="mb-1">Backend Developer</h5>
                                            <p class="text-muted mb-0">Hybrid • Senior Level</p>
                                            <p class="text-muted mb-0">Woman Required</p>
                                        </div>
                                    </div>
                                    <p class="job-description">Backend developer with Node.js and database experience for women's education platform to handle course management and user data.</p>
                                </div>
                            </div>
                            
                            <div class="col-md-4 mb-4">
                                <div class="job-card">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="job-icon">
                                            <img src="https://cdn-icons-png.flaticon.com/512/732/732190.png" alt="Company Logo" class="rounded-circle">
                                        </div>
                                        <div class="ms-3">
                                            <h5 class="mb-1">Digital Marketer</h5>
                                            <p class="text-muted mb-0">Remote • Mid Level</p>
                                            <p class="text-muted mb-0">Woman Required</p>
                                        </div>
                                    </div>
                                    <p class="job-description">Digital marketing specialist needed to promote women's educational programs across various channels and engage with the community.</p>
                                </div>
                            </div>
                            
                            <div class="col-md-4 mb-4">
                                <div class="job-card">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="job-icon">
                                            <img src="https://cdn-icons-png.flaticon.com/512/2631/2631384.png" alt="Company Logo" class="rounded-circle">
                                        </div>
                                        <div class="ms-3">
                                            <h5 class="mb-1">Data Scientist</h5>
                                            <p class="text-muted mb-0">Remote • Senior Level</p>
                                            <p class="text-muted mb-0">Woman Required</p>
                                        </div>
                                    </div>
                                    <p class="job-description">Data scientist needed to develop models for analyzing gender equity in workplaces and create data-driven strategies for improvement.</p>
                                </div>
                            </div>
                            
                            <div class="col-md-4 mb-4">
                                <div class="job-card">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="job-icon">
                                            <img src="https://cdn-icons-png.flaticon.com/512/2721/2721287.png" alt="Company Logo" class="rounded-circle">
                                        </div>
                                        <div class="ms-3">
                                            <h5 class="mb-1">Community Manager</h5>
                                            <p class="text-muted mb-0">Remote • Mid Level</p>
                                            <p class="text-muted mb-0">Woman Required</p>
                                        </div>
                                    </div>
                                    <p class="job-description">Community manager to build and nurture women's professional networks in tech, finance, and entrepreneurship fields.</p>
                                </div>
                            </div>
                            
                            <div class="col-md-4 mb-4">
                                <div class="job-card">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="job-icon">
                                            <img src="https://cdn-icons-png.flaticon.com/512/9464/9464086.png" alt="Company Logo" class="rounded-circle">
                                        </div>
                                        <div class="ms-3">
                                            <h5 class="mb-1">HR Specialist</h5>
                                            <p class="text-muted mb-0">Hybrid • Mid Level</p>
                                            <p class="text-muted mb-0">Woman Required</p>
                                        </div>
                                    </div>
                                    <p class="job-description">HR specialist with experience in DEI initiatives to develop programs for women's professional advancement in corporate settings.</p>
                                </div>
                            </div>
                            
                            <div class="col-md-4 mb-4">
                                <div class="job-card">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="job-icon">
                                            <img src="https://cdn-icons-png.flaticon.com/512/2762/2762270.png" alt="Company Logo" class="rounded-circle">
                                        </div>
                                        <div class="ms-3">
                                            <h5 class="mb-1">Career Coach</h5>
                                            <p class="text-muted mb-0">Remote • Senior Level</p>
                                            <p class="text-muted mb-0">Woman Required</p>
                                        </div>
                                    </div>
                                    <p class="job-description">Career coach specializing in women's professional development to provide mentoring and guidance for career transitions and growth.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <button class="btn btn-light slider-control prev-btn position-absolute top-50 start-0 translate-middle-y" style="z-index: 10; opacity: 0.6;">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="btn btn-light slider-control next-btn position-absolute top-50 end-0 translate-middle-y" style="z-index: 10; opacity: 0.6;">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Featured Courses Slider
            const courseSlider = document.querySelector('.course-slider');
            const coursePrevBtn = document.querySelector('.course-slider').parentElement.querySelector('.prev-btn');
            const courseNextBtn = document.querySelector('.course-slider').parentElement.querySelector('.next-btn');
            
            courseNextBtn.addEventListener('click', function() {
                courseSlider.scrollBy({
                    left: 300,
                    behavior: 'smooth'
                });
            });
            
            coursePrevBtn.addEventListener('click', function() {
                courseSlider.scrollBy({
                    left: -300,
                    behavior: 'smooth'
                });
            });
            
            // Job Newest Slider
            const jobSlider = document.querySelector('.job-slider');
            const jobPrevBtn = document.querySelector('.job-slider').parentElement.querySelector('.prev-btn');
            const jobNextBtn = document.querySelector('.job-slider').parentElement.querySelector('.next-btn');
            
            jobNextBtn.addEventListener('click', function() {
                jobSlider.scrollBy({
                    left: jobSlider.offsetWidth,
                    behavior: 'smooth'
                });
            });
            
            jobPrevBtn.addEventListener('click', function() {
                jobSlider.scrollBy({
                    left: -jobSlider.offsetWidth,
                    behavior: 'smooth'
                });
            });
            
            // Add hover effect to slider controls
            const sliderControls = document.querySelectorAll('.slider-control');
            sliderControls.forEach(control => {
                control.addEventListener('mouseenter', function() {
                    this.style.opacity = '0.9';
                });
                control.addEventListener('mouseleave', function() {
                    this.style.opacity = '0.6';
                });
            });
        });
    </script>
</body>
</html>
