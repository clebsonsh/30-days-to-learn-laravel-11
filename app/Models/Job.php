<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Number;

class Job extends Model
{
    use HasFactory;

    const RULES = [
        'title' => ['required', 'string', 'min:3', 'max:255'],
        'salary' => ['required', 'numeric', 'min:0'],
    ];

    protected $table = 'job_listings';

    protected $fillable = [
        'title',
        'salary',
        'employer_id',
    ];

    protected $appends = [
        'formatted_salary',
    ];

    public function getFormattedSalaryAttribute(): string
    {
        return Number::currency((int)$this->salary, 'USD') . ' USD per year';
    }

    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, foreignPivotKey: 'job_listing_id')->withTimestamps();
    }
}
