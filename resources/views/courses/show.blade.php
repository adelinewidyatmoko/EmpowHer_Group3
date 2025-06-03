@extends('layouts.app')

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
            <li class="breadcrumb-item"><a href="{{ url('/courses') }}">Courses</a></li>
            <li class="breadcrumb-item active">{{ $course->title }}</li>
        </ol>
    </nav>

    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="video-placeholder position-relative mb-4" style="height: 400px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 12px; overflow: hidden;">
                        @if($course->video_url)
                            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="cursor: pointer" onclick="alert('Video would start playing here')">
                                <div class="play-button" style="width: 80px; height: 80px; background: rgba(255,255,255,0.9); border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                                    <i class="fas fa-play" style="font-size: 28px; color: #8b5a6b; margin-left: 5px;"></i>
                                </div>
                            </div>
                        @endif
                    </div>

                    <h2 class="h3 mb-4">About this course</h2>
                    <p class="text-muted">{{ $course->description }}</p>

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
