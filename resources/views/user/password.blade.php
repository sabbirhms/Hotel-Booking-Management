@extends('layouts.master')

@section('content')
<div class="container-fluid" style="padding-top: 70px">
<div class="row">
  <div class="col-sm-3">
    <a href="/home">
My Bookings

</a>
<br><br>

<a href="{{route('profile')}}" >My Profile</a>
<br><br>
<a href="{{route('user.message')}}" >Message</a>
<br><br>
<a class="active" href="{{route('password_change')}}">
Change Password

</a>
</div>
	<div class="col-sm-9">

            <div class="card">
   
                <div class="card-body">
                    <form method="POST" action="{{ route('password_change.update') }}">
                        @csrf 
   
                         @foreach ($errors->all() as $error)
                            <p class="text-danger">{{ $error }}</p>
                         @endforeach 
  
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Current Password</label>
  
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="current_password" autocomplete="current-password">
                            </div>
                        </div>
  
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">New Password</label>
  
                            <div class="col-md-6">
                                <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password">
                            </div>
                        </div>
  
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">New Confirm Password</label>
    
                            <div class="col-md-6">
                                <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">
                            </div>
                        </div>
   
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Update Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

	</div>
	
</div>
</div>
@endsection
@section('custom_js')
<script type="text/javascript">
  $("#Password").addClass('active');
</script>
@endsection