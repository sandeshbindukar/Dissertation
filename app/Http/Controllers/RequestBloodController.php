<?php

namespace App\Http\Controllers;

use App\BloodRequest;
use Illuminate\Support\Facades\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;

class RequestBloodController extends Controller
{
    //Function to view request blood page
    public function requestBlood()
    {
        return view('request_blood');
    }

    //Function to store blood request details
    public function storeRequestDetails()
    {
    	$input = Request::all();
    	BloodRequest::create($input);
    	Flashy::message('Your request has been added. We will contact you soon.','');
        return view('request_blood');
    }

    //Function to view requests from database
    public function viewRequests()
    {
       $input = Request::all();
       $conditions = [];

        if(isset($input['group'])) $conditions = array_add($conditions, 'group', $input['group']);
        if(isset($input['city'])) $conditions = array_add($conditions, 'city', $input['city']);
        if(isset($input['state'])) $conditions = array_add($conditions, 'state', $input['state']);
        if(isset($input['district'])) $conditions = array_add($conditions, 'district', $input['district']);

	    $requests = BloodRequest::where($conditions)->where('when', '>=', time() - (24*60*60))->get();;
        return view('blood_requests',compact('requests'));
    }

    //Function to display the results in blood request details page
    public function viewRequestDetails($id)
    {
    	$blood_request_details = BloodRequest::findOrFail($id);
        return view('blood_request_details',compact('blood_request_details'));
    }
}
