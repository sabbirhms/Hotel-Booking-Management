@extends('admin.master')
@section('title','Register Users')
@section('body')
  
    <div class="col-sm-10">
        
     <h4 >Registered Users</h4> 
      <hr>
            <div class="col-xs-12">
             

<table style="width: 100%;">

    <tr class="title">

<th>Serial No</th>

<th>Name</th>
<th>Email</th>
<th>Phone Number</th>
<th>Registration Date</th>
</tr>
@foreach($customers as $key=>$customer)
<tr>
	<td>{{$key+$customers->firstItem()}}</td>
	<td>{{$customer->name}}</td>
	<td>{{$customer->email}}</td>
	<td>{{$customer->mobile}}</td>
	<td>{{$customer->created_at}}</td>
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
      $("#Customers").addClass('active');
</script>
@endsection