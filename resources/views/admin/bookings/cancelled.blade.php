@extends('admin.master')
@section('title','Booking')
@section('body')

<!--right grid-->
    
    <div class="col-sm-10">
        
     <h4 >Bookings</h4>
  
      <hr>
     
      <!--display window-->
      
            <div class="col-xs-12">

@include('admin.bookings.top')

<br>
<br>
<table style="width: 100%;">

    <tr class="title">
    <th>Serial No</th>
<th>Room Type</th>
<th>Room Number</th>
<th>Name</th>
<th>Phone Number</th>
<th>Check In Date</th>
<th>Check Out Date</th>
<th>Booking Date</th>
<th>Status</th>

    </tr>
@foreach($booking as $key=>$book)
    <tr>
    <th width="1%">{{$key+$booking->firstItem()}}</th>
        <th>{{$book->room_type}}</th>
        <th width="1%">{{$book->room_number}}</th>
        <th>{{$book->name}}</th>
        <th>{{$book->mobile}}</th>
        <th>{{$book->check_in_date}}</th>
        <th>{{$book->check_out_date}}</th>
        <th>{{$book->created_at}}</th>
        <th>{{$book->status}}</th>
    </tr>
@endforeach
</table>
{{$booking->links()}}
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
      $("#Bookings").addClass('active');
      $("#cancelledBooking").attr('id','active');
      
    
</script>
@endsection