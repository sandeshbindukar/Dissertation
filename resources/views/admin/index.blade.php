@extends('layouts.admin')
{{-- Content of Admin Users Page --}}
@section('content')
<div class="panel panel-default">
   <div class="panel-heading"><i class="fa fa-group"></i> User Management</div>
      <div class="panel-body">
        {{-- create table to display details of users  --}}
         <table class="table">
            <tr>
               <th>Full Name</th>
               <th>Email Address</th>
               <th>Joined On</th>
               <th>Last Login</th>
               <th>Donor</th>
               <th>Actions</th>
            </tr>
            {{-- displaying the details in the table from database  --}}
            @foreach($users as $user_details)
            <tr>
               <td>{{ $user_details->name }}</td>
               <td>{{ $user_details->email }}</td>
               <td>{{ date('F d, Y h:m A', strtotime($user_details->created_at)) }}</td>
               <td>{{ date('F d, Y h:m A', strtotime($user_details->updated_at)) }}</td>
               <td>
                    @if( $user_details->is_donor == 1 ) Yes {{-- if the user is donor  --}}
                    @else No {{-- if the user isn't donor  --}}
                    @endif
                </td>
               <td>
                  <a href="{{ url('admin/user/edit/'.$user_details->id) }}" class="btn btn-info"><i class="fa fa-edit"></i> Edit</a>
                  <!-- edit user details -->
                  @if ($user_details->id != Auth::user()->id ) <!-- making sure the logged in user cannot remove themselves -->
                     @if ($user_details->is_admin != 1)  <!-- checks if the user is not admin -->
                        <a href="{{ url('admin/make/admin/'.$user_details->id) }}" class="btn btn-success"><i class="fa fa-user-plus"></i> Make Admin</a>
                         <!-- make user admin -->
                     @else
                        <a href="{{ url('admin/remove/admin/'.$user_details->id) }}" class="btn btn-danger"><i class="fa fa-user-times"></i>Remove Admin</a>
                         <!-- remove user from admin -->
                     @endif
                  <a href="{{ url('admin/delete/user/'.$user_details->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
                  <!-- delete user from database -->
                  @endif
               </td>
            </tr>
            @endforeach
         </table>
      {{-- {{ $users->render() }} <!-- pagination render --> --}}
   </div>
</div>
@endsection
