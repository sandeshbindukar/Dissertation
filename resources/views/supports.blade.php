@extends('layouts.app')
{{-- Content for contact support page --}}
@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading"><h4>Contact Support</h4></div>
            <div class="panel-body">
                {{-- Form to contact support --}}
               <form action="supports" method="post" >
                  {{ csrf_field() }} {{-- laravel csrf protection to protect from forgery attacks --}}
                  <div class="form-group">
                     <p class="hint--top" data-hint="Name" id="input-field">
                        <input type="text" name="name" class="form-control"  placeholder="Full Name" required>
                     </p>
                  </div>
                  <div class="form-group">
                     <p class="hint--top" data-hint="Email" id="input-field">
                        <input type="email" name="email" class="form-control"   placeholder="Email Address" required>
                     </p>
                  </div>
                  <div class="form-group">
                     <p class="hint--top" data-hint="Message" id="input-field">
                        <textarea name="message" placeholder="Message" class="form-control" required></textarea>
                     </p>
                  </div>
                  <input type="submit" class="btn btn-primary"  value="Submit">
               </form>
            </div>
        </div>
    </div>
</div>
@endsection
