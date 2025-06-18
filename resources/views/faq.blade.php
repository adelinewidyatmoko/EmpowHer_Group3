@extends('layouts.layout')
@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h2 class="mb-0">Frequently Asked Questions</h2>
                    <p class="text-muted mb-0">Common questions and issues from our community</p>
                </div>
                <a href="{{ route('trouble.index') }}" class="btn btn-primary">Ask a Question</a>
            </div>

            <div class="faq-container">
                @foreach($reports as $report)
                <div class="faq-card mb-4">
                    <div class="card shadow-sm">
                        <div class="card-header bg-white d-flex justify-content-between align-items-center py-3">
                            <div class="d-flex align-items-center">
                                <span class="badge 
                                    @if($report->type == 'general') bg-info
                                    @elseif($report->type == 'account') bg-warning
                                    @elseif($report->type == 'technical') bg-danger
                                    @elseif($report->type == 'complaint') bg-secondary
                                    @elseif($report->type == 'transaction') bg-success
                                    @else bg-primary
                                    @endif 
                                    me-2">
                                    {{ ucfirst(str_replace('_', ' ', $report->type)) }}
                                </span>
                                <span class="text-muted small">Q#{{ $report->reportid }}</span>
                            </div>
                            <small class="text-muted">{{ \Carbon\Carbon::parse($report->created_at)->diffForHumans() }}</small>
                        </div>
                        <div class="card-body py-4">
                            <div class="faq-content">
                                {!! preg_replace('/<br\s*\/?>\s*<br\s*\/?>/i', '<br>', nl2br(e($report->reason))) !!}
                            </div>
                            @if($report->proof)
                                <div class="mt-3">
                                    <a href="{{ asset($report->proof) }}" target="_blank" class="btn btn-sm btn-outline-secondary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                                            <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"/>
                                        </svg>
                                        View Attachment
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach

                @if($reports->isEmpty())
                <div class="text-center py-5">
                    <div class="mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-question-circle text-muted" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
                        </svg>
                    </div>
                    <h4 class="text-muted">No questions yet</h4>
                    <p class="text-muted">Be the first to ask a question!</p>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

<style>
.faq-card .card {
    border: none;
    transition: transform 0.2s ease-in-out;
}

.faq-card .card:hover {
    transform: translateY(-2px);
}

.faq-content {
    color: #2c3e50;
    font-size: 1rem;
    line-height: 1.6;
    padding: 0.5rem 0;
}

.faq-content br {
    margin-bottom: 0.5rem;
}

.badge {
    padding: 0.5em 1em;
    font-weight: 500;
}

.faq-container {
    max-width: 100%;
    margin: 0 auto;
}

/* Category badge colors */
.bg-info { background-color: #3498db !important; }
.bg-warning { background-color: #f1c40f !important; }
.bg-danger { background-color: #e74c3c !important; }
.bg-success { background-color: #2ecc71 !important; }
.bg-secondary { background-color: #95a5a6 !important; }
.bg-primary { background-color: #9b59b6 !important; }

/* Attachment button styling */
.btn-outline-secondary {
    border-color: #dee2e6;
    color: #6c757d;
}

.btn-outline-secondary:hover {
    background-color: #f8f9fa;
    color: #495057;
    border-color: #ced4da;
}

/* Empty state styling */
.text-muted {
    color: #6c757d !important;
}
</style>
@endsection
