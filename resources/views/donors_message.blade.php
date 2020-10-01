@extends('layouts.app')
{{-- Content of Donors Message Page --}}
@section('content')
<div class="panel panel-default">
   <div class="panel-heading" style="display: flex;">
        <h4 style="width: 90%">Message</h4>
        {{-- link to delete donors message --}}
        <a href="{{ url('delete/donors_message/'.$view_message->id) }}">Delete Message</a>
   </div>
   <div class="panel-body">
        {{-- create table to display donors message inbox details --}}
      <table class="table">
       	<tr>
       	  <td> Sender</td>
       	  <td> {{ $view_message->sender }}</td>
       	</tr>
         <tr>
            <td> Phone</td>
            <td> {{ $view_message->phone }}</td>
         </tr>
       	<tr>
       	 <td> Subject</td>
       	 <td> {{ $view_message->subject }}</td>
       	</tr>
       	<tr>
       	 <td> Date</td>
       	 <td> {{  date('F d, Y h:m A', strtotime($view_message->created_at)) }}</td>
       	</tr>
       	<tr>
       	 <td>Message</td>
       	 <td> {{ $view_message->message }}</td>
       	</tr>
      </table>
      <div class="page-header"><h4>Reply</h4></div>
      {{-- form to reply the messages --}}
      <form action="/donors_message/reply" method="POST">
         {{ csrf_field() }} {{-- laravel csrf protection to protect from forgery attacks --}}
      <div class="form-group">
         <input placeholder="Subject" type="text" name="subject" class="form-control">
      </div>
      <div class="form-group">
         <textarea name="message" class="form-control" placeholder="Message"></textarea>
      </div>
      <div class="form-group">
         <input type="submit" class="btn btn-primary" value="Reply"> {{-- reply button --}}
      </div>
      </form>
   </div>
</div>
@endsection
