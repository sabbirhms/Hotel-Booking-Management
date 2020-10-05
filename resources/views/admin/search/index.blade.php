@extends('admin.master')
@section('title','Room Reports')
@section('body')
   <div class="col-sm-10" >
        
     <h4>Room Reports</h4>
<div class="row mt-20" id="print"> 

<table style="width: 100%; ">

    <tr class="title">

<th>S.I</th>
<th>Room Number</th>
<th>Room Name</th>
<th>Room Type</th>
<th>Price</th>

    </tr>
    @foreach($models as $key=>$room)
    <tr>
        <th>{{$key+1}}</th>
        <th>{{$room->room_number}}</th>
        <th>{{$room->room_name}}</th>
        <th>{{$room->room_type}}</th>
        <th>{{$room->price}} USD</th>
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
</div>
@endsection
@section('custom_js')
<script type="text/javascript">
      $("#Rooms").addClass('active');
</script>
@endsection