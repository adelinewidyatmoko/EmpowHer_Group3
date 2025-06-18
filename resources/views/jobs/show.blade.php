@extends('layout.layout')
@section('title', $job->title . ' - Job Details')
@section('content')
<style>
    .job-detail-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem;
        background-color: var(--bg-light);
        min-height: 100vh;
    }

    .job-header {
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        color: white;
        padding: 3rem 2rem;
        border-radius: 20px;
        margin-bottom: 2rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .job-title {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .job-meta {
        display: flex;
        flex-wrap: wrap;
        gap: 2rem;
        align-items: center;
        font-size: 1.1rem;
    }

    .job-meta-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        background: rgba(255, 255, 255, 0.2);
        padding: 0.5rem 1rem;
        border-radius: 25px;
        backdrop-filter: blur(10px);
    }

    .job-meta-item i {
        font-size: 1.2rem;
        opacity: 0.9;
    }

    .job-content {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 2rem;
        margin-bottom: 2rem;
    }

    .job-main {
        background: white;
        padding: 2rem;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        border: 1px solid rgba(0, 0, 0, 0.05);
    }

    .job-sidebar {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }

    .sidebar-card {
        background: white;
        padding: 1.5rem;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        border: 1px solid rgba(0, 0, 0, 0.05);
    }

    .section-title {
        font-size: 1.5rem;
        font-weight: 600;
        color: var(--text-dark);
        margin-bottom: 1rem;
        padding-bottom: 0.5rem;
        border-bottom: 2px solid var(--primary-color);
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .section-title i {
        color: var(--primary-color);
    }

    .job-description {
        line-height: 1.8;
        color: #555;
        font-size: 1rem;
    }

    .requirements-list {
        list-style: none;
        padding: 0;
    }

    .requirements-list li {
        padding: 0.5rem 0;
        border-bottom: 1px solid #f0f0f0;
        position: relative;
        padding-left: 1.5rem;
    }

    .requirements-list li:before {
        content: "✓";
        position: absolute;
        left: 0;
        color: var(--accent-color);
        font-weight: bold;
    }

    .requirements-list li:last-child {
        border-bottom: none;
    }

    .apply-button {
        background: linear-gradient(135deg, var(--accent-color), #5a9cf8);
        color: white;
        border: none;
        padding: 1rem 2rem;
        border-radius: 50px;
        font-size: 1.1rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        box-shadow: 0 4px 15px rgba(66, 133, 244, 0.3);
        width: 100%;
        justify-content: center;
    }

    .apply-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(66, 133, 244, 0.4);
        color: white;
        text-decoration: none;
    }

    .back-button {
        background: transparent;
        color: var(--text-dark);
        border: 2px solid var(--primary-color);
        padding: 0.75rem 1.5rem;
        border-radius: 50px;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        margin-bottom: 2rem;
    }

    .back-button:hover {
        background: var(--primary-color);
        color: white;
        text-decoration: none;
        transform: translateY(-1px);
    }

    .video-container {
        position: relative;
        width: 100%;
        height: 0;
        padding-bottom: 56.25%; /* 16:9 aspect ratio */
        margin: 1rem 0;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    }

    .video-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: none;
        border-radius: 15px;
    }

    .salary-highlight {
        background: linear-gradient(135deg, #28a745, #20c997);
        color: white;
        padding: 1rem;
        border-radius: 15px;
        text-align: center;
        margin-bottom: 1rem;
    }

    .salary-amount {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 0.25rem;
    }

    .salary-label {
        font-size: 0.9rem;
        opacity: 0.9;
    }

    .info-item {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.75rem 0;
        border-bottom: 1px solid #f0f0f0;
    }

    .info-item:last-child {
        border-bottom: none;
    }

    .info-icon {
        width: 20px;
        text-align: center;
        color: var(--primary-color);
    }

    .info-text {
        flex: 1;
        color: #555;
    }

    @media (max-width: 768px) {
        .job-content {
            grid-template-columns: 1fr;
        }
        
        .job-title {
            font-size: 2rem;
        }
        
        .job-meta {
            flex-direction: column;
            align-items: flex-start;
            gap: 1rem;
        }
        
        .job-detail-container {
            padding: 1rem;
        }
    }
</style>

<div class="job-detail-container">
    <!-- Back Button -->
    <a href="{{ url()->previous() }}" class="back-button">
        <i class="fas fa-arrow-left"></i>
        Back to Jobs
    </a>

    <!-- Job Header -->
    <div class="job-header">
        <h1 class="job-title">{{ $job->title }}</h1>
        <div class="job-meta">
            <div class="job-meta-item">
                <i class="fas fa-dollar-sign"></i>
                <span>{{ $job->salary }}</span>
            </div>
            <div class="job-meta-item">
                <i class="fas fa-map-marker-alt"></i>
                <span>{{ $job->placement }}</span>
            </div>
            @if(isset($job->created_at) && $job->created_at)
            <div class="job-meta-item">
                <i class="fas fa-calendar-alt"></i>
                <span>Posted {{ \Carbon\Carbon::parse($job->created_at)->diffForHumans() }}</span>
            </div>
            @endif
        </div>
    </div>

    <!-- Job Content -->
    <div class="job-content">
        <!-- Main Content -->
        <div class="job-main">
            <!-- Job Description -->
            <div class="section-title">
                <i class="fas fa-info-circle"></i>
                Job Description
            </div>
            <div class="job-description">
                {!! nl2br(e($job->description)) !!}
            </div>

            <!-- Requirements -->
            <div class="section-title" style="margin-top: 2rem;">
                <i class="fas fa-check-circle"></i>
                Requirements
            </div>
            <ul class="requirements-list">
                @if($job->requirements)
                    @foreach(explode("\n", $job->requirements) as $requirement)
                        @if(trim($requirement))
                            <li>{{ trim($requirement) }}</li>
                        @endif
                    @endforeach
                @else
                    <li>No specific requirements listed</li>
                @endif
            </ul>

            <!-- Video Section -->
            @if($job->videourl)
                <div class="section-title" style="margin-top: 2rem;">
                    <i class="fas fa-play-circle"></i>
                    Job Overview Video
                </div>
                <div class="video-container">
                    @if(strpos($job->videourl, 'youtube.com') !== false || strpos($job->videourl, 'youtu.be') !== false)
                        @php
                            // Convert YouTube URL to embed format
                            $embedUrl = $job->videourl;
                            if (strpos($embedUrl, 'youtube.com/watch?v=') !== false) {
                                $embedUrl = str_replace('youtube.com/watch?v=', 'youtube.com/embed/', $embedUrl);
                            } elseif (strpos($embedUrl, 'youtu.be/') !== false) {
                                $embedUrl = str_replace('youtu.be/', 'youtube.com/embed/', $embedUrl);
                            }
                        @endphp
                        <iframe src="{{ $embedUrl }}" allowfullscreen></iframe>
                    @else
                        <iframe src="{{ $job->videourl }}" allowfullscreen></iframe>
                    @endif
                </div>
            @endif
        </div>

        <!-- Sidebar -->
        <div class="job-sidebar">
            <!-- Salary Information -->
            <div class="sidebar-card">
                <div class="salary-highlight">
                    <div class="salary-amount">{{ $job->salary }}</div>
                    <div class="salary-label">Competitive Salary</div>
                </div>
            </div>

            <!-- Job Information -->
            <div class="sidebar-card">
                <div class="section-title">
                    <i class="fas fa-briefcase"></i>
                    Job Details
                </div>
                <div class="info-item">
                    <i class="fas fa-map-marker-alt info-icon"></i>
                    <div class="info-text">
                        <strong>Location:</strong><br>
                        {{ $job->placement }}
                    </div>
                </div>
                <div class="info-item">
                    <i class="fas fa-calendar-plus info-icon"></i>
                @if(isset($job->created_at) && $job->created_at)
                    <div class="info-text">
                        <strong>Posted:</strong><br>
                        {{ \Carbon\Carbon::parse($job->created_at)->format('M d, Y') }}
                    </div>
                @else
                    <div class="info-text">
                        <strong>Posted:</strong><br>
                        Not available
                    </div>
                @endif
                </div>
                <div class="info-item">
                    <i class="fas fa-clock info-icon"></i>
                @if(isset($job->updated_at) && $job->updated_at)
                    <div class="info-text">
                        <strong>Last Updated:</strong><br>
                        {{ \Carbon\Carbon::parse($job->updated_at)->diffForHumans() }}
                    </div>
                @else
                    <div class="info-text">
                        <strong>Last Updated:</strong><br>
                        Not available
                    </div>
                @endif
                </div>
            </div>

            <!-- Apply Button -->
            <div class="sidebar-card">
                <a href="/apply" class="apply-button">
                    <i class="fas fa-paper-plane"></i>
                    Apply for this Job
                </a>
            </div>

            <!-- Additional Actions -->
            <div class="sidebar-card">
                <div class="section-title">
                    <i class="fas fa-share"></i>
                    Share This Job
                </div>
                <div style="display: flex; gap: 1rem; justify-content: center;">
                    <a href="https://twitter.com/intent/tweet?text=Check out this job: {{ $job->title }}&url={{ url()->current() }}" 
                       target="_blank" 
                       style="color: #1da1f2; font-size: 1.5rem;">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ url()->current() }}" 
                       target="_blank" 
                       style="color: #0077b5; font-size: 1.5rem;">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" 
                       target="_blank" 
                       style="color: #1877f2; font-size: 1.5rem;">
                        <i class="fab fa-facebook"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
