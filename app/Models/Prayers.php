<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prayers extends Model
{
    use HasFactory;
    protected $fillable = [
        'pray_name',
    ];

    public function Clicked()
    {
        return $this->hasMany(Clicked::class, 'prayer_id');
    }

}
