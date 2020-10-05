@extends('admin.master')
@section('title','Add Room')
@section('body')
<div class="col-sm-10">
        
      <h4><Medium>Add Room </Medium></h4>
      <hr>
     
      <!--display window-->
      
            <div class="col-xs-10">
             @include('layouts.flash_message')
                <div >
									
                    <form method="post" action="{{route('admin.room.update',$room->id)}}" enctype="multipart/form-data">
                    	@csrf
                        <div class="form-group"> <label >Room Type</label>
						  <select class="form-control" name="room_type">
						  <option value="Single Room" {{$room->room_type=='Single Room' ? 'selected' : ''}}>Single Room</option>
						  <option value="Double Room" {{$room->room_type=='Double Room' ? 'selected' : ''}}>Double Room</option>
						  <option value="Tripple Room" {{$room->room_type=='Tripple Room' ? 'selected' : ''}}>Tripple Room</option>
						  <option value="Twin Room" {{$room->room_type=='Twin Room' ? 'selected' : ''}}>Twin Room</option>
						  <option value="Deluxe Room" {{$room->room_type=='Deluxe Room' ? 'selected' : ''}}>Deluxe Room</option>
						  <option value="Studio Room" {{$room->room_type=='Studio Room' ? 'selected' : ''}}>Studio Room</option>
						  <option value="Luxury Room" {{$room->room_type=='Luxury Room' ? 'selected' : ''}}>Luxury Room</option>
						  <option value="Presidential Room" {{$room->room_type=='Presidential Room' ? 'selected' : ''}}>Presidential Room</option>
						  <option value="Queen Room" {{$room->room_type=='Queen Room' ? 'selected' : ''}}>Queen Room</option>
						</select> </div>

                        <div class="form-group"> <label for="exampleInputEmail1">Room Number</label>
                         <input type="text" class="form-control" name="room_number" value="{{$room->room_number}}" required='true'> </div>
                                    <div class="form-group"> <label for="exampleInputEmail1">Room Name</label> <input type="text" class="form-control" name="room_name" value="{{$room->room_name}}" required='true'> </div>
                                    <div class="form-group"> <label for="exampleInputEmail1">Price</label> <input type="number" class="form-control" name="price" value="{{$room->price}}" required='true'> </div>
                                    <div class="form-group"> <label for="exampleInputEmail1">Max Capacity</label> <input type="number" class="form-control" name="max_capacity" value="{{$room->max_capacity}}" required='true'> </div>
                                  
                                    <div class="form-group"> 
                                      <label for="exampleInputEmail1">Room Description</label> <textarea type="text" class="form-control" name="descriptions" value="">{{$room->descriptions}}</textarea> 
                                    </div>
                                    <div class="form-group"> 
                                      <label for="exampleInputEmail1">No. of Bed</label> <input type="text" class="form-control" name="num_of_bed" value="{{$room->num_of_bed}}" required='true'> </div>
                                      <div class="form-group">
                                        <img src="{{asset('images/'.$room->image)}}" width="100" height="100">
                                      </div>

                        <div class="form-group"> 
                          <label for="exampleInputEmail1">Room Image</label> 
                          <input type="file" class="form-control" name="image" value=""> </div>
                     <div class="form-group"> 
                      <label>Room Facility</label> 
                      <input type="text" name="facilities" id="roomfac" value="{{$room->facilities}}" class="form-control" required="true" multiple="multiple">
         
                     </input> </div> 
                      
                       <div class="form-group"> <label >Room Available</label>
						  <select class="form-control" name="available">
						  <option value="1">YES</option>
						  <option value="0">NO</option>
						</select> 
					</div>
					<div class="form-group"> <label >Publish</label>
						  <select class="form-control" name="publish">
						  <option value="1">YES</option>
						  <option value="0">NO</option>
						</select> 
					</div>

					 <button type="submit" class="btn btn-success" name="submit">Save Change</button>
                   </form> 
                </div>
            </div>
        </div>
    </div>


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
      $("#Add_Room").addClass('active');
</script>
@endsection