<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HouseHold extends Model
{
    protected $table = 'household';
    protected $fillable = [
        'name',
        'size',
        'description'
    ];
}
