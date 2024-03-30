<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Number;

class Job extends Model
{
    use HasFactory;

    protected $table = 'job_listings';

    protected $fillable = [
        'title',
        'salary',
    ];

    protected $appends = [
        'salay_formatted',
    ];

    public function getSalayFormattedAttribute()
    {
        return Number::currency((int) $this->salary, 'USD') . ' USD per year';
    }

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class,  foreignPivotKey: 'job_listing_id')->withTimestamps();
    }
}
