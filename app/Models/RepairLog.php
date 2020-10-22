<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class RepairLog extends Pivot
{
    use HasFactory;

    /**
     * 表格名稱
     *
     * @var string
     * */
    protected $table = 'repair_logs';

    public function factory(){
        return $this->belongsTo(Factory::class);
    }

    public function car(){
        return $this->belongsTo(Car::class);
    }
}
