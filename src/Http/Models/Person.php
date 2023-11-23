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

    /**
     * One to Many Inverse/Belongs To relationship
     * One Job Belongs To Many People
     *
     * @return BelongsTo
     */
    public function job(): BelongsTo
    {
        return $this->belongsTo(Job::class);
    }
}
