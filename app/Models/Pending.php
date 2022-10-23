<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pending extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'message',
        'user_id',

    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
