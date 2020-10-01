<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloodCenter extends Model
{

	public $timestamps = false;

    protected $fillable = [ 'name' , 'phone','landmark' , 'city' ,'state' , 'district'
    ];

    protected $hidden = [
    ];
}
