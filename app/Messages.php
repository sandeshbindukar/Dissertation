<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    protected $fillable = [
        'sender','phone', 'receiver', 'subject', 'message'
    ];

    protected $hidden = [
    ];
}
