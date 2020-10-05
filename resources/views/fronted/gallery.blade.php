@extends('layouts.master')
@section('title','Gallery')
@section('content')
                <div class="gallery">

                  <h1>Photo Gallery</h1>
                  <hr>
                  @foreach($rooms as $room)

                  <a href="{{asset('images/'.$room->image)}}" data-lightbox="mygallery"><img src="{{asset('images/'.$room->image)}}"> </a>
                  @endforeach
                </div>
                @endsection
@section('custom_js')
<script type="text/javascript">
  $("#Gallery").addClass('active');
</script>
@endsection