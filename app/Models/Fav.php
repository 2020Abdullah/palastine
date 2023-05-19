<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fav extends Model
{
    use HasFactory;
    public $guarded = [];

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }
}
