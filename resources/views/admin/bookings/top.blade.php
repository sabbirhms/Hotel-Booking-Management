<div class="top">
<div class="row">
<div class="col-md-3">
<a href="{{route('admin.booking.all')}}">    
<button id="allBooking">All Bookings</button> </a> 
</div>
<div class="col-md-3">
<a href="{{route('admin.booking.new')}}"
><button id="newBooking">New Bookings</button> </a>
</div>
<div class="col-md-3">
<a href="{{route('admin.booking.approved')}}">
<button id="approvedBooking">Approved Bookings</button>
</a>
</div>
<div class="col-md-3">
<a href="{{route('admin.booking.cancelled')}}">
<button id="cancelledBooking">Cancelled Bookings</button>
</a> 
</div>
</div>
        </div><br>
<div class="clearfix"></div>
<div class="row">

<div class="col-md-4 float-right">
<form method="post" action="{{route('admin.search')}}">
        @csrf
      <div class="input-group">
        <input type="text" name="search_booking" class="form-control" placeholder="Search by booking id..">
        <span class="input-group-btn">
          <button class="btn btn-info" type="submit">Search
            
          </button>
        </span>
      </div>
    </form>

</div>