<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    public $guarded = [];

    public function places()
    {
        return $this->hasMany(Place::class, 'city_id');
    }
}
