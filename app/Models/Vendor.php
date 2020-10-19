<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    public function user(){
        return $this->morphOne(User::class, 'userable');
    }

    public function car(){
        return $this->hasMany(Car::class);
    }
}
