@extends('layouts.app')
{{-- Content of Camps Page --}}
@section('content')
<div class="row">
  <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
              <div class="col-md-7">
                <h4>Blood Donation Camps</h4>
              </div>
              <div class="col-md-5">
                  {{-- link to add camp page --}}
                <div class="pull-right"><a href="{{ url('camps/add') }}"><b>Add Camp</b></a></div>
              </div>
            </div>
          </div>
          <div class="panel-body">
               {{-- create table to display camp details --}}
            <table class="table">
                <tr>
                   <th>Camp Details</th>
                   <th>State</th>
                   <th>District</th>
                   <th>City</th>
                   <th>Start Date</th>
                   <th>End Date</th>
                </tr>
                 {{-- displaying the details in the table from database  --}}
                @foreach($camps as $view_camp  )
                <tr>
                  <td>{{ $view_camp->details }}</td>
                  <td>{{ $view_camp->state }}</td>
                  <td>{{ $view_camp->district  }}</td>
                  <td>{{ $view_camp->city  }}</td>
                  <td>{{ date('F d, Y h:m A', strtotime($view_camp->start))  }}</td>
                  <td>{{ date('F d, Y h:m A', strtotime($view_camp->end)) }}</td>
                </tr>
                @endforeach
             </table>
          </div>
      </div>
  </div>
</div>
@endsection
