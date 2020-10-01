<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Camp extends Model
{
    protected $fillable = [
        'details', 'city' ,'district','state' , 'start' ,'end'
    ];

    protected $hidden = [
     ];
}
