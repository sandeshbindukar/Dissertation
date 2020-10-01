@extends('layouts.app')
{{-- Content of Add Camp Page --}}
@section('content')
<div class="row">
   <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
         <div class="panel-heading">
            <div class="row">
               <div class="col-md-7">
                  <h4>Blood Centers</h4>
               </div>
               <div class="col-md-5">
                   {{-- link to add bood center page --}}
                 <div class="pull-right" ><a href="{{ url('blood_center/add') }}"><b>Add Blood Center</b></a></div>
               </div>
            </div>
        </div>
         <div class="panel-body">
             {{-- create table to display blood center details --}}
            <table class="table">
               <tr>
                  <th>Blood Center Name</th>
                  <th>Phone Number</th>
                  <th>State</th>
                  <th>District</th>
                  <th>City</th>
                  <th>Landmark</th>
               </tr>
               {{-- displaying the details in the table from database  --}}
               @foreach($centers as $blood_center )
               <tr>
                 <td>{{ $blood_center->name }}</td>
                 <td>{{ $blood_center->phone }}</td>
                 <td>{{ $blood_center->city }}</td>
                 <td>{{ $blood_center->district }}</td>
                 <td>{{ $blood_center->state }}</td>
                 <td>{{ $blood_center->landmark }}</td>
               </tr>
               @endforeach
            </table>
         </div>
      </div>
   </div>
</div>
@endsection
