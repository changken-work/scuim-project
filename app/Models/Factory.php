<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factory extends Model
{
    use HasFactory;

    public function user(){
        return $this->morphOne(User::class, 'userable');
    }

    public function car(){
        return $this->belongsToMany(Car::class, 'repair_logs')
            ->withTimestamps()
            ->using(\App\Models\RepairLog::class)
            ->withPivot('current_hash', 'prev_hash', 'mileages', 'avg_rpm', 'created_at', 'updated_at');;
    }
}
