@extends('layouts.app')
{{-- Content of Blood Request Details Page --}}
@section('content')
<div class="panel panel-default">
   <div class="panel-heading"><h4>Blood Request Details</h4></div>
   <div class="panel-body">
        {{-- create table to display blood request details --}}
      <table class="table">
         <tr>
            <td>Patient Name</td>
            <td> {{ ucfirst($blood_request_details->patient) }}</td>
         </tr>
         <tr>
            <td>Blood Group</td>
            <td> {{ $blood_request_details->group }}</td>
         </tr>
         <tr>
            <td>Doctor Name</td>
            <td> {{ $blood_request_details->doctor }}</td>
         </tr>
         <tr>
            <td>Hospital Address</td>
            <td> {{ $blood_request_details->hospital }}</td>
         </tr>
         <tr>
            <td> City</td>
            <td> {{ $blood_request_details->city }}</td>
         </tr>
         <tr>
            <td> District</td>
            <td> {{ $blood_request_details->district }}</td>
         </tr>
         <tr>
            <td> State</td>
            <td> {{ $blood_request_details->state }}</td>
         </tr>
         <tr>
            <td>Contact Person</td>
            <td> {{ $blood_request_details->contact_person }}</td>
         </tr>
         <tr>
            <td>Contact Phone</td>
            <td> {{ $blood_request_details->contact_phone }}</td>
         </tr>
         <tr>
            <td>Contact Email</td>
            <td> {{ $blood_request_details->contact_email }}</td>
         </tr>
         <tr>
            <td>Requested Date </td>
            <td> {{  date('F d, Y h:m A', strtotime($blood_request_details->created_at)) }}</td>
         </tr>
         <tr>
            <td>Required Date </td>
            <td> {{  date('F d, Y h:m A', strtotime($blood_request_details->when)) }}</td>
         </tr>
      </table>
   </div>
</div>
@endsection
