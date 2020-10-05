@extends('admin.master')
@section('title','Reports')
@section('body')
   <div class="col-sm-10">
        
     <h4 >Bookings Reports</h4>
  
      <hr>
     
            <div class="col-xs-10">
            	<form method="post" action="{{route('reports.get')}}">
            		@csrf
<label for="from_date"> Start Date: </label> <br><input style="width: 400px;" type="date" name="check_in_date" required> <br><br>

<label for="from_date"> End Date: </label> <br><input  style="width: 400px;" type="date" name="check_out_date" required>


<br><br>

<button type="submit" class="btn btn-primary" name="action">Generate Reports</button>
<!-- <button type="submit" class="btn btn-primary" name="action">Check Out Reports</button> -->
</form>

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
      $("#Reports").addClass('active');
</script>
@endsection