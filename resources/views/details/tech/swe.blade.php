@extends('layouts.layoutdetails')
@section('jobheader')
<style>
        :root {
            --primary-color: #a67c7c;
            --primary-dark: #8d6565;
            --background-light: #f8f6f6;
            --text-muted: #6c757d;
            --border-light: #e9ecef;
        }

        body {
            background-color: var(--background-light);
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.6;
        }

        .navbar {
            background-color: var(--primary-color) !important;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .navbar-brand {
            font-weight: 600;
            color: white !important;
        }

        .navbar-nav .nav-link {
            color: rgba(255,255,255,0.9) !important;
            font-weight: 400;
            margin: 0 10px;
        }

        .navbar-nav .nav-link:hover {
            color: white !important;
        }

        .job-header {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
            padding: 3rem 0;
        }

        .video-container {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
            background: #000;
        }

        .video-placeholder {
            aspect-ratio: 16/9;
            background: linear-gradient(45deg, #333, #555);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .video-placeholder:hover {
            background: linear-gradient(45deg, #444, #666);
        }

        .video-element {
            width: 100%;
            height: 100%;
            aspect-ratio: 16/9;
        }

        .job-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            border: none;
        }

        .salary-badge {
            background: linear-gradient(45deg, #28a745, #20c997);
            color: white;
            padding: 8px 16px;
            border-radius: 25px;
            font-weight: 600;
            display: inline-block;
        }

        .placement-badge {
            background-color: var(--primary-color);
            color: white;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
        }

        .btn-apply {
            background: linear-gradient(45deg, var(--primary-color), var(--primary-dark));
            border: none;
            padding: 12px 40px;
            border-radius: 25px;
            font-weight: 600;
            color: white;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(166, 124, 124, 0.3);
        }

        .btn-apply:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(166, 124, 124, 0.4);
            color: white;
        }

        .detail-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
            border-bottom: 1px solid var(--border-light);
        }

        .detail-item:last-child {
            border-bottom: none;
        }

        .detail-label {
            font-weight: 600;
            color: var(--primary-dark);
        }

        .detail-value {
            color: var(--text-muted);
            text-align: right;
        }

        .section-title {
            color: var(--primary-dark);
            font-weight: 600;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 10px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: var(--primary-color);
            border-radius: 2px;
        }

        .breadcrumb {
            background: transparent;
            padding: 1rem 0;
        }

        .breadcrumb-item + .breadcrumb-item::before {
            color: var(--text-muted);
        }

        @media (max-width: 768px) {
            .job-header {
                padding: 2rem 0;
            }

            .video-container {
                margin-bottom: 2rem;
            }
        }
    </style>
@foreach($jobDetails as $job)
<section class="job-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 text-center text-lg-start">
                    <div class="video-container">
                        <!-- Video element -->
                        <iframe id="job-video"
                         width="100%"
                         height="315"
                         src="{{ str_replace('youtu.be/', 'www.youtube.com/embed/', strtok($job->videourl, '?')) }}"
                         frameborder="0"
                         allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                         allowfullscreen>
                        </iframe>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="ms-lg-4 mt-4 mt-lg-0">
                        <h1 class="display-5 fw-bold mb-4">{{$job->title}}</h1>
                        <div class="mb-4">
                            <span class="salary-badge me-3">
                                <i class="fas fa-dollar-sign me-2"></i>${{$job->salary}} /hour
                            </span>
                            <span class="placement-badge">
                                <i class="fas fa-map-marker-alt me-1"></i>{{$job->placement}}
                            </span>
                        </div>
                        <button class="btn btn-apply btn-lg" onclick="applyForJob()">
                            <a href="/apply" class="text-white text-decoration-none">
                            <i class="fas fa-paper-plane me-2"></i>Apply Now
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('jobdetails')
<section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="job-card p-4">
                        <h3 class="section-title">Job Details</h3>

                        <div class="detail-item">
                            <span class="detail-label">Job Id</span>
                            <span class="detail-value">{{$job->idjobopportunity}}</span>
                        </div>

                        <div class="detail-item">
                            <span class="detail-label">Title</span>
                            <span class="detail-value">{{$job->title}}</span>
                        </div>

                        <div class="detail-item">
                            <span class="detail-label">Salary</span>
                            <span class="detail-value">${{$job->salary}}</span>
                        </div>

                        <div class="detail-item">
                            <span class="detail-label">Placement</span>
                            <span class="detail-value">{{$job->placement}}</span>
                        </div>

                        <div class="detail-item">
                            <span class="detail-label">Description</span>
                            <div class="detail-value">
                                <span>{{$job->description}}</span>
                            </div>
                        </div>

                        <div class="detail-item">
                            <span class="detail-label">Video URL</span>
                            <div class="detail-value">
                                <a href="{{ $job->videourl }}" class="text-decoration-none" style="color: var(--primary-color);" target="_blank">
                                    <i class="fas fa-external-link-alt me-1"></i>View Introduction Video
                                </a>
                            </div>
                        </div>

                        <div class="text-center mt-4 pt-3">
                            <button class="btn btn-apply btn-lg me-3" onclick="applyForJob()">
                                <a href = "/apply" class="text-white text-decoration-none">
                                <i class="fas fa-paper-plane me-2"></i>Apply for this Position
                            </button>
                            <button class="btn btn-outline-secondary btn-lg" onclick="saveJob()">
                                <i class="fas fa-bookmark me-2"></i>Save Job
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endforeach
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script>
    function playVideo() {
        const placeholder = document.getElementById('video-placeholder');
        const video = document.getElementById('job-video');

        if (placeholder && video) {
            // Hide the placeholder and show the video
            placeholder.classList.add('d-none');
            video.classList.remove('d-none');

            // Play the video
            video.play().catch(function(error) {
                console.error('Error playing video:', error);
                alert('Unable to play video. Please check the video URL.');

                // Show placeholder again if video fails
                placeholder.classList.remove('d-none');
                video.classList.add('d-none');
            });
        }
    }

    function applyForJob() {
        alert('Redirecting to application form...');
        // In real implementation, this would redirect to ApplyForm
    }

    function saveJob() {
        alert('Job has been saved to your favorites!');
    }

    // Handle video events
    document.addEventListener('DOMContentLoaded', function() {
        const video = document.getElementById('job-video');
        const placeholder = document.getElementById('video-placeholder');

        if (video && placeholder) {
            // Handle video error
            video.addEventListener('error', function() {
                console.error('Video failed to load');
                placeholder.classList.remove('d-none');
                video.classList.add('d-none');
            });
        }
    });
</script>
@endsection
