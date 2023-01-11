<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus_Line extends Model
{
    use HasFactory;

    protected $fillable = [
        'line_name',

    ];
    
}
