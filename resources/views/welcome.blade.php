<!DOCTYPE html>
<html lang="en">
  <head>
   
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fronted/css/style.css')}}">



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<script src="https://kit.fontawesome.com/7326152605.js" crossorigin="anonymous"></script>

<style>
.carousel{
    background: #2f4357;
    margin-top: 10px;
    
    
}
.carousel-item{
    text-align: center;
    height: 600px; /* Prevent carousel from being distorted if for some reason image doesn't load */

}
</style>



  </head>
  <body>
  <!--navbar-->
  


<div class="navbar">

        <ul>
        
        <li class="active"><a href="/" >Home</a></li>
        <li id="Rooms"><a href="{{route('rooms')}}">Rooms</a></li>
        <li id="Gallery"><a href="{{route('gallery')}}">Gallery</a></li>
        <li id="Contact"><a href="{{route('contact')}}">Contact</a></li>
        @guest
                            <li>
                                <a href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li>
                                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li>
                                <a href="{{route('home')}}">
                                    My Account
                                </a>
                                <li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                          
                        @endguest
                       
                       
                        
        </ul>
        
        
        </div>








    <!--carasoul-->
   

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Carousel indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for carousel items -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/16.jpg"  style="width:100%" alt="First Slide">

            <div class="title">
    <a href="{{route('rooms')}}"> Book Now </a>
</div>

        </div>
        <div class="carousel-item">
            <img src="images/10.jpg"  style="width:100%" alt="Second Slide">

            <div class="title">
    <a href="{{route('rooms')}}"> Book Now </a>
</div>

        </div>
        <div class="carousel-item">
            <img src="images/9.jpg"  style="width:100%;" alt="Third Slide" >

            <div class="title">
    <a href="{{route('rooms')}}"> Book Now </a>
</div>

        </div>
    </div>
    <!-- Carousel controls -->
    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>

<script>
$(document).ready(function(){
    $(".start-slide").click(function(){
        $("#myCarousel").carousel('cycle');
    });
});
</script>

  
 



    <div class="services">
        <div style="padding:20px; text-align:center">
<h1 style="font-weight:bold; color: green;">What We Offer</h1>
<hr>
        </div>

<div style="margin: 10px 150px;">
  <div class="row">
    <div class="col-sm-4">
    <i class="fa fa-wifi" style="font-size:60px;"></i><br><br>
      <h5>FREE WIFI</h5>
    
    </div>
    <div class="col-sm-4">
    <i class="fas fa-fan" style="font-size:60px;"></i><br><br>
    
    <h5>AIR CONDITION</h5>



    </div>
    <div class="col-sm-4">
    <i class='fas fa-archive'style="font-size:60px;"></i><br><br>

    <h5>LAUNDRY SERVICES</h5>



    </div>
  </div>

<br><br>
  <div class="row">
    <div class="col-sm-4">
    
     <i class='fa fa-swimming-pool' style='font-size:60px;'></i><br><br>
     <h5>SWIMMING POOL</h5>

    </div>
    <div class="col-sm-4">
        <i class='fa fa-tv' style='font-size:60px;color:black'></i>
        <i class='fas fa-box' style='font-size:60px;'></i><br><br>
        <h5> TV & FREEZE</h5>

      

    </div>
    <div class="col-sm-4">
   <i class='fa fa-glass' style='font-size:60px'></i> <br><br>
   <h5>WELCOME DRINKS</h5>

    </div>
  </div>

</div>

</div>

<br><br><br><br>




<div class="about">
        <div style="padding:20px; text-align:center">
<h1 style="font-weight:bold; color: green;">About Us</h1>
<hr>
        </div>


  <div class="row">
    <div class="col-xs-10" style="justify-content:center; margin: 5px 50px 0px ">

    <p>Our hotel is located in a prime location at Dhanmondi 12/A, Dhaka city South.  We believe that our prestigious,  a good position to satisfy the expectations of the  stylish and discerning traveller.the guest is looking for quiet time and lots of privacy or seeking energetic, friendly environment in the most delightful place away from home, Main Hotel and Suites can accommodate. Our goal is to engage our guests and provide them with the best experience through harmonious, zealous and personable service in the most convenient, comfortable, intimate and welcoming setting.</p>
     <br><br>
<p> <b> Contact Information:</b> <br> 
12/A, Dhanmondi, Dhaka- 1209 <br>
Telephone : +02-4585245 <br>
Fax: 8811125 <br>
E-mail : info@gmail.com</p>

  </div>


</div><br><br><br>




<div>
<h1 style="font-weight:bold; color: green;padding:20px; text-align:center">Terms & Conditions</h1>
<hr>

<div style="text-align:left; padding: 0 30px;">

<p>1. Check-in time is 12 noon and check-out time is 10:00 am
</p>
<p>2. Subject to availability, early check-in and late check-out will be considered. Charges as applicable
</p>
<p>3. In case of cancelation of booking 48 hours prior to arrival (72 hours prior for some hotels) no cancellation charges apply. After which 1 nights retention will be applicable
</p>

<p>4. Amendment of bookings is allowed until only 48 hours prior to arrival. Please contact for any query.</p>

<p>5. Certain privileged booking rates or special offers are not eligible for cancellation, refund or any change. The Customer is therefore advised to check the room description and any such conditions carefully prior to making a booking. Keys Hotels shall not be liable to cancel or refund any monies or alter any bookings if booking are made under such privileged booking rates or special offers.</p>

<p>6. Upon cancellation of booking, the refund of the booking amount will be initiated. The booking amount after deduction of cancellation charges and taxes, as applicable, will be credited into the bank account of the Customer using the same payment mode (i.e. debit card/ credit card/ net-banking) by which the booking was made by the Customer. The refund process may take 10-15 business days.</p>

<p>7. Children up-to 5 Years of age can stay free (cribs subject to availability). Additional charges may be applicable for children between 5 and 12 years. 13 years will be charged as per extra adult rate.
</p>
<p>8. In keeping with our heightened security procedures we request you to provide your photo-identity proof while checking-in. Indian Nationals can present any of the following which is mandatory: Passport, Driving License, Voter ID Card, Pan Card. Foreign Nationals are required to present their passport and valid visa.
</p>

</div>



</div>







    <br><br>   

  <div class="row" >
    <div class="col-sm-12" style="text-align:center; background: black;">
    <div style="padding:20px; text-align:center">
<h1 style="font-weight:bold; color: green;">Social Links</h1> <hr>

        </div>


    <a href="https://www.facebook.com/" class="fa fa-facebook"style='font-size:30px;padding:0 20px'></a>
<a href="https://twitter.com/" class="fa fa-twitter"style='font-size:30px; padding:0 20px'></a>

<a href="https://www.linkedin.com/" class="fa fa-linkedin "style='font-size:30px; padding:0 20px'></a>
<a href="https://www.youtube.com/" class="fa fa-youtube" style='font-size:30px;padding:0 20px'></a>
<a href="https://www.instagram.com/" class="fa fa-instagram"style='font-size:30px;padding:0 20px'></a>
<br><br><br>
    </div>
    
</div>





  </body>
</html>