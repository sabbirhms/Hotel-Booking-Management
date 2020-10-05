@extends('layouts.master')

@section('content')
<div class="container-fluid" style="padding-top: 70px">
<div class="row">
	<div class="col-sm-3">
		<a class="active" href="/home">
My Bookings

</a>
<br><br>

<a id="Profile" href="profile.html" >My Profile</a>
<br><br>
<a id="Profile" href="profile.html" >My Profile</a>
<br><br>
<a id="Password" href="changePW.html">
Change Password

</a>
	</div>
	<div class="col-sm-9">
		 <h3>My Bookings</h3> <hr>
<table class="table table-bordered">

<tr>

<td>SN</td>
<th>Booking No</th>
<th>Room No</th>
<th>Room Type</th>
<th>Room Price</th>
<th>Check_in</th>
<th>Check_out</th>
<th>Status</th>
</tr>
@foreach($booking as $key=>$my_booking)
<tr>
	<td>{{$key}}</td>
	<td>{{$my_booking->id}}</td>
	<td>{{$my_booking->room_number}}</td>
	<td>{{$my_booking->room_type}}</td>
	<td>{{$my_booking->price}}</td>
	<td>{{$my_booking->check_in_date}}</td>
	<td>{{$my_booking->check_out_date}}</td>
	<td>{{$my_booking->status}}</td>
</tr>
@endforeach
</table>
	</div>
	
</div>
</div>
@endsection
@section('custom_js')
<script type="text/javascript">
  $("#Account").addClass('active');
</script>
@endsection
