<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clain extends Model
{

    protected $table = 'Chfo';
    protected $fillable = [
        'email',
        'nationality',
        'image',
        'specialty',
        'experience'
    ];
}
