<?php

namespace App\Http\Controllers;

use App\User;
use App\Messages;
use App\BloodRequest;
use App\Announcement;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => [ 'index' ] ]);
    }

    //Index page
    public function index()
    {
        $users = User::where('is_donor' , '1')->take(5)->get();
        $announcements = Announcement::paginate(10);
        return view('welcome',compact('users','announcements'));
    }

    //User Home page
    public function home()
    {
        $var = [ 'district' =>  Auth::user()->district , 'state' =>  Auth::user()->state ];
        $blood_requests = BloodRequest::where($var)->get();

        $get_messages = Messages::where('receiver',Auth::user()->id)->get();
        return view('user_home',compact('get_messages' , 'blood_requests'));
    }

}
