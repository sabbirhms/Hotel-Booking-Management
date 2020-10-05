<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class CustomerController extends Controller
{
    public function index(){
    	$customer=User::paginate(15);
    	// return response()->json($customer);
    	return view('admin.users.index')->with('customers',$customer);
    }
}
