    @if(!session()->has('admin_id'))
    <script>window.location="/admin";</script>
   @endif
<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title','Admin Login')</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
</head>
<body>
  <div class="container-fluid">
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <h3>Admin Pannel</h3> </br></br>
      <ul class="nav nav-pills nav-stacked">
        <li id="dashboard"><a href="{{route('admin.dashboard')}}">Home</a></li>
        <li id="Bookings"><a href="{{route('admin.booking.all')}}">Bookings</a>
        </li>
        <li id="Rooms"><a href="{{route('admin.room.list')}}">Rooms</a>
        </li>
        <li id="Add_Room"><a href="{{route('admin.room.add')}}">Add Room</a></li>
        <li id="Customers"><a href="{{route('admin.customers.list')}}">Customers</a></li>
        <li id="Messages"><a href="{{route('message.unread')}}">Messages</a></li>
        <li id="Reports"><a href="{{route('admin.reports')}}">Reports</a></li>
        <li id="update_profile"><a href="{{route('admin.profile')}}">Update Profile</a></li>
        <li id="Logout"><a href="{{route('admin.logout')}}">Logout</a></li>

      </ul><br>
      

    </div>
@yield('body')

<!-- Footer -->
@yield('custom_js')
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>
