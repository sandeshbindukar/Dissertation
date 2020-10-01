<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    protected $fillable = [
        'name', 'email', 'message'
    ];

    protected $hidden = [
    ];
}
