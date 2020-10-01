@extends('layouts.admin')
{{-- Content of Admin Edit Announcement Details Page --}}
@section('content')
<div class="panel panel-default">
   <div class="panel-heading"><i class="fa fa-bullhorn"></i> Edit Announcement Details</div>
   <div class="panel-body">
       {{-- Form to edit announcement details --}}
      <form action="{{ url('admin/announcement/edit/'.$announcement->id) }}" method="POST">
      {{ csrf_field() }} {{-- laravel csrf protection to protect from forgery attacks --}}
        <div class="form-group"> Announcement Details
            <input type="text" name="announcement_details" class="form-control" placeholder="Announcement Details" value="{{ $announcement->announcement_details }}">
        </div>
         <div class="form-group">
            <input type="submit" class="btn btn-primary"  value="Update">
         </div>
      </form>
   </div>
</div>
@endsection
