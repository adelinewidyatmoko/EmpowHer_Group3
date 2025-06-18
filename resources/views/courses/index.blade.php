@extends('courses.layout')

@section('content')
<div class="container">

    <h2 class="text-center mb-4">Available Courses</h2>
    <div class="row g-4">
        @foreach($courses as $course)
        <div class="col-md-6 col-lg-4">
            <div class="course-card">
                <div class="course-header">
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
                            <i class="fas fa-video me-1"></i>Video Course
                        </div>
                        <a href="{{ route('courses.show', $course->courseid) }}" class="apply-btn">
                            View Course
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
