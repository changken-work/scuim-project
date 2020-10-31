<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public function vendor(){
        return $this->belongsTo(Vendor::class);
    }

    public function customer(){
        return $this->belongsToMany(Customer::class, 'view_logs')
            ->using(\App\Models\ViewLog::class)
            ->withPivot('viewed_at');
    }

    public function factory(){
        return $this->belongsToMany(Factory::class, 'repair_logs')
            ->withTimestamps()
            ->using(\App\Models\RepairLog::class)
            ->withPivot('current_hash', 'prev_hash', 'mileages', 'avg_rpm', 'created_at', 'updated_at');;
    }
}
