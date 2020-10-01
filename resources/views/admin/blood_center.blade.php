@extends('layouts.admin')
{{-- Content of Admin Blood Center Page --}}
@section('content')
<div class="panel panel-default">
   <div class="panel-heading"><i class="fa fa-ticket"></i> Blood Center Management</div>
   <div class="panel-body">
    {{-- create table to display details of blood center  --}}
    <table class="table">
         <tr>
            <th>Blood Center Name</th>
            <th>Phone Number</th>
            <th>City</th>
            <th>District</th>
            <th>State</th>
            <th>Landmark</th>
            <th>Actions</th>
         </tr>
         {{-- displaying the details in the table from database  --}}
         @foreach($blood_centers as $center)
         <tr>
            <td>{{ $center->name }}</td>
            <td>{{ $center->phone }}</td>
            <td>{{ $center->city }}</td>
            <td>{{ $center->district }}</td>
            <td>{{ $center->state }}</td>
            <td>{{ $center->landmark }}</td>
            <td>
                {{-- link to edit and delete blood center details --}}
               <a href="{{ url('admin/blood_center/edit/'.$center->id) }}" class="btn btn-info"><i class="fa fa-edit"></i> Edit</a>
               <a href="{{ url('admin/delete/blood_center/'.$center->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
            </td>
         </tr>
         @endforeach
         {{-- if there is 0 blood center details in database i.e no records --}}
         @if (count($blood_centers) == 0)
         <tr>
            <td colspan=6>There is no blood centers.</td>
         </tr>
         @endif
      </table>
      {{-- {{ $blood_centers->render() }} --}}
   </div>
</div>
@endsection
