@extends('layouts.app')
{{-- Content of Add Blood Center Page --}}
@section('content')
<div class="row">
  <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
         <div class="panel-heading"><h4>Add New Blood Center</h4></div>
         <div class="panel-body">
             {{-- Form to add blood center details --}}
            <form action="{{ url('blood_center/add') }}" method="post" >
            {{ csrf_field() }} {{-- laravel csrf protection to protect from forgery attacks --}}
               <div class="form-group">
                  <input type="text" name="name" placeholder="Blood Center Name" class="form-control" required></input>
               </div>
               <div class="form-group">
                  <input type="phone" name="phone" placeholder="Phone Number" class="form-control" required></input>
               </div>
               <div class="form-group">
                  <input type="text" name="city" placeholder="City" class="form-control" required></input>
               </div>
               <div class="form-group">
                  <input type="text" name="district" placeholder="District" class="form-control" required></input>
               </div>
               <div class="form-group">
                  <input type="text" name="state" placeholder="State" class="form-control" required></input>
               </div>
               <div class="form-group">
                  <input type="text" name="landmark" placeholder="Landmark" class="form-control" required></input>
               </div>
               <input type="submit" class="btn btn-primary" value="Add"> {{-- submit button --}}
            </form>
         </div>
      </div>
  </div>
</div>
@endsection
