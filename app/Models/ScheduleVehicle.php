<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleVehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'schedule_id',
        'vehicle_id',
        'status',
    ];
}