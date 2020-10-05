<?php

namespace App\Http\Controllers\Fronted;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin\Booking;
use App\Models\Admin\Room;
use Auth;
class BookingController extends Controller
{
    public function checkAvail($id,Request $request){
        
        $room=Room::find($id);
        $booking=Booking::where('room_id',$room->id)->orderByDesc('id')->first();
        if($booking){
            if($request->check_in_date<$booking->check_out_date){
                    return response()->json(['success'=>'Room already Booked']); 
                }
            return response()->json(['success'=>'Room is available for booking.']);
        }
        return response()->json(['success'=>'Room is available for booking.']);
        }


    public function store($id,Request $request){
    	$this->validate($request,[
    		'c_in_date'=>'required',
            'c_out_date'=>'required',
            'c_guest'=>'required',
            'c_room_type'=>'required',
        ]);
            $room=Room::find($id);
    		$booking=Booking::where('room_id',$room->id)->orderByDesc('id')->first();

            if(!$request->user()->hasVerifiedEmail()){
                return view('auth.verify');
            }
            if($booking){
                if($request->c_in_date<$booking->check_out_date){
                return redirect()->route('room.book_now',$id)->with('warning','Room already Booked'); 
            }
            }
            
            $room_id=$room->id;
            $room->available='0';
            $room->save();
            $book_now=Booking::create([
                'user_id'=>auth()->user()->id,
                'room_id'=>$room_id,
                'check_in_date'=>$request->c_in_date,
                'check_out_date'=>$request->c_out_date,
                'num_of_guest'=>$request->c_guest,
                'room_type'=>$request->c_room_type,
                'status'=>'Pending',
            ]);
            if($book_now){
                return redirect()->route('room.book_now',$id)->with('success','Successfully Request for booking. Hotel Manager will be contact with you very Soon. Thank You Using Our services.');
            }
        }
}
