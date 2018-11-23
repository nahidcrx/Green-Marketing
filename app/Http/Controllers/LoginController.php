<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
   public function index(Request $request)
   {
    return view('login.index');
   }

   public function verify(LoginRequest $request)
   {

   	$user= DB::table('registrationtable')
   		->where('User_Name', $request->uname)
   		->where('Pass', $request->pass)
   		->first();

   	$admin=DB::table('adminlogin')
   		->where('username', $request->uname)
   		->where('pass_word', $request->pass)
   		->first();
   		

   	if($user)
   	{
   		$request->session()->put('user',$user);
   		return redirect()->route('home'); 
   	}
   	else if($admin)
   	{
   		$request->session()->put('admin',$admin);
   		return redirect()->route('admin');
   	}
   	else
   	{
   		$request->session()->flash('message','Invalid username or password');
   		return redirect()->route('login');
   	}

   }
}
