<?php

namespace App\Models;

use App\Models\User;
use App\Models\Eventt;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Volunteer extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function eventt()
    {
        return $this->belongsTo(Eventt::class);
    }
}
