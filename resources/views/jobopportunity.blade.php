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
            --bg-light: #f8f9fa;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--bg-light);
        }

        .navbar-custom {
            background-color: var(--primary-color);
            padding: 1rem 0;
        }

        .navbar-custom .nav-link {
            color: white !important;
            font-weight: 500;
            text-align: center;
            padding: 0.5rem 1rem;
            margin: 0 0.5rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .navbar-custom .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: white !important;
        }

        .navbar-custom .nav-link i {
            display: block;
            font-size: 1.5rem;
            margin-bottom: 0.3rem;
        }

        .profile-circle {
            width: 50px;
            height: 50px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-color);
            font-size: 1.5rem;
        }

        .sidebar {
            background-color: white;
            border-radius: 15px;
            padding: 1.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            height: fit-content;
        }

        .category-btn {
            display: block;
            width: 100%;
            padding: 12px 20px;
            margin-bottom: 10px;
            border: none;
            border-radius: 25px;
            font-weight: 500;
            text-align: left;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .category-btn.active {
            background-color: var(--accent-color);
            color: white;
        }

        .category-btn:not(.active) {
            background-color: var(--primary-color);
            color: white;
        }

        .category-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .main-content {
            background-color: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .header-title {
            color: var(--text-dark);
            font-weight: 700;
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }

        .header-subtitle {
            color: #666;
            font-size: 1.1rem;
            margin-bottom: 1rem;
        }

        .header-description {
            color: #888;
            font-size: 0.95rem;
            margin-bottom: 2rem;
        }

        .job-card {
            background: linear-gradient(135deg, var(--secondary-color), #e8c5c5);
            border-radius: 15px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border: none;
        }

        .job-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .job-avatar {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            background: linear-gradient(45deg, #667eea, #764ba2);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            margin-right: 1rem;
        }

        .job-title {
            font-weight: 700;
            font-size: 1.3rem;
            color: var(--text-dark);
            margin-bottom: 0.3rem;
        }

        .job-company {
            color: #666;
            font-size: 0.95rem;
            margin-bottom: 1rem;
        }

        .skill-tag {
            display: inline-block;
            background-color: var(--accent-color);
            color: white;
            padding: 0.4rem 0.8rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
            margin-right: 0.5rem;
            margin-bottom: 0.5rem;
        }

        .emoji {
            font-size: 1.5rem;
            margin-left: 0.5rem;
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
            <div class="navbar-nav mx-auto">
                <a class="nav-link" href="#">
                    <i class="fas fa-home"></i>
                    Home
                </a>
                <a class="nav-link" href="#">
                    <i class="fas fa-award"></i>
                    Courses
                </a>
                <a class="nav-link" href="#">
                    <i class="fas fa-briefcase"></i>
                    Job
                </a>
            </div>
            <div class="profile-circle">
                <i class="fas fa-user"></i>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-4">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-lg-3 col-md-4 mb-4">
                <div class="sidebar">
                    <a href="#" class="category-btn active">Tech</a>
                    <a href="#" class="category-btn">Marketing</a>
                    <a href="#" class="category-btn">Sales</a>
                    <a href="#" class="category-btn">Tutoring</a>
                    <a href="#" class="category-btn">Freelance</a>
                </div>
            </div>

            <!-- Job Listings -->
            <div class="col-lg-9 col-md-8">
                <div class="main-content">
                    <h1 class="header-title">
                        Software Engineering 
                        <span class="emoji">💡</span>
                    </h1>
                    <p class="header-subtitle">Currently, the highest number of job openings in the Tech field</p>
                    <p class="header-description">
                        <i class="fas fa-rocket" style="color: #ff6b6b; margin-right: 8px;"></i>
                        Companies are actively hiring for roles in backend, frontend, and full-stack development
                    </p>

                    <!-- Job Cards -->
                    <div class="job-card">
                        <div class="d-flex">
                            <div class="job-avatar">
                                <i class="fas fa-laptop-code"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h3 class="job-title">Software Developer</h3>
                                <p class="job-company">Remote.</p>
                                <p class="job-company">Rp 7.000.000 - 10.000.000</p>
                            </div>
                        </div>
                    </div>

                    <div class="job-card">
                        <div class="d-flex">
                            <div class="job-avatar">
                                <i class="fas fa-code"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h3 class="job-title">Software Developer</h3>
                                <p class="job-company">Remote.</p>
                                <p class="job-company">Rp 7.000.000 - 10.000.000</p>
                            </div>
                        </div>
                    </div>

                    <div class="job-card">
                        <div class="d-flex">
                            <div class="job-avatar">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h3 class="job-title">Software Developer</h3>
                                <p class="job-company">Remote.</p>
                                <p class="job-company">Rp 7.000.000 - 10.000.000</p>
                            </div>
                        </div>
                    </div>

                    <div class="job-card">
                        <div class="d-flex">
                            <div class="job-avatar">
                                <i class="fas fa-server"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h3 class="job-title">Software Developer</h3>
                                <p class="job-company">Remote.</p>
                                <p class="job-company">Rp 7.000.000 - 10.000.000</p>
                            </div>
                        </div>
                    </div>

                    <div class="job-card">
                        <div class="d-flex">
                            <div class="job-avatar">
                                <i class="fas fa-database"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h3 class="job-title">Software Developer</h3>
                                <p class="job-company">Remote.</p>
                                <p class="job-company">Rp 7.000.000 - 10.000.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script>
        // Add smooth scrolling and interactive effects
        document.addEventListener('DOMContentLoaded', function() {
            // Category button interactions
            const categoryBtns = document.querySelectorAll('.category-btn');
            categoryBtns.forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    categoryBtns.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');
                });
            });

            // Job card hover effects
            const jobCards = document.querySelectorAll('.job-card');
            jobCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.cursor = 'pointer';
                });
            });

            // Animate elements on page load
            const animateElements = document.querySelectorAll('.job-card, .sidebar, .main-content');
            animateElements.forEach((element, index) => {
                element.style.opacity = '0';
                element.style.transform = 'translateY(20px)';
                
                setTimeout(() => {
                    element.style.transition = 'all 0.6s ease';
                    element.style.opacity = '1';
                    element.style.transform = 'translateY(0)';
                }, index * 100);
            });
        });
    </script>
</body>
</html>