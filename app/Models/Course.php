<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'video_url'
    ];

    /**
     * Get the title of the course.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Get the description of the course.
     */
    public function getDesc(): string
    {
        return $this->description;
    }

    /**
     * Get the video URL of the course.
     */
    public function getUrl(): string
    {
        return $this->video_url ?? '';
    }
}
