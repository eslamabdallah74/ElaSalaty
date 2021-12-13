<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exp_bar extends Model
{
    use HasFactory;
    protected $fillable = [
        'exp',
        'level',
    ];

    public function users()
    {
        return $this->belongsTo(User::class,"user_id","id");
    }
}
