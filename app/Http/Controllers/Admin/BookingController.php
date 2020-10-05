<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Booking;
use App\Models\Admin\Room;
use DB;
class BookingController extends Controller
{
    public function date_30(){
        return \Carbon\Carbon::today()->subDays(30);
    }
    public function index(){
    	
    	$bookings=DB::table('bookings')
        ->leftjoin('users', 'users.id', '=', 'bookings.user_id')
        ->leftjoin('rooms', 'rooms.id', '=', 'bookings.room_id')
        ->where('bookings.created_at', '>=', $this->date_30())
        ->paginate(15);
    	return view('admin.bookings.index')->with('booking',$bookings);
    }
    public function Approved(){
        
    	$bookings=DB::table('bookings')
    	->leftjoin('users', 'users.id', '=', 'bookings.user_id')
        ->leftjoin('rooms', 'rooms.id', '=', 'bookings.room_id')
        ->where('status','Approved')
        ->where('bookings.created_at', '>=', $this->date_30())
        ->paginate(15);
    	return view('admin.bookings.approved')->with('booking',$bookings);
    }
    public function Cancelled(){
    	$bookings=DB::table('bookings')
    	->leftjoin('users', 'users.id', '=', 'bookings.user_id')
        ->leftjoin('rooms', 'rooms.id', '=', 'bookings.room_id')
        ->where('status','Cancelled')
        ->where('bookings.created_at', '>=', $this->date_30())
        ->paginate(15);
    	return view('admin.bookings.cancelled')->with('booking',$bookings);
    }
    public function NewBooking(){
    	$bookings=DB::table('bookings')
        ->select(DB::raw('bookings.id,bookings.check_out_date,rooms.room_type,bookings.check_in_date,bookings.created_at,bookings.status,users.name,users.email,users.mobile,rooms.room_number'))
    	->leftjoin('users', 'users.id', '=', 'bookings.user_id')
        ->leftjoin('rooms', 'rooms.id', '=', 'bookings.room_id')
        ->where('status','Pending')
        ->paginate(15);
    	return view('admin.bookings.new')->with('booking',$bookings);
    }
    public function Update($id,Request $request){
        $bookings=Booking::find($id);
        $bookings->status=$request->data;
        $bookings->save();
        return redirect()->back();
    }

    public function Reports(){
        return view('admin.reports.index');
    }
    public function Reports_Update(Request $request){
        $bookings=Booking::whereBetween('check_in_date',[$request->check_in_date,$request->check_out_date])
        ->leftjoin('users', 'users.id', '=', 'bookings.user_id')
        ->leftjoin('rooms', 'rooms.id', '=', 'bookings.room_id')
        ->get();

        return view('admin.reports.reports')->with('booking',$bookings);
    }
    public function Search(Request $request){
        // $booking=Booking::find($request->booking_id);
        $bookings=DB::table('bookings')
        ->leftjoin('users', 'users.id', '=', 'bookings.user_id')
        ->leftjoin('rooms', 'rooms.id', '=', 'bookings.room_id')
        ->where('bookings.id',$request->search_booking)
        ->get();
        // return $bookings;
        return view('admin.bookings.search_result')->with('booking',$bookings);
    }
    public function extendSearch(Request $request){

        //  $bookings=DB::table('bookings')
        // ->where(['room_type'=>$request->room_type])
        // ->whereBetween('check_in_date',[$request->check_in_date,$request->check_out_date])
        // ->whereBetween('check_out_date',[$request->check_in_date,$request->check_out_date])
        // ->get();


        $bookings=DB::table('bookings')
        ->join('rooms', 'rooms.id', '=', 'bookings.room_id')
        ->where(['rooms.room_type'=>$request->room_type])
        ->whereBetween('check_in_date',[$request->check_in_date,$request->check_out_date])
        ->whereBetween('check_out_date',[$request->check_in_date,$request->check_out_date])
        ->get();
        if($bookings->count()>0){
            foreach ($bookings as $key => $data) {
               $models = Room::whereNotIn('id', [$data->room_id])
               ->where('room_type',$request->room_type)
               ->get();
            }
            return view('admin.search.index')->with('models',$models);
        // }
            
        }
        else{
            $models=Room::where('room_type',$request->room_type)->get();
            return view('admin.search.index')->with('models',$models);

        }
    }
}
