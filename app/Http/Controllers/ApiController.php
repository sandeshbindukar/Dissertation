<?php

namespace App\Http\Controllers;

use App\user;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;

class ApiController extends Controller
{
    public function api()
    {
        return view('api');
    }

    //Get donor details api
    public function getDonors()
    {
        $group = Request::get('group');
    	$city = Request::get('city');
    	$state = Request::get('state');
    	$conditions = [ 'is_donor' => '1' ];

    	if(isset($group)) $conditions = array_add($conditions, 'group', $group);
    	if(isset($city) ) $conditions = array_add($conditions, 'city', $city);
    	if(isset($state) ) $conditions = array_add($conditions, 'state', $state);
    	return User::where($conditions)->get();
    }
}




