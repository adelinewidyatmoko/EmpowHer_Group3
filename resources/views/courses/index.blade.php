@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="mb-0">Educational Courses</h1>
        <div>
            <span class="badge bg-primary px-3 py-2">Digital Marketing</span>
            <img src="https://ui-avatars.com/api/?name=Fiya&background=random" alt="User" class="rounded-circle ms-3" style="width: 40px; height: 40px;">
        </div>
    </div>

    <div class="row g-4">
        @foreach($courses as $course)
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="position-relative">
                        @if($course->video_url)
                            <div class="ratio ratio-16x9">
                                <iframe src="{{ $course->video_url }}" allowfullscreen></iframe>
                            </div>
                        @else
                            <img src="https://www.coursera.org/media-pipeline/hero/homepage-hero-image.png" class="card-img-top" alt="Coursera Course">
                        @endif
                        <div class="position-absolute top-0 start-0 m-3 d-flex align-items-center">
                            <div class="bg-success text-white px-3 py-1 rounded-pill">Coursera</div>
                            <img src="https://ui-avatars.com/api/?name=Instructor&background=random" alt="Instructor" class="rounded-circle ms-2" style="width: 30px; height: 30px;">
                        </div>
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-success">25% Off</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $course->getTitle() }}</h5>
                        <p class="card-text">{{ $course->getDesc() }}</p>
                        <a href="{{ route('courses.show', $course->id) }}" class="btn btn-primary w-100">Apply</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
