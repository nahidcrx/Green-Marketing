<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index(Request $request)
    {
    	$ad= DB::table('adtable')
    		->get();

    	return view('index.index')
    		->with('add',$ad);
    }


    public function search(Request $request)
    {
         //dd($request->search);

        if($request->search == null){
            //dd($request->search);
             return redirect()->route('index'); 
        }
        else{
        $ad= DB::table('adtable')
            ->where('division',$request->search)
            ->get();

        return view('index.index')
            ->with('add',$ad);
        }
    }
}
