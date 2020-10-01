@extends('layouts.app')
{{-- Content of Add Camp Page --}}
@section('content')
<div class="row">
   <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
         <div class="panel-heading"><h4>Add New Camp</h4></div>
         <div class="panel-body">
             {{-- Form to add camp details --}}
            <form action="{{ url('camps/add') }}" method="post" >
               {{ csrf_field() }} {{-- laravel csrf protection to protect from forgery attacks --}}
               <div class="form-group">
                  <textarea name="details" placeholder="Camp Details" class="form-control" required></textarea>
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
                  <input type="text" name="start" placeholder="Start" class="form-control" id="start" required></input>
               </div>
               <div class="form-group">
                  <input type="text" name="end" placeholder="End" class="form-control" id="end" required></input>
               </div>
               <input type="submit" class="btn btn-primary" value="Add"> {{-- submit button --}}
             </form>
         </div>
      </div>
   </div>
</div>
@endsection
