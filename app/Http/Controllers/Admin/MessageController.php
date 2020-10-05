<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
class MessageController extends Controller
{
    public function index(){
    	$msg=Message::where('status','replied')->get();
    	return view('admin.messages.read_message')->with('read_msg',$msg);
    }
    public function unread(){
    	$msg=Message::where('status','pending')->get();
    	return view('admin.messages.unread_message')->with('unread_msg',$msg);
    }

    public function reply($id){
    	$msg=Message::find($id);
    	return view('admin.messages.reply')->with('msg',$msg);
    }
    public function MarkAsRead($id){

    	$msg=Message::find($id);
    	$msg->status='replied';
    	$msg->save();
    	return redirect()->back();
    }
    public function replySubmit($id, Request $request){
    	$msg=Message::find($id);
    	$msg->replied_message=$request->reply_msg;
    	$msg->status='replied';
    	$msg->save();
    	return redirect()->back()->with('success','Message Replied');
    }
}
