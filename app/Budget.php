<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    
    protected $guarded = [];

    protected $casts = [
        'details' => 'array',
    ];
}
