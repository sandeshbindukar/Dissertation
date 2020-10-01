@extends('layouts.app')
{{-- Content of index page --}}
@section('content')
<div class="content-fixer">
	<div class="page-header">   <h4>Donor Search</h4></div>
	<div class="row">
        {{-- form for advanced search of donors --}}
		<form method="GET" action="donors/">
			<div class="col-md-2">
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
			</div>
		</form>
	</div>
	<div class="page-header">   <h4> Red Blood Cell Compatibilty Table </h4></div>
		<p>
            {{-- table to show compatibility of blood group with other groups --}}
			<table class="table table-bordered table-striped table-hover table-responsive info-table">
				<thead align="right">
					<tr>
						<th>Recipient</th>
						<th colspan="8">Donor</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td></td>
						<td><b>O-</b></td>
						<td><b>O+</b></td>
						<td><b>A-</b></td>
						<td><b>A+</b></td>
						<td><b>B-</b></td>
						<td><b>B+</b></td>
						<td><b>AB-</b></td>
						<td><b>AB+</b></td>
					</tr>
					<tr>
						<td><b>O-</b></td>
						<td><i class="fa fa-check"></i></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><b>O+</b></td>
						<td><i class="fa fa-check"></i></td>
						<td><i class="fa fa-check"></i></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><b>A-</b></td>
						<td><i class="fa fa-check"></i></td>
						<td></td>
						<td><i class="fa fa-check"></i></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><b>A+</b></td>
						<td><i class="fa fa-check"></i></td>
						<td><i class="fa fa-check"></i></td>
						<td><i class="fa fa-check"></i></td>
						<td><i class="fa fa-check"></i></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><b> B-</b></td>
						<td><i class="fa fa-check"></i></td>
						<td></td>
						<td></td>
						<td></td>
						<td><i class="fa fa-check"></i></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><b>B+</b></td>
						<td><i class="fa fa-check"></i></td>
						<td><i class="fa fa-check"></i></td>
						<td></td>
						<td></td>
						<td><i class="fa fa-check"></i></td>
						<td><i class="fa fa-check"></i> </td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><b>AB-</b></td>
						<td><i class="fa fa-check"></i></td>
						<td></td>
						<td><i class="fa fa-check"></i></td>
						<td></td>
						<td><i class="fa fa-check"></i></td>
						<td></td>
						<td><i class="fa fa-check"></i></td>
						<td></td>
					</tr>
					<tr>
						<td><b>  AB+</b></td>
						<td><i class="fa fa-check"></i></td>
						<td><i class="fa fa-check"></i></td>
						<td><i class="fa fa-check"></i></td>
						<td><i class="fa fa-check"></i></td>
						<td><i class="fa fa-check"></i></td>
						<td><i class="fa fa-check"></i></td>
						<td><i class="fa fa-check"></i></td>
						<td><i class="fa fa-check"></i></td>
					</tr>
				</tbody>
			</table>
        </p>
        {{-- some important facts everyone should know about the donation process --}}
		<div class="page-header">   <h4>Facts About Blood Donation Process </h4></div>
        <p>
            Donating blood is a safe process and saves lives. A sterile needle is used only once for each donor and then discarded. The actual donation process only takes 10 to 15 minutes. Any healthy adult between 18 years and 60 years of age can donate blood.
        </p>
        <p>
            Blood donation is a simple four-step process: registration, medical history and mni-physical, donation and refreshments. The entire process of donating blood, from registration through refreshments, takes about an hour.
        </p>
        <p>
            Every blood donor is given a mini-physical, checking the donor's temperature, blood pressure, pulse and hemoglobin to ensure it is safe for the donor to give the blood.
        </p>
        <p>
            The average adult has about 10 pints of blood in his body. Roughly 1 pint is given during a donation. A healthy donor may donate red blood cells every 56 days, or double red cells every 112 days.
        </p>
        <p>
            All donated blood is tested for HIV, Hepatitis B and C, Syphilis and other infectious diseases before it can be released to hospitals.
        </p>

        {{-- information about some announcements displays here --}}
        <div class="page-header">   <h4>Announcements</h4></div>
        <div class="row">
            {{-- displaying announcement details from the database --}}
            @foreach ($announcements as $view_ann)
            <div class="col-md-3">
				<div class="thumbnail">
                    <p>{{ $view_ann->announcement_details }}</p>
                </div>
            </div>
            @endforeach
             {{-- if there is 0 announcement --}}
            @if (count($announcements) == 0)
                <div class="alert alert-info">Currently there is no announcements.</div>
            @endif
        </div>

        {{-- New donors lists --}}
        <div class="page-header">   <h4>Recent Donors</h4></div>
		<div class="row">
            {{-- displaying recent donors from the database --}}
			@foreach($users as $user)
			<div class="col-md-3">
				<div class="thumbnail">
					<a href="{{ url('donors/'.$user->id) }}"> {{ ucwords($user->name) }}</a> ( {{ ucwords($user->address) }} , {{ ucwords($user->district) }}  )
					<div class="pull-right">{{ $user->group }}</div>
				</div>
			</div>
			@endforeach
            {{-- if there is 0 donor --}}
			@if (count($users) == 0)
			<div class="alert alert-info">Currently there is no donors.</div>
			@endif
		</div>
</div>
@endsection
