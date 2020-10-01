@extends('layouts.admin')
{{-- Content of Admin View Support Page --}}
@section('content')
<div class="panel panel-default">
   <div class="panel-heading"><i class="fa fa-envelope"></i> Support Management</div>
   <div class="panel-body">
    {{-- create table to display details of support --}}
      <table class="table">
         <tr>
            <th>Full Name</th>
            <th>Email Address</th>
            <th>Message Date</th>
            <th>Actions</th>
         </tr>
         {{-- displaying the details in the table from database  --}}
         @foreach($supports as $view_support)
         <tr>
            <td>{{ $view_support->name }}</td>
            <td>{{ $view_support->email }}</td>
            <td>{{ date('F d, Y h:m A', strtotime($view_support->created_at)) }}</td>
            <td>
                {{-- link to view and delete support details --}}
               <a href="{{ url('admin/view/support/'.$view_support->id) }}" class="btn btn-lightt"><i class="fa fa-eye"></i> View</a>
               <a href="{{ url('admin/delete/support/'.$view_support->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
            </td>
         </tr>
         @endforeach
          {{-- if there is 0 support details in database i.e no records --}}
         @if (count($supports) == 0)
         <tr>
            <td colspan=4> There is no messages.</td>
         </tr>
         @endif
      </table>
   {{-- {{ $supports->render() }} --}}
   </div>
</div>
@endsection
