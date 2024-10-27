<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

    protected $table = 'mnu';
    protected $fillable = [
        'name',
        'detail',
        'image',
        'price',
    ];
}
