<?php

namespace App\Http\Controllers\Fronted;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use Auth;
use App\Models\Admin\Room;
use Illuminate\Support\Facades\Validator;
class OtherController extends Controller
{
    public function Contact(){
    	return view('fronted.contact_us');
    }
    public function Contact_store(Request $request){
    	$data=$this->validate($request,[
    		'email'=>'required|email',
    		'mobile'=>'required',
    		'message_body'=>'required',
    	]);
    	$id=NULL;
    	if(Auth::check()){
    		$id=auth()->user()->id;
            
    	}
        
    	$message_store=Message::create([
    		'user_id'=>$id,
    		'email'=>$request->email,
    		'mobile'=>$request->mobile,
    		'message_body'=>$request->message_body,
    		'status'=>'pending'
    	]);
    	if($message_store){
    		return redirect()->route('contact')->with('success','Message Successfully send.');
    	}
    }
    public function Gallery(){
        $rooms=Room::all();
        return view('fronted.gallery')->with('rooms',$rooms);
    }
}
