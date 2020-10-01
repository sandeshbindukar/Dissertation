@extends('layouts.app')
{{-- content of password change page --}}
@section('content')
<div class="row">
   <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
         <div class="panel-heading"><h4>Change Password</h4></div>
         <div class="panel-body">
             {{-- form to change the users password --}}
            <form action="{{ url('password_change') }}" method="post" >
             {{ csrf_field() }} {{-- laravel csrf protection to protect from forgery attacks --}}
               <div class="form-group">
                  <p class="hint--top" data-hint="New Password" id="input-field">
                     <input type="password" name="password" class="form-control" placeholder="Password">
                  </p>
               </div>
               <div class="form-group">
                  <input type="submit" class="btn btn-primary"  value="Change"> {{-- submit button --}}
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection
