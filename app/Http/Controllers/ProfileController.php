<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\adtable;
use App\Http\Requests\UpdateinfoRequest;
use App\Http\Requests\AdRequest;

use Illuminate\Support\Facades\Input;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
    	 if($request->session()->has('user'))
         {

    	$ad= DB::table('adtable')
    		->where('regid', $request->session()->get('user')->ID)
    		->get();
    		//dd($value);  		
    		
    	return view('profile.Profile')
    		->with('add',$ad)
    		->with('user',$request->session()->get('user'));
          }
          else
          {  
            $request->session()->flush();   
             return redirect()->route('login');
          }

    }

    public function delete_view($id)
    {
    	 if($request->session()->has('user'))
         {
    	$details=DB::table('adtable')
    		->where('adid', $id)
    		->first();

    	return view('profile.delete')
    		->with('details',$details);	
          }
          else
          {
            $request->session()->flush();
             return redirect()->route('login');
          }  
    }

    public function delete(Request $request)
    {
    	
    	DB::table('adtable')
            ->where('adid', $request->adid)
            ->delete();

        return redirect()->route('profile');	
    }

    public function adpost(Request $request)
    {
         if($request->session()->has('user'))
         {

        $category= DB::table('categorytable')
        ->get();
               
        return view('profile.adpost')
            ->with('category',$category);
            //->with('user',$request->session()->get('user'));
         }
         else
         {  
            $request->session()->flush();
             return redirect()->route('login');
         }   
    }

    public function submitad(AdRequest $request)
    {

        $ad = new adtable();
        $ad->regid = $request->session()->get('user')->ID;
        $ad->product_name = $request->pname;
        $ad->product_category = $request->product_category;

        if(Input::hasFile('image')){

           // dd('H');
            $file=Input::file('image');
            $file->move(public_path(). '/assets/images' ,$file->getClientOriginalName());

            $ad->image = 'assets/images/'.$file->getClientOriginalName();
        }

        $ad->quantity = $request->quantity;
        $ad->price_per_unit = $request->price_per_unit;
        $ad->description = $request->product_description;
        $ad->phone = $request->phone;
        $ad->division = $request->product_division;





        $ad->save();

        return redirect()->route('profile');

        
    }

    public function information(Request $request,$id)
    {
    	if($request->session()->has('user'))
        {
    	$info= DB::table('registrationtable')
    		->where('ID',$id)
    		->first();
    		//dd($value);  		
    		
    	return view('profile.myinfo')
    		->with('info',$info);
        }
        
        else
        {
            $request->session()->flush();
             return redirect()->route('login');
        }    
    }

    public function updateinfo(Request $request,$id)
    {
        if($request->session()->has('user'))
        {
        $info= DB::table('registrationtable')
            ->where('ID',$id)
            ->first();
            //dd($value);       
            
        return view('profile.updateinfo')
            ->with('info',$info);
        }
        else
        {
            $request->session()->flush();
             return redirect()->route('login');
        }    
    }


    public function updateuser(UpdateinfoRequest $request)
   {

     $data = [

            'First_Name' => $request->First_Name,
            'Last_Name' => $request->Last_Name,
           
            'Phone' => $request->Phone,
            
            'Email' => $request->Email,

            'Pass' => $request->Pass   

        ];

       // Employee::create($data);

         DB::table('Registrationtable')
            ->where('ID',$request->session()->get('user')->ID)
            ->update($data);

        //return redirect()->route('information',$request->session()->get('user')->ID);
        return redirect()->route('login');

   }

}
