<?php

namespace Jamesborg2012\LaravelExamplePackage\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Jamesborg2012\LaravelExamplePackage\Http\Models\Job;

class Person extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'job_id'
    ];

    public function job(): BelongsTo
    {
        return $this->belongsTo(Job::class);
    }
}
