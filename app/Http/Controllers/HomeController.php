<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{   
    public function index(Request $request)
    {
        if($request->session()->has('user'))
        {

    	$ad= DB::table('adtable')
    		->get();

    	return view('home.home')
    		->with('add',$ad);
        }
        
        else
        {
          $request->session()->flush();
            return redirect()->route('login');
        }    

    }

    public function adddetails(Request $request,$id)
    {   
        if($request->session()->has('user'))
        {
    	$details=DB::table('adtable')
    		->where('adid', $id)
    		->first();

    	return view('home.details')
    		->with('detail',$details);
        }
        else
        {
            $request->session()->flush();
             return redirect()->route('login');
        }    	

    }

    public function search(Request $request)
    {
         //dd($request->search);

        if($request->search == null){
            //dd($request->search);
             return redirect()->route('home'); 
        }
        else{
        $ad= DB::table('adtable')
            ->where('division',$request->search)
            ->get();

        return view('home.home')
            ->with('add',$ad);
        }
    }


    public function menu(Request $request)
    {   
         if($request->session()->has('user'))
         {
        $menu= DB::table('categorytable')
            ->get();

        return view('home.menu')
            ->with('menu',$menu);
          }
          else
          {
            $request->session()->flush();
            return redirect()->route('login');
          }  
    }

     public function categoriesproduct(Request $request,$name)
    {   
        if($request->session()->has('user')){
        $ad= DB::table('adtable')
            ->where('product_category',$name)
            ->get();

        return view('home.categoriesproduct')
            ->with('add',$ad);
         }
         else
         {
          $request->session()->flush();
             return redirect()->route('login');
         }   
    }
}
