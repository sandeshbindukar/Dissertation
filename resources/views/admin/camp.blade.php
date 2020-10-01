@extends('layouts.admin')
{{-- Content of Admin Camps Page --}}
@section('content')
<div class="panel panel-default">
   <div class="panel-heading"><i class="fa fa-ticket"></i> Camp Management</div>
      <div class="panel-body">
          {{-- create table to display details of blood donation camps  --}}
         <table class="table">
            <tr>
               <th>Camp Details</th>
               <th>City</th>
               <th>District</th>
               <th>State</th>
               <th>Start Date</th>
               <th>End Date</th>
               <th>Actions</th>
            </tr>
            {{-- displaying the details in the table from database  --}}
            @foreach($camps as $view_camp)
            <tr>
               <td>{{ $view_camp->details }}</td>
               <td>{{ $view_camp->city }}</td>
               <td>{{ $view_camp->district }}</td>
               <td>{{ $view_camp->state }}</td>
               <td>{{ date('F d, Y h:m A', strtotime($view_camp->start)) }}</td>
               <td>{{ date('F d, Y h:m A', strtotime($view_camp->end)) }}</td>
               <td>
                   {{-- link to edit and delete camp details --}}
                  <a href="{{ url('admin/camp/edit/'.$view_camp->id) }}" class="btn btn-info"><i class="fa fa-edit"></i> Edit</a>
                  <a href="{{ url('admin/delete/camp/'.$view_camp->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
               </td>
            </tr>
            @endforeach
             {{-- if there is 0 camp details in database i.e no records --}}
            @if (count($camps) == 0)
            <tr>
               <td colspan=6>There is no camps.</td>
            </tr>
            @endif
      </table>
      {{-- {{ $camps->render() }} --}}
   </div>
</div>
@endsection
