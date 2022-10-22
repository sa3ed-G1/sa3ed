<?php

namespace App\Models;

use App\Models\User;
use App\Models\Comment;
use App\Models\Donation;
use App\Models\Volunteer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Eventt extends Model
{
    use HasFactory;
    use SoftDeletes;
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
    public function scopeMalek($query, array $filters)
    {

        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                ->orWhere('city', 'like', '%' . request('search') . '%');
        }
    }
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
    protected $dates = ['date'];

    public function nextAnniversary(): Attribute
    {
        return Attribute::make(
            get: function () {
                $dateNew = $this->dateNew;
                $dateNew->setYear(now()->year);

                if ($dateNew->isPast()) {
                    $dateNew->addYear();
                }

                return $dateNew;
            }
        );
    }
}
