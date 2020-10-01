<?php

namespace App\Http\Controllers;

use App\BloodCenter;
use Illuminate\Support\Facades\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;

class BloodCenterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => [ 'index']]);
    }

    //Function to view blood center page
    public function index()
    {
       	$centers = BloodCenter::paginate(10);
        return view('blood_center', compact('centers'));
    }

    //Function to view add blood center page
    public function view_add_center()
    {
        return view('add_blood_center');
    }

    //Function to store new blood center details in database
    public function store_new_center()
    {
    	$request = Request::all();
    	BloodCenter::create($request);
    	Flashy::message('New Blood Center Details has been added.','');
        return redirect('blood_center');
    }
}
