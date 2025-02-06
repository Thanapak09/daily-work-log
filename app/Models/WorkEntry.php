<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkEntry extends Model
{
    use HasFactory;
    protected $fillable = [
        'task_type', 'task_name', 'start_time', 'end_time', 'status'
    ];
}
