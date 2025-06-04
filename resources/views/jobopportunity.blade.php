<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Search - Software Engineering</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
        
        .header-nav {
            background-color: #b5868a;
            padding: 15px 0;
        }
        
        .nav-item {
            color: white;
            text-decoration: none;
            margin: 0 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: 14px;
        }
        
        .nav-item i {
            font-size: 20px;
            margin-bottom: 5px;
        }
        
        .nav-item:hover {
            color: white;
            opacity: 0.8;
        }
        
        .profile-circle {
            width: 40px;
            height: 40px;
            background-color: #d4c4c4;
            border-radius: 50%;
        }
        
        .sidebar {
            background-color: white;
            border-radius: 10px;
            padding: 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            height: fit-content;
        }
        
        .sidebar-btn {
            display: block;
            width: 100%;
            padding: 12px 20px;
            border: none;
            background: none;
            text-align: left;
            border-radius: 25px;
            margin: 3px 0;
            font-weight: 500;
            text-decoration: none;
            color: #333;
        }
        
        .sidebar-btn.active {
            background-color: #4285f4;
            color: white;
        }
        
        .sidebar-btn:not(.active) {
            background-color: #b5868a;
            color: white;
        }
        
        .sidebar-btn:hover {
            opacity: 0.9;
        }
        
        .content-area {
            background-color: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
        }
        
        .job-card {
            background: linear-gradient(135deg, #e8b4b8 0%, #d4a5aa 100%);
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 20px;
            border: none;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
        
        .job-avatar {
            width: 60px;
            height: 60px;
            background-color: #f0f0f0;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
        }
        
        .job-title {
            font-size: 18px;
            font-weight: 600;
            color: #333;
            margin: 0;
        }
        
        .company-name {
            color: #666;
            font-size: 14px;
            margin: 2px 0 0 0;
        }
        
        .job-location {
            background-color: rgba(255,255,255,0.3);
            color: #555;
            padding: 3px 8px;
            border-radius: 4px;
            font-size: 12px;
            margin-top: 10px;
            display: inline-block;
        }
        
        .skill-tags {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }
        
        .skill-tag {
            background-color: #4285f4;
            color: white;
            padding: 4px 12px;
            border-radius: 15px;
            font-size: 12px;
            border: none;
        }
        
        .page-title {
            font-size: 28px;
            font-weight: 700;
            color: #333;
            margin-bottom: 5px;
        }
        
        .page-subtitle {
            color: #666;
            font-size: 16px;
            margin-bottom: 8px;
        }
        
        .hiring-info {
            color: #888;
            font-size: 14px;
            display: flex;
            align-items: center;
            margin-bottom: 25px;
        }
        
        .hiring-info i {
            margin-right: 8px;
        }
    </style>
</head>
<body>
    <!-- Header Navigation -->
    <nav class="header-nav">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center position-relative">
                <div class="d-flex">
                    <a href="#" class="nav-item">
                        <i class="fas fa-home"></i>
                        Home
                    </a>
                    <a href="#" class="nav-item">
                        <i class="fas fa-award"></i>
                        Courses
                    </a>
                    <a href="#" class="nav-item">
                        <i class="fas fa-briefcase"></i>
                        Job
                    </a>
                </div>
                <div class="position-absolute end-0">
                    <div class="profile-circle"></div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3">
                <div class="sidebar">
                    <div class="p-3">
                        <a href="#" class="sidebar-btn active">Tech</a>
                        <a href="#" class="sidebar-btn">Marketing</a>
                        <a href="#" class="sidebar-btn">Sales</a>
                        <a href="#" class="sidebar-btn">Tutoring</a>
                        <a href="#" class="sidebar-btn">Freelance</a>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-md-9">
                <div class="content-area">
                    <div class="mb-4">
                        <h1 class="page-title">
                            Software Engineering 
                            <span style="font-size: 24px;">💡</span>
                        </h1>
                        <p class="page-subtitle">Currently, the highest number of job openings in the Tech !</p>
                        <div class="hiring-info">
                            <i class="fas fa-chart-line" style="color: #ff6b6b;"></i>
                            Companies are actively hiring for roles in backend, frontend, and full-stack development
                        </div>
                    </div>

                    <!-- Job Cards -->
                    <div class="job-card">
                        <div class="d-flex">
                            <div class="job-avatar">
                                <i class="fas fa-laptop-code" style="font-size: 24px; color: #666;"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h3 class="job-title">Software Developer</h3>
                                <p class="company-name">PT Binekatama</p>
                                <div class="job-location">Remote</div>
                                <div class="skill-tags mt-3">
                                    <span class="skill-tag">Express.js</span>
                                    <span class="skill-tag">React.js</span>
                                    <span class="skill-tag">C++ Programming</span>
                                    <span class="skill-tag">Data Analytics</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="job-card">
                        <div class="d-flex">
                            <div class="job-avatar">
                                <i class="fas fa-laptop-code" style="font-size: 24px; color: #666;"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h3 class="job-title">Software Developer</h3>
                                <p class="company-name">PT Binekatama</p>
                                <div class="job-location">Remote</div>
                                <div class="skill-tags mt-3">
                                    <span class="skill-tag">Express.js</span>
                                    <span class="skill-tag">React.js</span>
                                    <span class="skill-tag">C++ Programming</span>
                                    <span class="skill-tag">Data Analytics</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="job-card">
                        <div class="d-flex">
                            <div class="job-avatar">
                                <i class="fas fa-laptop-code" style="font-size: 24px; color: #666;"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h3 class="job-title">Software Developer</h3>
                                <p class="company-name">PT Binekatama</p>
                                <div class="job-location">Remote</div>
                                <div class="skill-tags mt-3">
                                    <span class="skill-tag">Express.js</span>
                                    <span class="skill-tag">React.js</span>
                                    <span class="skill-tag">C++ Programming</span>
                                    <span class="skill-tag">Data Analytics</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="job-card">
                        <div class="d-flex">
                            <div class="job-avatar">
                                <i class="fas fa-laptop-code" style="font-size: 24px; color: #666;"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h3 class="job-title">Software Developer</h3>
                                <p class="company-name">PT Binekatama</p>
                                <div class="job-location">Remote</div>
                                <div class="skill-tags mt-3">
                                    <span class="skill-tag">Express.js</span>
                                    <span class="skill-tag">React.js</span>
                                    <span class="skill-tag">C++ Programming</span>
                                    <span class="skill-tag">Data Analytics</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="job-card">
                        <div class="d-flex">
                            <div class="job-avatar">
                                <i class="fas fa-laptop-code" style="font-size: 24px; color: #666;"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h3 class="job-title">Software Developer</h3>
                                <p class="company-name">PT Binekatama</p>
                                <div class="job-location">Remote</div>
                                <div class="skill-tags mt-3">
                                    <span class="skill-tag">Express.js</span>
                                    <span class="skill-tag">React.js</span>
                                    <span class="skill-tag">C++ Programming</span>
                                    <span class="skill-tag">Data Analytics</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>