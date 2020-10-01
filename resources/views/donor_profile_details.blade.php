@extends('layouts.app')
{{-- Content of Donors Profile Page --}}
@section('content')
<div class="panel panel-default">
   <div class="panel-heading"><h4>Donor Profile Details</h4></div>
   <div class="panel-body">
       {{-- create table to display donors profile details --}}
      <table class="table">
         <tr>
           <td> Full Name</td>
           <td> {{ $donor->name }}</td>
         </tr>
         <tr>
            <td> Age</td>
            <td> {{ $donor->age }}</td>
         </tr>
         <tr>
            <td> Gender</td>
            <td> {{ $donor->gender }}</td>
         </tr>
         <tr>
            <td> Weight</td>
            <td> {{ $donor->weight }} kgs</td>
         </tr>
         <tr>
            <td> Last Donated</td>
            <td>  {{  date('F d, Y h:m A', strtotime($donor->last_donated)) }}</td>
         </tr>
         <tr>
            <td>Blood Group</td>
            <td> {{ $donor->group }}</td>
         </tr>
         <tr>
            <td> Address</td>
            <td> {{ $donor->address }}</td>
         </tr>
         <tr>
            <td> City</td>
            <td> {{ $donor->city }}</td>
         </tr>
         <tr>
            <td> District</td>
            <td> {{ $donor->district }}</td>
         </tr>
         <tr>
            <td> State</td>
            <td> {{ $donor->state }}</td>
         </tr>
         <tr>
            <td>Phone Number</td>
            <td> {{ $donor->phone }}</td>
         </tr>
         <tr>
            <td>Email Address</td>
            <td> {{ $donor->email }}</td>
         </tr>
         <tr>
            <td>Social</td>
            <td>
               @if ($donor->social != '') {{--if donors have facebook --}}
               <a href="{{ $donor->social }}" target="_blank"><i class="fa fa-facebook"></i></a>
               @if ($donor->whatsapp == 1) {{--if donors have whatsapp --}}
               <p class="hint--top" data-hint="{{ $donor->phone }}"><i class="fa fa-whatsapp "></i></p>
               @endif
               @else
               -
               @endif
            </td>
         </tr>
      </table>
      <hr>
      <h4 style="color: #9A0013;">Send Message</h4>
      <hr>
      {{-- form to send a message to donors --}}
      <form action="{{ url('donors_message') }}" method="POST">
         {{ csrf_field() }} {{-- laravel csrf protection to protect from forgery attacks --}}
         <div class="form-group">
            <input type="email" name="sender" class="form-control" placeholder="Email" required>
         </div>
         <div class="form-group">
            <input type="phone" name="phone" class="form-control" placeholder="Phone" required>
         </div>
         <div class="form-group">
            <input type="text" name="subject" class="form-control" placeholder="Subject" required>
         </div>
         <div class="form-group">
           <textarea placeholder="Message" name="message" class="form-control" required></textarea>
         </div>
         <input type="hidden" name="receiver" value="{{ $donor->id }}">
         <div class="form-group">
            <input type="submit"  class="btn btn-primary" value="Send"> {{--submit button --}}
         </div>
      </form>
   </div>
</div>
@endsection
