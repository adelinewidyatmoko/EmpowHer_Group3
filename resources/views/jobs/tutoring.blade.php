@extends('layout.layout')
@section('title', 'Job Opportunities')
@section('content')
<style>
       
        

        .main-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 2rem;
        }

        .content-wrapper {
            display: flex;
            gap: 10rem;
            align-items: flex-start;
        }

        .sidebar {
            min-width: 200px;
            flex-shrink: 0;
            position: sticky;
            top: 2rem;
        }

        .categories-header {
            color: var(--text-dark);
            font-weight: 700;
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
        }

        .categories-header i {
            margin-right: 0.5rem;
            color: var(--primary-color);
        }

        .category-btn {
            display: flex;
            align-items: center;
            width: 100%;
            padding: 12px 18px;
            margin-bottom: 10px;
            border: 2px solid transparent;
            border-radius: 12px;
            font-weight: 500;
            text-align: left;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            text-decoration: none;
            font-size: 0.95rem;
            position: relative;
            overflow: hidden;
        }

        .category-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }

        .category-btn:hover::before {
            left: 100%;
        }

        .category-btn .icon {
            margin-right: 12px;
            font-size: 1.1rem;
            width: 20px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .category-btn .label {
            flex: 1;
            font-weight: 600;
        }

        .category-btn .count {
            background: rgba(255,255,255,0.3);
            padding: 2px 8px;
            border-radius: 12px;
            font-size: 0.75rem;
            font-weight: 600;
            margin-left: auto;
        }

        .category-btn.active {
            background: linear-gradient(135deg, var(--accent-color), #5a9cf8);
            color: white;
            border-color: var(--accent-color);
            box-shadow: 0 4px 15px rgba(66, 133, 244, 0.3);
            transform: translateY(-1px);
        }

        .category-btn.active .icon {
            transform: scale(1.1);
        }

        .category-btn.active .count {
            background: rgba(255,255,255,0.4);
        }

        .category-btn:not(.active) {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border-color: var(--primary-color);
        }

        .category-btn:not(.active):hover {
            background: linear-gradient(135deg, var(--secondary-color), #e8c5c5);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(166, 124, 124, 0.3);
        }

        .category-btn:not(.active) .count {
            background: rgba(255,255,255,0.25);
        }

        .main-content {
            flex: 1;
            max-width: 700px;
        }

        .header-title {
            color: var(--text-dark);
            font-weight: 700;
            font-size: 1.8rem;
            margin-bottom: 0.3rem;
        }

        .header-subtitle {
            color: #666;
            font-size: 0.95rem;
            margin-bottom: 0.3rem;
        }

        .header-description {
            color: #888;
            font-size: 0.85rem;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        /* NEW REDESIGNED CARD */
        .job-card {
            background: white;
            border-radius: 16px;
            padding: 1.5rem;
            margin-bottom: 1.2rem;
            box-shadow: 0 4px 20px rgba(166, 124, 124, 0.1);
            border: 1px solid rgba(166, 124, 124, 0.1);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .job-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.4s ease;
        }

        .job-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 40px rgba(166, 124, 124, 0.15);
            border-color: var(--primary-color);
        }

        .job-card:hover::before {
            transform: scaleX(1);
        }

        .job-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
        }

        .job-left {
            display: flex;
            align-items: center;
            flex: 1;
            gap: 1rem;
        }

        .job-avatar {
            width: 60px;
            height: 60px;
            border-radius: 14px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.4rem;
            flex-shrink: 0;
            box-shadow: 0 4px 15px rgba(166, 124, 124, 0.3);
            transition: all 0.3s ease;
        }

        .job-card:hover .job-avatar {
            transform: scale(1.05) rotate(5deg);
            box-shadow: 0 6px 20px rgba(166, 124, 124, 0.4);
        }

        .job-details {
            flex: 1;
            min-width: 0;
        }

        .job-title {
            font-weight: 700;
            font-size: 1.1rem;
            color: var(--text-dark);
            margin-bottom: 0.4rem;
            line-height: 1.3;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .job-meta {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 0.4rem;
        }

        .job-company {
            color: #666;
            font-size: 0.9rem;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 0.3rem;
        }

        .job-salary {
            color: var(--primary-color);
            font-size: 0.9rem;
            font-weight: 700;
            background: rgba(166, 124, 124, 0.1);
            padding: 0.2rem 0.6rem;
            border-radius: 12px;
            display: flex;
            align-items: center;
            gap: 0.3rem;
        }

        .job-tags {
            display: flex;
            gap: 0.4rem;
            margin-top: 0.5rem;
        }

        .tag {
            background: rgba(166, 124, 124, 0.1);
            color: var(--primary-color);
            padding: 0.2rem 0.6rem;
            border-radius: 8px;
            font-size: 0.75rem;
            font-weight: 500;
        }

        .more-btn {
            background: linear-gradient(135deg, var(--primary-color), #8d6565);
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 12px;
            font-size: 0.9rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            box-shadow: 0 4px 15px rgba(166, 124, 124, 0.3);
        }

        .more-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(166, 124, 124, 0.4);
            background: linear-gradient(135deg, #8d6565, var(--primary-color));
        }

        .more-btn:active {
            transform: translateY(0);
        }

        /* Alternative card styles */
        .job-card.style-2 {
            background: linear-gradient(135deg, rgba(166, 124, 124, 0.05), rgba(212, 164, 164, 0.05));
            border: 2px solid rgba(166, 124, 124, 0.1);
        }

        .job-card.style-3 {
            background: white;
            border-left: 5px solid var(--primary-color);
            box-shadow: 0 2px 15px rgba(166, 124, 124, 0.08);
        }

        .job-card.style-3::before {
            display: none;
        }

        .section-title {
            color: var(--text-dark);
            font-weight: 700;
            margin: 2rem 0 1rem 0;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid var(--primary-color);
        }

        @media (max-width: 768px) {
            .job-content {
                flex-direction: column;
                align-items: stretch;
                gap: 1rem;
            }
            
            .job-left {
                flex-direction: column;
                align-items: stretch;
                text-align: center;
            }
            
            .job-meta {
                justify-content: center;
                flex-wrap: wrap;
            }
            
            .more-btn {
                align-self: center;
                width: fit-content;
            }
        }

        @media (max-width: 768px) {
            .main-container {
                padding: 1rem;
            }
            
            .content-wrapper {
                flex-direction: column;
                gap: 1rem;
            }
            
            .sidebar {
                min-width: auto;
            }
            
            .category-btn {
                display: inline-block;
                width: auto;
                margin-right: 0.5rem;
            }
            
            .header-title {
                font-size: 1.5rem;
            }
            
            .job-content {
                flex-direction: column;
                align-items: stretch;
                gap: 0.8rem;
            }
            
            .more-btn {
                align-self: flex-end;
                width: fit-content;
            }
        }
    </style>

 <!-- Main Content -->
    <div class="main-container">
        <div class="content-wrapper">
            <!-- Redesigned Sidebar -->
            <div class="sidebar">
                <div class="filter-section">
                    <h3 class="categories-header">
                        <i class="fas fa-filter"></i>
                        Job Categories
                    </h3>
                    
                    <a href="{{ route('jobs.tech') }}" class="category-btn active" data-category="tech">
                        <i class="fas fa-laptop-code icon"></i>
                        <span class="label">Tech</span>
                    </a>
                    
                    <a href="{{ route('jobs.marketing') }}" class="category-btn" data-category="marketing">
                        <i class="fas fa-bullhorn icon"></i>
                        <span class="label">Marketing</span>
                    </a>
                    
                    <a href="{{ route('jobs.sales') }}" class="category-btn" data-category="sales">
                        <i class="fas fa-chart-line icon"></i>
                        <span class="label">Sales</span>
                    </a>
                    
                    <a href="{{ route('jobs.tutoring') }}" class="category-btn" data-category="tutoring">
                        <i class="fas fa-graduation-cap icon"></i>
                        <span class="label">Tutoring</span>
                    </a>
                    
                    <a href="{{ route('jobs.freelance') }}" class="category-btn" data-category="freelance">
                        <i class="fas fa-briefcase icon"></i>
                        <span class="label">Freelance</span>
                    </a>
                </div>
                </div>

            <!-- Job Listings -->
            
            <div class="main-content">
                <h1 class="header-title">
                    Software Engineering
                    <span class="emoji">💡</span>
                </h1>
                <p class="header-subtitle">Currently, the highest number of job openings in the Tech field</p>
                <div class="header-description">
                    <i class="fas fa-rocket rocket-icon"></i>
                    <span>Companies are actively hiring for roles in backend, frontend, and full-stack development</span>
                </div>

                <!-- Job Cards -->
            @foreach($tutorIndex as $p) 
            <div class="job-card">
            <div class="job-content">
                <div class="job-left">
                    <div class="job-avatar">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <div class="job-details">
                        <h3 class="job-title">{{ $p->title }}</h3>
                        <div class="job-meta">
                            <div class="job-company">
                                <i class="fas fa-map-marker-alt"></i>
                                {{$p->placement}}
                            </div>
                            <div class="job-salary">
                                <i class="fas fa-dollar-sign"></i>
                                {{$p->salary}}
                            </div>
                        </div>
                        @foreach(explode(',', $p->requirements) as $requirement)
                        @foreach(explode(' ', trim($requirement)) as $word)
                        @if(!empty($word))
                            <span class="tag">{{ $word }}</span>
                        @endif
                        @endforeach

                      
                        @endforeach

                </div>
                <button class="more-btn">
                            <a href = "/jobopportunity/details/tech/{{ $p->idjobopportunity }}" style="color: white; text-decoration: none;">
                                <span>View Details</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                             </button>
               </div>
            </div>
        </div>
            @endforeach
        </div>
    </div>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
     <script>
        
            // Category button interactions
            const categoryBtns = document.querySelectorAll('.category-btn');
            categoryBtns.forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Only remove active from category buttons, not filter buttons
                    if (this.dataset.category) {
                        document.querySelectorAll('[data-category]').forEach(b => b.classList.remove('active'));
                        this.classList.add('active');
                        
                        // Update main content based on category
                        updateJobListings(this.dataset.category);
                    }
                });
            });
        
        // Add click effects
        document.querySelectorAll('.job-card').forEach(card => {
            card.addEventListener('click', function(e) {
                if (!e.target.closest('.more-btn')) {
                    this.style.transform = 'scale(0.98)';
                    setTimeout(() => {
                        this.style.transform = '';
                    }, 150);
                }
            });
        });

        document.querySelectorAll('.more-btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.stopPropagation();
                console.log('More button clicked');
            });
        });
    </script>

@endsection