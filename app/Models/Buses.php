<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bus_Line;
use App\Models\User;
class Buses extends Model
{
    use HasFactory;
    protected $fillable = [
        'bus_num',
        'line_name',
        'driver_name',
        'seats_num',
        'line_id',
        'status',
        'filled_seats',

    ];

    public function Bus_Line()
    {
        return $this->belongsTo(Bus_Line::class);
    }


}

