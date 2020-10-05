@extends('admin.master')
@section('title','Room List')
@section('body')
    <div class="col-sm-10">
     
          @include('admin.rooms.top')
<table style="width: 100%;">

    <tr class="title">

<th>Serial No</th>

<th>Room Type</th>
<th>Room Number</th>
<th>Description</th>
<th>Photo</th>
<th>Action</th>

    </tr>
@foreach($room as $key=>$single_room)
<tr>
  <td>{{$key+$room->firstItem()}}</td>
  <td>{{$single_room->room_type}}</td>
  <td>{{$single_room->room_number}}</td>
  <td>{{$single_room->descriptions}}</td>
  <td><img src="{{asset('images/'.$single_room->image)}}" width="100" height="100"></td>
  <td>
    <a href="{{route('admin.room.edit',$single_room->id)}}" class="btn btn-primary">Edit</a>
    <a href="{{route('admin.room.delete',$single_room->id)}}" class="btn btn-danger">Delete</a>
  </td>
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
      $("#Rooms").addClass('active');
      $("#availRoom").attr('id','active');
</script>
@endsection