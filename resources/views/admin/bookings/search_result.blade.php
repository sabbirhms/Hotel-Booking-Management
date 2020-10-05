@extends('admin.master')
@section('title','Booking')
@section('body')

<!--right grid-->
    
    <div class="col-sm-10">
        
     <h4 >Bookings</h4>
  
      <hr>
     
      <!--display window-->
      
            <div class="col-xs-10">
<br>
<br>
<table style="width: 100%;">

    <tr class="title">
<th>Serial No</th>
<th>Room Number</th>
<th>Name</th>
<th>Email</th>
<th>Phone Number</th>
<th>Booking Date</th>
<th>Status</th>
    </tr>
@foreach($booking as $key=>$book)
    <tr>

        <th>{{$key+1}}</th>
        <th>{{$book->room_number}}</th>
        <th>{{$book->name}}</th>
        <th>{{$book->email}}</th>
        <th>{{$book->mobile}}</th>
        <th>{{$book->created_at}}</th>
        <th>{{$book->status}}</th>
    </tr>
@endforeach
</table>
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
    
</script>
@endsection