@extends('layouts.admin')
{{-- Content of Admin Blood Request Page --}}
@section('content')
<div class="panel panel-default">
   <div class="panel-heading"><i class="fa fa-medkit"></i> Blood Requests Management</div>
   <div class="panel-body">
       {{-- create table to display details of blood requests  --}}
      <table class="table">
         <tr>
            <th>Patient Name</th>
            <th>Blood Group</th>
            <th>Hospital</th>
            <th>City</th>
            <th>Request Date</th>
            <th>Actions</th>
         </tr>
         {{-- displaying the details in the table from database  --}}
         @foreach($blood_requests as $view_blood_request_details)
         <tr>
            <td>{{ ucfirst($view_blood_request_details->patient) }}</td>
            <td>{{ $view_blood_request_details->group }}</td>
            <td>{{ $view_blood_request_details->hospital }}</td>
            <td>{{ $view_blood_request_details->city }}</td>
            <td>{{ date('F d, Y h:m A', strtotime($view_blood_request_details->created_at)) }}</td>
            <td>
                {{-- link to view and delete blood request details --}}
               <a href="{{ url('admin/view/blood_request/'.$view_blood_request_details->id) }}" class="btn btn-lightt"><i class="fa fa-eye"></i> View</a>
               <a href="{{ url('admin/delete/blood_request/'.$view_blood_request_details->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
            </td>
         </tr>
         @endforeach
         {{-- if there is 0 blood requests details in database i.e no records --}}
         @if (count($blood_requests) == 0)
         <tr>
            <td colspan=4>There is no blood request.</td>
         </tr>
         @endif
      </table>
   {{-- {{ $blood_requests->render() }} --}}
   </div>
</div>
@endsection
