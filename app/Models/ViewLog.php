<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ViewLog extends Pivot
{
    use HasFactory;

    /**
     * 是否主動維護時間戳記
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * 表格名稱
     *
     * @var string
     * */
    protected $table = 'view_logs';

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function car(){
        return $this->belongsTo(Car::class);
    }
}
