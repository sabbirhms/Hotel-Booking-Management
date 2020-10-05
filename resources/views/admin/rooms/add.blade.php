@extends('admin.master')
@section('title','Add Room')
@section('body')
<div class="col-sm-10">
        
      <h4><Medium>Add Room </Medium></h4>
      <hr>
     
      <!--display window-->
      
            <div class="col-xs-8">
             @include('layouts.flash_message')
                <div >
									
                    <form method="post" enctype="multipart/form-data">
                    	@csrf
                        <div class="form-group"> <label >Room Type</label>
						  <select class="form-control" name="room_type">
						  <option value="Single Room">Single Room</option>
						  <option value="Double Room">Double Room</option>
						  <option value="Tripple Room">Triple Room</option>
						  <option value="Twin Room">Twin Room</option>
						  <option value="Deluxe Room">Deluxe Room</option>
						  <option value="Studio Room">Studio Room</option>
						  <option value="Luxury Room">Luxury Room</option>
						  <option value="Presidential Room">Presidential Room</option>
						  <option value="Queen Room">Queen Room</option>
						</select> </div>

                        <div class="form-group"> <label for="room_number">Room Number</label> <input type="text" class="form-control" name="room_number" value="" required='true'> </div>
                                    <div class="form-group"> <label for="exampleInputEmail1">Room Name</label> <input type="text" class="form-control" name="room_name" value="" required='true'> </div>
                                    <div class="form-group"> <label for="exampleInputEmail1">Price</label> <input type="number" class="form-control" name="price" value="" required='true'> </div>
                                    <div class="form-group"> <label for="exampleInputEmail1">Max Capacity</label> <input type="number" class="form-control" name="max_capacity" value="" required='true'> </div>
                                  
                                    <div class="form-group"> <label for="exampleInputEmail1">Room Description</label> <textarea type="text" class="form-control" name="descriptions" value=""></textarea> </div>
                                    <div class="form-group"> <label for="exampleInputEmail1">No. of Bed</label> <input type="text" class="form-control" name="num_of_bed" value="" required='true'> </div>
                        <div class="form-group"> <label for="exampleInputEmail1">Room Image</label> <input type="file" class="form-control" name="image" value="" required='true'> </div>
                     <div class="form-group"> <label>Room Facility</label> <input type="text" name="facilities" id="roomfac" value="" class="form-control" required="true" multiple="multiple">
         
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

					 <button type="submit" class="btn btn-primary" name="submit">Add</button> <br><br>
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