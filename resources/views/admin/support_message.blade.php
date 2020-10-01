@extends('layouts.admin')
{{-- Content of Admin View Support Message Page --}}
@section('content')
<div class="panel panel-default">
   <div class="panel-heading">
      <div class="pull-right"><a href="{{ url('admin/delete/support/'.$view_support->id) }}">Delete Message</a></div>
      <i class="fa fa-envelope"></i> Message
   </div>
   <div class="panel-body">
       {{-- create table to display details of support message  --}}
      <table class="table">
         <tr>
            <td>Full Name</td>
            <td> {{ $view_support->name }}</td>
         </tr>
         <tr>
            <td>Email Address</td>
            <td> {{ $view_support->email }}</td>
         </tr>
         <tr>
            <td>Message Date</td>
            <td> {{ date('F d, Y h:m A', strtotime($view_support->created_at)) }}</td>
         </tr>
         <tr>
            <td>Message</td>
            <td> {{ $view_support->message }}</td>
         </tr>
      </table>
   <div class="page-header">Reply</div>
   {{-- Form to reply the support messages --}}
   <form action="/admin/reply" method="POST">
      {{ csrf_field() }} {{-- laravel csrf protection to protect from forgery attacks --}}
      <div class="form-group">
         <input placeholder="Subject" type="text" name="subject" class="form-control">
      </div>
      <div class="form-group">
         <textarea name="message" class="form-control" placeholder="Message"></textarea>
      </div>
      <div class="form-group">
         <input type="submit" class="btn btn-primary" value="Reply">
      </div>
   </form>
   </div>
</div>
@endsection
