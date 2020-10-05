@extends('layouts.master')
@section('title','Rooms')
@section('content')
 <div class="container">
@foreach($rooms as $room)
<div class="box">
    <div class="imgBox">
        <img src="{{asset('images/'.$room->image)}}" >
      </div>
      <div class="details">
          <div class="content">
              <h1>{{$room->room_type}}</h1>
              <p> Per Night: {{$room->price}} USD </p> 
              <p>Max Capacity: {{$room->max_capacity}}</p> <br><br>
              <a  href="{{route('room.book_now',$room->id)}}">Book Now</a>
      </div>
      </div>

</div>
@endforeach

   </div>
   <br><br>
@endsection
@section('custom_js')
<script type="text/javascript">
  $("#Rooms").addClass('active');
</script>
@endsection