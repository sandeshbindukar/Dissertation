<?php

namespace App\Http\Controllers;

use App\Camp;

use Illuminate\Support\Facades\Request;
use MercurySeries\Flashy\Flashy;

class CampController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => [ 'view_camps' ] ]);
    }

    //Function to View Camps
    public function view_camps()
    {
        $camps= Camp::all();
        return view('camps', compact('camps'));
    }

    //Opens new camp form
    public function add_new_camp()
    {
        return view('add_camp');
    }

    //Saving new Camp in database
    public function save_new_camp()
    {
        $input = Request::all();
        Camp::create($input);
        Flashy::message('New Camp details has been added.','');
        return redirect('camps');
    }
}
