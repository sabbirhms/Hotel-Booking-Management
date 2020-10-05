@extends('layouts.master')

@section('content')
<div class="container-fluid" style="padding-top: 70px">
<div class="row">
  <div class="col-sm-3">
    <a href="/home">
My Bookings

</a>
<br><br>

<a class="active" href="{{route('profile')}}" >My Profile</a>
<br><br>
<a href="{{route('user.message')}}" >Message</a>
<br><br>
<a href="{{route('password_change')}}">
Change Password

</a>
  </div>
	<div class="col-sm-9">

  <h3>Profile</h3> <hr>

  <label for="name">Name : {{auth()->user()->name}}</label><br>
  <label for="name">Email : {{auth()->user()->email}}</label><br>
  <label for="name">Phone Number :{{auth()->user()->mobile}} </label><br>
  <!--label for="name">Address : {{auth()->user()->mobile}}</label><br-->
  <label for="name">Member Since :{{auth()->user()->created_at}} </label>
</div>
 </div>
</div>
@endsection
@section('custom_js')
<script type="text/javascript">
  $("#Profile").addClass('active');
</script>
@endsection