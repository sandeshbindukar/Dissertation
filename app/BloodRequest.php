<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloodRequest extends Model
{
    protected $fillable = [
        'patient', 'city' , 'district' , 'state', 'group', 'hospital', 'doctor' ,'contact_person','contact_phone' , 'contact_email' ,'when'
    ];

    protected $hidden = [
    ];
}
