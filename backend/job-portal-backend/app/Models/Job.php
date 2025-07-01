<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
   protected $fillable = [
    'title',
    'description',
    'salary',
    'location',
    'company_id',
    'job_type',
    'experience_level',
];


    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
