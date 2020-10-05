<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Room;
use App\Models\User;
use App\Models\Message;
use DB;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $booking = DB::table('bookings')
            ->select(DB::raw('rooms.room_number,rooms.price,bookings.room_type,bookings.id,bookings.check_in_date,bookings.check_out_date,bookings.status'))
            ->join('rooms', 'rooms.id', '=', 'bookings.room_id')
            ->where('bookings.user_id', auth()->user()->id)
            ->get();
        
        return view('home')->with('booking',$booking);
    }

    public function Profile(){
        return view('user.profile');
    }
    public function Password(){
        return view('user.password');
    }
    public function Password_store(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
   
        return redirect()->route('password_change')->with('success','Password change successfully.');
    }
    public function Message(){
        $Message=Message::where('user_id',auth()->user()->id)->get();
        return view('user.message')->with('message',$Message);
    }
}
