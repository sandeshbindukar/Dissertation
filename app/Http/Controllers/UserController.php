<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;
use MercurySeries\Flashy\Flashy;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except' => [ 'view_donors' , 'donor_profile_details' ] ]);
    }

    //Function to view Donors
    public function view_donors()
    {
        $input = Request::all();
        $conditions = [ 'is_donor' => '1' ];

        if(isset($input['group']))        $conditions = array_add($conditions, 'group', $input['group']);
        if(isset($input['city']))         $conditions = array_add($conditions, 'city', $input['city']);
        if(isset($input['state']))        $conditions = array_add($conditions, 'state', $input['state']);
        if(isset($input['district']))     $conditions = array_add($conditions, 'district', $input['district']);

        $users = User::where($conditions)->paginate(9);
        return view('donors', compact('users'));
    }

    //Function to view donors profile details
    public function donor_profile_details($id)
    {
        $donor = User::findOrFail($id);
        return view('donor_profile_details',compact('donor'));
    }

    //Function to view User Profile
     public function viewUserProfile()
     {
        $user = Auth::user();
        return view('user_profile', compact('user'));
    }

    //Function to update the user profile
    public function updateUserProfile()
    {
        $request = Request::all();
        $user = User::findOrFail(Auth::user()->id);
        $user->update($request);

        Flashy::message('Your profile has been updated.','');
        return redirect('donors');
    }

    //User Password Change
    public function reqPasswordChange()
    {
        return view('password_change');
    }

    //Functiom to update new password
    public function updateNewPassword()
    {
        $request = Request::all();
        $user = User::findOrFail(Auth::user()->id);

        $data['password'] = bcrypt($request['password']);

        $user->update($data);

        Flashy::message('Password changed','');
        return redirect('user_home');
    }

}
