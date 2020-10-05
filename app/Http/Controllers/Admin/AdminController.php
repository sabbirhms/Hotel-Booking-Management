<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Booking;
use App\Models\User;
use App\Models\Admin\Room;
use App\Models\Admin\Admin;
use App\Models\Admin\Message;
use DB;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
    public function login(Request $request){
        $password=sha1($request->password);
        $admin=Admin::where([
            'email'=>$request->email,
            'password'=>$password,
        ])->first();
        if($admin){
        session()->put('admin_id',$admin->id);
        return redirect()->route('admin.dashboard');
    }
    else{
        return redirect()->back()->with('warning','Invalid Login Details !');
    }
    }

    public function dashboard(){
    	$all_booking=Booking::all()->count();
    	$pending_booking=Booking::where('status','Pending')->count();
    	$approved_booking=Booking::where('status','Approved')->count();
    	$cancelled_booking=Booking::where('status','Cancelled')->count();
    	$users=User::all()->count();
    	$avail_rooms=Room::all()->count();
        $unread_msg=Message::where('status','pending')->count();
    	return view('admin.dashboard')->with([
    		'all'=>$all_booking,
    		'approved'=>$approved_booking,
    		'pending'=>$pending_booking,
    		'cancelled'=>$cancelled_booking,
    		'users'=>$users,
    		'avail_rooms'=>$avail_rooms,
            'unread_msg'=>$unread_msg,
    	]);
    }
    public function Profile(){
        if(session()->has('admin_id')){
        $admin=Admin::find(session()->get('admin_id'));

        return view('admin.profile')->with('admin',$admin);
    }
    return view('admin.login');
    }
    public function Profile_Update(Request $request){
        if(session()->has('admin_id')){
        $admin=Admin::find(session()->get('admin_id'));
        $admin->update(['email'=>$request->email,'password'=>sha1($request->password)]);
        return view('admin.profile')->with(['success'=>'Password Updated','admin'=>$admin]);
    }
    return view('admin.login');
    }

    public function logout(){
        session()->forget('admin_id');
        return view('admin.login');

    }
    

}
