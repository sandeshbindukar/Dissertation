@extends('layouts.app')
{{-- Content of Login Page --}}
@section('content')
<div class="row">
   <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
         <div class="panel-heading"><h4>Login Form</h4></div>
         <div class="panel-body">
             {{-- Login Form --}}
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
               {!! csrf_field() !!} {{-- laravel csrf protection to protect from forgery attacks --}}
               <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <label class="col-md-4 control-label">E-Mail Address</label>
                  <div class="col-md-6">
                     <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                     @if ($errors->has('email'))
                     <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                     </span>
                     @endif
                  </div>
               </div>
               <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  <label class="col-md-4 control-label">Password</label>
                  <div class="col-md-6">
                     <input type="password" class="form-control" name="password">
                     @if ($errors->has('password'))
                     <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                     </span>
                     @endif
                  </div>
               </div>
               <div class="form-group">
                  <div class="col-md-6 col-md-offset-4">
                     <div class="checkbox">
                        <label><input type="checkbox" name="remember"> Remember Me </label>
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <div class="col-md-6 col-md-offset-4">
                      {{-- submit button of login page  --}}
                     <button type="submit" class="btn btn-primary">
                        <i class="fa fa-btn fa-sign-in"></i>Login
                     </button>
                     {{-- link password resets page --}}
                     <a class="btn btn-link" href="{{ url('passwords/reset') }}">Forgot Your Password?</a>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection
