<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public function user(){
        return $this->morphOne(User::class, 'userable');
    }

    public function car(){
        return $this->belongsToMany(Car::class, 'view_logs')
            ->using(\App\Models\ViewLog::class)
            ->withPivot('viewed_at');
    }
}
