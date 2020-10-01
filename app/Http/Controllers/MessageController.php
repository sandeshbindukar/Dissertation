<?php

namespace App\Http\Controllers;

use App\Messages;
use App\User;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;
use MercurySeries\Flashy\Flashy;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => [ 'sendMessageToDonor' ] ]);
    }

    //Function to send message to donor
    public function sendMessageToDonor()
    {
        $request = Request::all();
        $user = User::findOrFail($request['receiver']);

        Messages::create($request);
        Flashy::message('Message Sent to '.$user->name.' ' ,'');
        return redirect('donors/'.$request['receiver']);
    }

    //Function to view messages
    public function viewMessage($id)
    {
        $view_message = Messages::findOrFail($id);
        if(Auth::user()->id != $view_message->receiver) return redirect('user_home');
        return view('donors_message', compact('view_message'));
    }

    //Function to reply messages
    public function replyMessage()
     {
        Flashy::message('Message Replied','');
        return redirect('user_home');
     }

     //Function to delete messages
     public function deleteMessage($id)
     {
        $del_message = Messages::findOrFail($id);
        $del_message->delete();

        Flashy::message('Message deleted sucessfuly','');
        return redirect('user_home');
     }

}
