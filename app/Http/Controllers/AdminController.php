<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Request;

use App\User;
use App\BloodCenter;
use App\BloodRequest;
use App\Camp;
use App\Support;
use App\Announcement;

class AdminController extends Controller
{
    public function __construct()
	{
        $this->middleware('auth');
        if(auth()->check() && auth()->user()->is_admin != 1)  Redirect::to('user_home')->send(); //if not admin redirect to user homepage
	}

    /* USERS  */
    //Function to view admin index page
    public function index()
    {
        $users = User::paginate(10);
        return view('admin.index', compact('users'));
    }

    //Function to open edit user details form/page
    public function editUserDetails($id)
    {
        $user = User::findOrFail($id);
        return view('admin.edit_user', compact('user'));
    }

    //Function to update the edited user details in the database
    public function updateUserDetails($id)
    {
        $user = User::findOrFail($id);
        $request = Request::all();
        $user->update($request);
        Flashy::message('User Details Updated','');
        return redirect('admin/');
    }

    //Function to give user admin privilege
    public function makeUserAdmin($id)
    {
        $user = User::findOrFail($id);
        $data['is_admin'] = 1;
        $user->update($data);

        Flashy::message('Added admin privilege','');
        return redirect('admin');
    }

    //Function to remove user's admin privilege
    public function removeFromAdmin($id)
    {
        $user = User::findOrFail($id);
        $data['is_admin'] = 0;
        $user->update($data);

        Flashy::message('Removed admin privilege','');
        return redirect('admin');
    }

    //Function to delete user details from database
    public function deleteUserDetails($id)
    {
        $del_user = User::findOrFail($id);
        $del_user->delete();

        Flashy::message('User removed from database','');
        return redirect('admin');
    }

    /* BLOOD CENTERS  */
    //Function to view blood center in admin page
    public function viewBloodCenter()
    {
        $blood_centers = BloodCenter::paginate(10);
        return view('admin.blood_center', compact('blood_centers'));
    }

    //Function to delete blood center details from database
    public function deleteBloodCenterDetails($id)
    {
        $del_center = BloodCenter::findOrFail($id);
        $del_center->delete();

        Flashy::message('Blood Center deleted sucessfully','');
        return redirect('admin/blood_center');
    }

    //Function to view edit blood center form in admin page
    public function viewEditBloodCenter($id)
    {
        $center = BloodCenter::findOrFail($id);
        return view('admin.edit_blood_center', compact('center'));
    }

    //Function to update blood center details in the database
    public function updateBloodCenterDetails($id)
    {
        $request = Request::all();
        $center = BloodCenter::findOrFail($id);
        $center->update($request);

        Flashy::message('Blood Center details updated sucessfully','');
        return redirect('admin/blood_center');
    }

    /* CAMPS  */
    //Function to view camp in admin page
    public function viewCamp()
    {
        $camps = Camp::paginate(10);
        return view('admin.camp', compact('camps'));
    }

    //Function to view edit camp form in admin page
    public function viewEditCamp($id)
    {
        $camp = Camp::findOrFail($id);
        return view('admin.edit_camp', compact('camp'));
    }

    //Function to update camp details in the database
    public function updateCampDetails($id)
    {
        $up_camp = Camp::findOrFail($id);
        $request = Request::all();
        $up_camp->update($request);
        Flashy::message('Camp details updated sucessfully','');

        return redirect('admin/camp');
    }

    //Function to delete camp details from database
    public function deleteCampDetails($id)
    {
        $del_camp = Camp::findOrFail($id);
        $del_camp->delete();

        Flashy::message('Camp details deleted sucessfully','');
        return redirect('admin/camp');
    }

    /* BLOOD REQUESTS */
    //Function to view admin blood requests page
    public function viewBloodRequestsDetails()
    {
        $blood_requests = BloodRequest::paginate(10);
        return view('admin.blood_request', compact('blood_requests'));
    }

    //Function to view blood request details
    public function viewBloodRequestDetails($id)
    {
        $view_blood_request_details = BloodRequest::findOrFail($id);
        return view('admin.view_blood_request_details',compact('view_blood_request_details'));
    }

    //Function to delete the blood requests
    public function deleteBloodRequestDetails($id)
	 {
	 	$blood_request = BloodRequest::findOrFail($id);
	 	$blood_request->delete();

	 	Flashy::message('Blood Request deleted sucessfuly','');
	 	return redirect('admin/blood_request');
	 }

    /* ADMIN SUPPORT */
    //Function to view admin support page
    public function viewSupportDetails()
    {
        $supports = Support::paginate(10);
        return view('admin.support', compact('supports'));
    }

    //Function to view messages with sender details
    public function viewSupportMessage($id)
    {
        $view_support = Support::findOrFail($id);
        return view('admin.support_message',compact('view_support'));
    }

    //Function to reply those support messages
    public function replySupportMessage()
    {
        Flashy::message('Message replied','');
        return redirect('admin/support');
    }

    //Function to delete the messages
    public function deleteSupportMessage($id)
	 {
	 	$support = Support::findOrFail($id);
	 	$support->delete();

	 	Flashy::message('Message deleted sucessfuly','');
	 	return redirect('admin/support');
     }

     /** ANNOUNCEMENTS */
    //Function to view announcement in admin page
    public function viewAnnouncement()
    {
    $announcements = Announcement::paginate(10);
    return view('admin.announcement', compact('announcements'));
    }

    //Function to view add announcement form in admin page
    public function viewAddAnnouncement(){
        return view('admin/add_announcement');
    }

    //Function to save new announcement details in the database
    public function saveAddAnnouncement()
    {
    	$request = Request::all();
    	Announcement::create($request);
    	Flashy::message('New Announcement Details has been added.','');
        return redirect('admin/announcement');
    }

    //Function to delete announcement details from database
    public function deleteAnnouncement($id)
    {
        $announcement = Announcement::findOrFail($id);
        $announcement->delete();

        Flashy::message('Announcement details deleted sucessfully','');
        return redirect('admin/announcement');
    }

      //Function to view edit announcement form in admin page
      public function viewEditAnnouncement($id)
      {
        $announcement = Announcement::findOrFail($id);
        return view('admin.edit_announcement', compact('announcement'));
      }

      //Function to update announcement details in the database
      public function updateAnnouncementDetails($id)
      {
        $announcement = Announcement::findOrFail($id);
        $request = Request::all();
        $announcement->update($request);
        Flashy::message('Announcement details updated sucessfully','');

        return redirect('admin/announcement');
      }
}
