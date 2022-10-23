<?php

namespace App\Models;
use App\Models\Offer_User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    public function offer_users()
    {
        return $this->hasMany(Offer_User::class);
    }
    use HasFactory;
}
