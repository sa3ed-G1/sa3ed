<?php

namespace App\Models;
use App\Models\User;
use App\Models\Offer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer_User extends Model
{
    protected $fillable = ['user_id' , 'offer_id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function offer()
    {
        return $this->belongsTo(Offer::class);
    }
    use HasFactory;
}

