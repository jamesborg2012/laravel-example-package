<?php

namespace Jamesborg2012\LaravelExamplePackage\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Jamesborg2012\LaravelExamplePackage\Http\Models\Person;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'salary'
    ];

    public function people()
    {
        return $this->hasMany(Person::class);
    }
}
