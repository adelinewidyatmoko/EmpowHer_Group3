@extends('courses.layout')

@section('content')
<div class="container">
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session('info'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        {{ session('info') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Courses</a></li>
            <li class="breadcrumb-item active">{{ $course->title }}</li>
        </ol>
    </nav>

    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="course-detail-card">
                <div class="course-video-section">
                    @if($course->video_url)
                        @php
                            // Convert regular YouTube URL to embed URL
                            $embedUrl = $course->video_url;
                            if (preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/)([^&\n?#]+)/', $course->video_url, $matches)) {
                                $embedUrl = 'https://www.youtube.com/embed/' . $matches[1];
                            }
                        @endphp
                        <div class="ratio ratio-16x9" style="border-radius: 12px; overflow: hidden; max-height: 400px;">
                            <iframe 
                                src="{{ $embedUrl }}" 
                                frameborder="0" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                allowfullscreen>
                            </iframe>
                        </div>
                    @else
                        <div class="video-placeholder">
                            <div class="play-button">
                                <i class="fas fa-play"></i>
                            </div>
                        </div>
                    @endif
                </div>

                <div class="course-info-section">
                    <h1 class="course-main-title">{{ $course->title }}</h1>

                    <div class="text-center">
                        <button class="apply-btn btn-lg px-5">
                            <i class="fas fa-play-circle me-2"></i>Start Learning
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
