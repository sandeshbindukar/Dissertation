@extends('layouts.app')
{{-- Content of API Page --}}
@section('content')
<div class="panel panel-default">
   <div class="panel-heading"><h4>API</h4></div>
   <div class="panel-body">
      <h4>Donors list</h4>
      {{-- get all the donors details in json format --}}
      <input type="text" value="{{ url('api/donors/') }}" class="form-control">
      <p class="help-block">Get all donors in JSON</p>
       Eg: <code>{{ url('api/donors/') }}</code> {{-- example --}}
      <hr>

      <h4>Donors list sort with blood group</h4>
      {{-- get all the donors details sort with blood group in json format --}}
      <input type="text" value="{{ url('api/donors/?group=blood_group+%2B') }}" class="form-control">
      <p class="help-block">Get donors based on blood group.<br>
         Replace <code>blood_group</code> with blood group (Blood group should be in url encoded). <br>
         Replace <sign> with + (%2B) or - (-) <br>
      </p>
      Eg: <code>{{ url('api/donors/?group=O+%2B') }}</code> {{-- example --}}
      <hr>

      <h4>Donors list sort with city</h4>
      {{-- get all the donors details sort with city in json format --}}
      <input type="text" value="{{ url('api/donors/?city=sort_city') }}" class="form-control">
      <p class="help-block">Get donors based on city.<br>
         Replace <code>sort_city</code> with city.
      </p>
      Eg: <code>{{ url('api/donors/?city=Kathmandu') }}</code> {{-- example --}}
      <hr>

      <h4>Donors list sort with state</h4>
      {{-- get all the donors details sort with state in json format --}}
      <input type="text" value="{{ url('api/donors/?state=sort_state') }}" class="form-control">
      <p class="help-block">Get donors based on state.<br>
        Replace <code>sort_state</code> with state.
      </p>
      Eg: <code>{{ url('api/donors/?state=Bagmati') }}</code> {{-- example --}}
      <hr>

      <h4>Mixed API Call</h4>
      {{-- get all the donors details sort with blood group, city, and state in json format --}}
      <input type="text" value="{{ url('api/donors/?group=blood_groupstate=sort_state&city=sort_city') }}" class="form-control">
      <p class="help-block">Get donors based on blood group , city , state .<br>
        Replace <code>blood_group</code> with blood_group (Blood group should be in url encoded).<br>
        Replace <code>sort_city</code> with city.<br>
        Replace <code>sort_state</code> with state.<br>
      </p>
      Eg: <code>{{ url('api/donors/?group=AB+%2B&state=Bagmati&city=Kathmandu') }}</code> {{-- example --}}
   </div>
</div>
@endsection
