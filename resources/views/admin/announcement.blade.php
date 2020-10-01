@extends('layouts.admin')
{{-- Content of Admin View Announcement Page --}}
@section('content')
<div class="panel panel-default">
   <div class="panel-heading">
        <i class="fa fa-bullhorn"></i> Announcement Management
        {{-- Some css style to add announcement link --}}
        <a style="color: black;float:right; font-weight:bold " href="{{ url('admin/announcement/add') }}">Add Announcement</a>
    </div>
   <div class="panel-body">
    {{-- create table to display details of announcements --}}
      <table class="table">
         <tr>
            <th>Announcement Details</th>
            <th>Announced Date</th>
            <th>Updated Date</th>
            <th>Actions</th>
         </tr>
         {{-- displaying the details in the table from database  --}}
         @foreach($announcements as $view_announcement)
         <tr>
            <td>{{ $view_announcement->announcement_details }}</td>
            <td>{{ date('F d, Y h:m A', strtotime($view_announcement->created_at)) }}</td>
            <td>{{ date('F d, Y h:m A', strtotime($view_announcement->updated_at)) }}</td>
            <td>
                {{-- link to edit and delete announcements details --}}
                <a href="{{ url('admin/announcement/edit/'.$view_announcement->id) }}" class="btn btn-info"><i class="fa fa-edit"></i> Edit</a>
               <a href="{{ url('admin/delete/announcement/'.$view_announcement->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
            </td>
         </tr>
         @endforeach
          {{-- if there is 0 announcements details in database i.e no records --}}
         @if (count($announcements) == 0)
         <tr>
            <td colspan=4> There is no announcement.</td>
         </tr>
         @endif
      </table>
   {{-- {{ $announcements->render() }} --}}
   </div>
</div>
@endsection
