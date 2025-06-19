<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'course';
    protected $primaryKey = 'courseid';

    // Since your table doesn't have timestamps, disable them
    public $timestamps = false;

    protected $fillable = [
        'title',
        'description',
        'videourl'
    ];
    
    // Add some virtual attributes for compatibility
    public function getSubtitleAttribute()
    {
        return 'Learn ' . $this->title;
    }

    public function getDurationAttribute()
    {
        return '8 weeks';
    }
}
