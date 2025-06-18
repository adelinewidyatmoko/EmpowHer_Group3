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
        'videourl'
    ];

    /**
     * Get the enrolled users for the course.
     */
    public function enrolledUsers()
    {
        return $this->belongsToMany(User::class, 'enrollments')
                    ->withPivot('progress', 'completed_at')
                    ->withTimestamps();
    }

    /**
     * Get the enrollments for the course.
     */
    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }

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
