@extends('layouts.master')
@section('title','Contact Us')
@section('content')
   <div class="container">
 
        <div class="row">
        

<!--navbar-->

             <div class="col-sm-6">


        <h1>Contact Us</h1>
        

        <p>We have 72 comfortably equipped rooms, including two suites: The President Suite and 
            the Ambassador Suite, with over one hundred metres of surface area, which are sure to awe </br>even the most demanding Guests.
             We offer 7 rooms, where we have been preparing family and business meetings already for 15 years..</p>

             <br>
             
             <p>Contact Information <br>

               12/A, Dhanmondi, Dhaka- 1209 <br>
                
                Telephone : +02-4585245 <br>
                
                E-mail : info@gmail.com</p>
            </div>   

            <div class="col-sm-6">
                <h1>Send Message</h1>

                @include('layouts.flash_message')
              <form method="post" action="{{route('contact.store')}}">
              	@csrf
                <label for="Name">Name</label> <br>
                <input style="width: 400px; height: 30px;" type="text" name="name"><br> <br>

                <label  for="email">Email</label> <br>
                <input style="width: 400px; height: 30px;" type="email" name="email"><br><br>

                <label for="phone_number">Phone Number</label> <br>
                <input style="width: 400px; height: 30px;" type="number" name="mobile"><br><br>

                <label for="Message">Message</label> <br>
                <textarea name="message_body" style="height: 150px; width: 400px;"></textarea><br><br>

                <button type="submit" name="submit" class="btn btn-info">Send</button>
            </form>


            </div>
        
       
</div>
</div>
</div>
@endsection
@section('custom_js')
<script type="text/javascript">
  $("#Contact").addClass('active');
</script>
@endsection