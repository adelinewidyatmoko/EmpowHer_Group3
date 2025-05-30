@extends('layouts.app')

@section('content')
<div class="container py-4">
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('courses.index') }}">Courses</a></li>
            <li class="breadcrumb-item active">{{ $course->getTitle() }}</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div>
                            <h1 class="h3">{{ $course->getTitle() }}</h1>
                            <p class="text-muted mb-0">By Coursera</p>
                        </div>
                        <span class="badge bg-success px-3 py-2">25% Off</span>
                    </div>

                    @if($course->video_url)
                        <div class="ratio ratio-16x9 mb-4">
                            <iframe src="{{ $course->getUrl() }}" allowfullscreen></iframe>
                        </div>
                    @endif

                    <div class="mb-4">
                        <h5>Course Description</h5>
                        <p>{{ $course->getDesc() }}</p>
                    </div>

                    <div class="mb-4">
                        <h5>What You'll Learn</h5>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                Understand basic data science concepts
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                Learn data analysis techniques
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                Master visualization tools
                            </li>
                        </ul>
                    </div>

                    <div class="mb-4">
                        <h5>Course Content</h5>
                        <div class="accordion" id="courseContent">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#week1">
                                        Week 1: Introduction
                                    </button>
                                </h2>
                                <div id="week1" class="accordion-collapse collapse show">
                                    <div class="accordion-body">
                                        <ul class="list-unstyled">
                                            <li class="mb-2">1. Course Overview</li>
                                            <li class="mb-2">2. Setting up your environment</li>
                                            <li class="mb-2">3. Basic concepts</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="d-grid gap-3">
                        <button class="btn btn-primary btn-lg">Enroll Now</button>
                        <button class="btn btn-outline-primary">Add to Wishlist</button>
                    </div>

                    <hr>

                    <div class="mb-4">
                        <h5>Course Features</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <i class="bi bi-clock me-2"></i>
                                Duration: 8 weeks
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-graph-up me-2"></i>
                                Level: Beginner
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-person me-2"></i>
                                Students: 1,234
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-translate me-2"></i>
                                Language: English
                            </li>
                        </ul>
                    </div>

                    <div class="mb-4">
                        <h5>Instructor</h5>
                        <div class="d-flex align-items-center">
                            <img src="https://ui-avatars.com/api/?name=Instructor&background=random" alt="Instructor" class="rounded-circle me-3" style="width: 50px; height: 50px;">
                            <div>
                                <h6 class="mb-0">John Doe</h6>
                                <p class="text-muted mb-0">Data Science Expert</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
