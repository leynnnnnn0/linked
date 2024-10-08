<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = 'jobs_list';
    protected $fillable = [
        'title',
        'user_id',
        'company_name',
        'job_description',
        'salary'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
