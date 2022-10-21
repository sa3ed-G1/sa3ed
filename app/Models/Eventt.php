<?php

namespace App\Models;

use App\Models\User;
use App\Models\Comment;
use App\Models\Donation;
use App\Models\Volunteer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Eventt extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'location',
        'tags',
        'date',
        'city',
        'duration',
        'capacity',
        'thumbnail',
        'banner',
        'user_id',
    ];
    public function donations()
    {
        return $this->hasMany(Donation::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function volunteers()
    {
        return $this->hasMany(Volunteer::class);
    }
}
