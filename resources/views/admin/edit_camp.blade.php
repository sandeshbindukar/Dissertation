@extends('layouts.admin')
{{-- Content of Admin Edit Camp Details Page --}}
@section('content')
<div class="panel panel-default">
   <div class="panel-heading"><i class="fa fa-ticket"></i> Edit Camp Details</div>
   <div class="panel-body">
       {{-- Form to edit camp details --}}
      <form action="{{ url('admin/camp/edit/'.$camp->id) }}" method="POST">
      {{ csrf_field() }} {{-- laravel csrf protection to protect from forgery attacks --}}
        <div class="form-group"> Camp Details
            <input type="text" name="details" class="form-control" placeholder="Camp Details" value="{{ $camp->details }}">
        </div>
         <div class="form-group"> City
            <input type="text" name="city" class="form-control" placeholder="City" value="{{ $camp->city }}">
         </div>
         <div class="form-group"> District
            <input type="text" name="district" class="form-control" placeholder="District" value="{{ $camp->district }}">
         </div>
         <div class="form-group"> State
            <input type="text" name="state" class="form-control" placeholder="State" value="{{ $camp->state }}">
         </div>
         <div class="form-group"> Start
            <input type="text" name="start" class="form-control" placeholder="Start" value="{{ $camp->start }}">
         </div>
         <div class="form-group"> End
            <input type="text" name="end" class="form-control" placeholder="End" value="{{ $camp->end }}">
         </div>
         <div class="form-group">
            <input type="submit" class="btn btn-primary"  value="Update">
         </div>
      </form>
   </div>
</div>
@endsection
