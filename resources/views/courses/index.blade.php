@extends('courses.layout')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-8">Online Courses</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($courses as $course)
        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:shadow-lg hover:-translate-y-1">
            <div class="h-48 bg-gradient-to-r from-blue-500 to-indigo-600 relative">
                @if($course->image)
                    <img src="{{ asset($course->image) }}" alt="{{ $course->title }}" class="w-full h-full object-cover">
                @endif
                <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/60 to-transparent">
                    <h2 class="text-white text-xl font-semibold">{{ $course->title }}</h2>
                    <p class="text-white/90 text-sm">{{ $course->subtitle }}</p>
                </div>
            </div>
            
            <div class="p-4">
                <div class="flex items-center mb-3">
                    <div class="flex items-center text-yellow-400">
                        @for($i = 1; $i <= 5; $i++)
                            @if($i <= $course->rating)
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                </svg>
                            @else
                                <svg class="w-5 h-5 fill-current text-gray-300" viewBox="0 0 20 20">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                </svg>
                            @endif
                        @endfor
                        <span class="ml-2 text-gray-600">{{ number_format($course->rating, 1) }}</span>
                    </div>
                    <div class="ml-auto text-gray-500 text-sm">
                        {{ number_format($course->enrolled_count) }} students
                    </div>
                </div>
                
                <div class="flex items-center text-sm text-gray-500 mb-3">
                    <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    {{ $course->duration }}
                    
                    <div class="mx-2">•</div>
                    
                    <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    {{ ucfirst($course->type) }}
                </div>
                
                <p class="text-gray-600 text-sm mb-4 line-clamp-2">{{ $course->description }}</p>
                
                <div class="flex items-center justify-between">
                    <div class="text-sm text-gray-500">
                        By <span class="text-blue-600">{{ $course->provider }}</span>
                    </div>
                    <a href="{{ route('courses.show', $course->id) }}" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        View Course
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
