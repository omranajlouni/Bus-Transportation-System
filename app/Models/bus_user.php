<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bus_user extends Model
{
    use HasFactory;

    protected $fillable = [
        'u_id',
        'b_id',

    ];

    public function users()
    {
        return $this->hasMany(User::class);

    }
}
