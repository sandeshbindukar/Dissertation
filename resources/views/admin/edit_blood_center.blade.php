@extends('layouts.admin')
{{-- Content of AdminEdit Blood Center Page --}}
@section('content')
<div class="panel panel-default">
   <div class="panel-heading"><i class="fa fa-ticket"></i> Edit Blood Center Details</div>
   <div class="panel-body">
       {{-- Form to edit blood center details --}}
      <form action="{{ url('admin/blood_center/edit/'.$center->id) }}" method="POST">
      {{ csrf_field() }} {{-- laravel csrf protection to protect from forgery attacks --}}
         <div class="form-group"> Blood Center Name
            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $center->name }}">
         </div>
         <div class="form-group"> Phone Number
            <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ $center->phone }}">
         </div>
         <div class="form-group"> State
            <input type="text" name="state" class="form-control" placeholder="State" value="{{ $center->state }}">
         </div>
         <div class="form-group"> District
            <input type="text" name="district" class="form-control" placeholder="District" value="{{ $center->district }}">
         </div>
         <div class="form-group"> City
            <input type="text" name="city" class="form-control" placeholder="City" value="{{ $center->city }}">
         </div>
         <div class="form-group"> Landmark
            <input type="text" name="landmark" class="form-control" placeholder="Landmark" value="{{ $center->landmark }}">
         </div>
         <div class="form-group">
            <input type="submit" class="btn btn-primary"  value="Update">
         </div>
      </form>
   </div>
</div>
@endsection
