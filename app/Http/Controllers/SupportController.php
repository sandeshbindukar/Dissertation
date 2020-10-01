<?php

namespace App\Http\Controllers;

use App\Support;

use Illuminate\Support\Facades\Request;
use MercurySeries\Flashy\Flashy;

class SupportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => [ 'viewSupport' , 'saveSupport' ] ]);
    }

    //Function to view support page
    public function viewSupport()
    {
        $msg = Request::input('msg');
        if($msg == 1)
            Flashy::message('Message sent.','');
            return view('supports');
    }

    //saves support message in database
    public function saveSupport()
    {
        Flashy::message('Your message has been sent. We will contact you soon.','');
        $request = Request::all();
        Support::create($request);
        return redirect('supports');
    }
}
