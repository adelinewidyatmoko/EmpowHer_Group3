<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobOpportunity extends Model
{
    protected $table = 'jobopportunity';
    
    // Since your table doesn't have timestamps, disable them
    public $timestamps = false;
    
    protected $fillable = [
        'title',
        'salary',
        'requirements',
        'placement',
        'description',
        'videourl'
    ];
}
