<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViewLog extends Model
{
    use HasFactory;

    /**
     * 是否主動維護時間戳記
     *
     * @var bool
     */
    public $timestamps = false;
}
