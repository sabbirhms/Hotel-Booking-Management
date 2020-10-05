<?php

namespace App\Http\Controllers\Fronted;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Room;
class RoomController extends Controller
{
    public function index(){
    	$rooms=Room::all();
    	return view('fronted.rooms')->with('rooms',$rooms);
    }
    public function Booking($id){
    	$room=Room::find($id);
    	return view('fronted.book_now')->with('room',$room);
    }
}
