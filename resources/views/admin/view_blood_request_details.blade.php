@extends('layouts.admin')
{{-- Content of Admin View Blood Request Details Page --}}
@section('content')
<div class="panel panel-default">
   <div class="panel-heading"> <i class="fa fa-medkit"> </i> Blood Request Details</div>
   <div class="panel-body">
      <table class="table">
          {{-- create table to display details of blood requests --}}
         <tr>
            <td>Patient Name</td>
            <td> {{ ucfirst($view_blood_request_details->patient) }}</td>
         </tr>
         <tr>
            <td>Blood Group</td>
            <td> {{ $view_blood_request_details->group }}</td>
         </tr>
         <tr>
            <td>Doctor Name</td>
            <td> {{ $view_blood_request_details->doctor }}</td>
         </tr>
         <tr>
            <td>Hospital Address</td>
            <td> {{ $view_blood_request_details->hospital }}</td>
         </tr>
         <tr>
            <td> City</td>
            <td> {{ $view_blood_request_details->city }}</td>
         </tr>
         <tr>
            <td> District</td>
            <td> {{ $view_blood_request_details->district }}</td>
         </tr>
         <tr>
            <td> State</td>
            <td> {{ $view_blood_request_details->state }}</td>
         </tr>
         <tr>
            <td>Contact Person</td>
            <td> {{ $view_blood_request_details->contact_person }}</td>
         </tr>
         <tr>
            <td>Contact Phone</td>
            <td> {{ $view_blood_request_details->contact_phone }}</td>
         </tr>
         <tr>
            <td>Contact Email</td>
            <td> {{ $view_blood_request_details->contact_email }}</td>
         </tr>
         <tr>
            <td>Requested Date </td>
            <td> {{  date('F d, Y h:m A', strtotime($view_blood_request_details->created_at)) }}</td>
         </tr>
         <tr>
            <td>Required Date </td>
            <td> {{  date('F d, Y h:m A', strtotime($view_blood_request_details->when)) }}</td>
         </tr>
      </table>
   </div>
</div>
@endsection
