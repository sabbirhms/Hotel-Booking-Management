@extends('admin.master')
@section('title','Admin Dashboard')
@section('body')
  <div class="col-sm-10">
        
      <h4><Medium>Dashboard </Medium></h4>
      <hr>
     
      <!--display window-->
      <div class="row">
      <div class="col-md-5">
      <div style="  margin-left: 65px; margin-top: 3.5%; background-color:#f1f1f1; height: 200px;width: 250px;">

<h3  style=" padding:20px 35px;  background-color: rgb(20, 115, 146);"><a style=" color: white;" href="{{route('admin.booking.new')}}">New Bookings</a></h3>
<h1 style="font-size: 70px; margin-left:100px;">{{$pending}}</h1>

</div>
      </div>
      <div class="col-md-5">
      <div style=" margin-left: 65px; margin-top: 3.5%; background-color:#f1f1f1; height: 200px;width: 250px;">

<h3 style=" padding: 20px 20px;  background-color: rgb(20, 115, 146);"><a style="color: white;" href ="{{route('message.unread')}}">Unread Messages</a></h3>
<h1 style="font-size: 70px; margin-left:100px;">{{$unread_msg}}</h1>

</div>
      </div>
      </div>
      <div class="row">
      <div class="col-md-5">
      <div style=" margin-left: 65px; margin-top: 3.5%; background-color:#f1f1f1; height: 200px;width: 250px;">

<h3 style=" padding: 20px 30px;  background-color:#019272;"><a style="color: white;" href="{{route('admin.customers.list')}}">Registered Users</a></h3>
<h1 style="font-size: 70px; margin-left:100px;">{{$users}}</h1>

</div>
      </div>
      <div class="col-md-5">
      <div style="  margin-left: 65px; margin-top: 3.5%; background-color:#f1f1f1; height: 200px;width: 250px;">

<h3 style=" padding: 20px 35px;  background-color:#019272;"><a style="color: white;" href="{{route('admin.room.list')}}">Total Rooms</a></h3>
<h1 style="font-size: 70px; margin-left:100px;">{{$avail_rooms}}</h1>

</div>
      </div>
      </div>
      
            <div class="col-xs-10">
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('custom_js')
<script type="text/javascript">
      $("#dashboard").addClass('active');
</script>
@endsection
