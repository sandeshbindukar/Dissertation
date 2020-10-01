@extends('layouts.admin')
{{-- Content of Admin Add Announcement Page --}}
@section('content')
<div class="row">
   <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
         <div class="panel-heading"><h4>Add New Announcement</h4></div>
         <div class="panel-body">
             {{-- Form to add announcement details --}}
            <form action="{{ url('admin/announcement/add') }}" method="post" >
               {{ csrf_field() }} {{-- laravel csrf protection to protect from forgery attacks --}}
               <div class="form-group">
                  <textarea name="announcement_details" placeholder="Announcement Details" class="form-control" required></textarea>
               </div>
               <input type="submit" class="btn btn-primary" value="Add"> {{-- submit button --}}
             </form>
         </div>
      </div>
   </div>
</div>
@endsection
