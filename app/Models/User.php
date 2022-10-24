<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Eventt;
use App\Models\Wallet;
use App\Models\Comment;
use App\Models\Pending;
use App\Models\Donation;
use App\Models\Volunteer;
use App\Models\Offer_User;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'image',
        'github_id',
        'is_volunteer',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function eventts()
    {
        return $this->hasMany(Eventt::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function volunteers()
    {
        return $this->hasMany(Volunteer::class);
    }
    public function donations()
    {
        return $this->hasMany(Donation::class);
    }
    public function pendings()
    {
        return $this->hasMany(Pending::class);
    }
    public function wallet()
    {
        return $this->hasOne(Wallet::class);
    }
    public function offer_users()
    {
        return $this->hasMany(Offer_User::class);
    }
}
