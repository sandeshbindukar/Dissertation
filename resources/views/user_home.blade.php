@extends('layouts.app')
{{-- Content of user homepages --}}
@section('content')
<div class="row">
   <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
         <div class="panel-heading"><h4> Messages</h4></div>
         <div class="panel-body">
             {{-- table to show user messages --}}
           <table class="table">
               <tr>
                  <th>Subject</th>
                  <th>Sender</th>
                  <th>Messaged On</th>
               </tr>
               {{-- display messages with details from database --}}
               @foreach($get_messages as $msg)
               <tr>
                   {{-- link to donors message page --}}
                  <td><a href="{{ url('donors_message/'.$msg->id) }}">{{ $msg->subject }}</a></td>
                  <td>{{ $msg->sender }}</td>
                  <td><p class="hint--top" data-hint="{{  date('F d, Y h:m A', strtotime($msg->created_at)) }}">
                  {{ $msg->created_at->diffForHumans() }} </p></td>
               </tr>
               @endforeach
               {{-- if donors have 0 message --}}
               @if (count($get_messages) == 0)
               <tr>
                  <td colspan="3">You have not received any messages.</td>
               </tr>
               @endif
            </table>
         </div>
      </div>
   </div>
</div>
<div class="row">
   <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
         <div class="panel-heading"><h4> Blood Requests? Near Location</h4></div>
         <div class="panel-body">
             {{-- table to display blood request  --}}
           <table class="table">
             <tr>
                <th>Full Name</th>
                <th>City</th>
                <th>Blood Group</th>
             </tr>
             {{-- display requests with details from database --}}
             @foreach($blood_requests as $brq)
             <tr>
                 {{-- link to view blood requests details --}}
              <td><a href="{{ url('blood_request_details/'.$brq->id) }}">{{ $brq->patient  }}</a></td>
              <td>{{ $brq->city }}</td>
              <td>{{ $brq->group }}</td>
             </tr>
             @endforeach
             {{-- if there is 0 blood requests --}}
             @if (count($blood_requests) == 0)
              <tr>
                <td colspan="3">No nearby blood requests.</td>
              </tr>
            @endif
           </table>
         </div>
      </div>
   </div>
</div>
@endsection
