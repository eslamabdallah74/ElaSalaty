<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clicked extends Model
{
    use HasFactory;
    protected $fillable = [
        'clicked',
        'prayer_id',
        'user_id'
    ];

    public function Prayers()
    {
        return $this->belongsToMany(Prayers::class, 'clickeds' , 'prayer_id', 'id');
    }
}
