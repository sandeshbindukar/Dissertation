@extends('layouts.app')
{{-- Content of Blood Requests Page --}}
@section('content')
<div class="content-fixer">
  <div class="row">
    <div class="col-md-2">
        {{-- form for advanced search of donors --}}
      <form method="GET" action="">
        <div class="form-group">
          <select name="group" class="form-control">
            <option value ="A +">A +</option>
            <option value ="A -">A -</option>
            <option value ="B +">B +</option>
            <option value ="B -">B -</option>
            <option value ="AB +">AB +</option>
            <option value ="AB -">AB -</option>
            <option value ="O +">O +</option>
            <option value ="O -">O -</option>
          </select>
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <input name="state" class="form-control" placeholder="State" required >
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <input name="district" class="form-control" placeholder="District" required >
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
            <div class="input-group">
               <input name="city" class="form-control" placeholder="City" required >
               <span class="input-group-btn">
                <input type="submit" class="btn btn-default btn-info" value="Search">
               </span>
            </div>
         </div>
       </form>
     </div>
   </div>
   <div class="panel panel-default">
      <div class="panel-heading"><h4> Blood Requests </h4></div>
      <div class="panel-body">
          {{-- displaying the details in the table from database  --}}
        @foreach($requests as $view_request )
        <div class="thumbnail">
          <div class="panel-content">
              {{-- link to view the blood request details --}}
           <h4> <a href="{{ url('blood_request_details/'.$view_request->id) }}"> {{  ucfirst($view_request->patient) }} - {{ $view_request->group }}ve </a> </h4>
           <ul class="list-group">
             <li class="list-group-item">Blood Group : {{ $view_request->group }}ve </li>
             <li class="list-group-item">City : {{ $view_request->city }} </li>
             <li class="list-group-item">District : {{ $view_request->district }} </li>
             <li class="list-group-item">State : {{ $view_request->state }} </li>
           </ul>
         </div>
       </div>
       @endforeach
      </div>
   </div>
</div>
@endsection
