<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\CategoryRequest;

class AdminController extends Controller
{
    public function index(Request $request)
    {
    	$usr= DB::table('registrationtable')
    		->get();

    	return view('Admin.index')
    		->with('user',$usr);
    }

    public function userdetails($id)
    {
    	$post=DB::table('adtable')
    		->where('regid', $id)
    		->get();

    	$details=DB::table('registrationtable')
    		->where('ID', $id)		
    		->first();	

    	return view('Admin.User_details')
    		->with('detail',$details)
    		->with('ads',$post);	

    }




    public function delete_user($id)
    {
    	
    	DB::table('registrationtable')
            ->where('ID',$id)
            ->delete();


    	DB::table('adtable')
            ->where('regid',$id)
            ->delete();

        return redirect()->route('admin');	
    }



    public function delete_add($id)
    {
    	
    	$details=DB::table('adtable')
    		->where('adid', $id)
    		->first();

    	return view('Admin.delete')
    		->with('details',$details);	
    }

    public function delete(Request $request)
    {
    	
    	DB::table('adtable')
            ->where('adid', $request->adid)
            ->delete();

        return redirect()->route('userdetails',['id'=> $request->regid]);	
    }

    public function category(Request $request)
    {
    	$cat= DB::table('categorytable')
    		->get();

    	return view('admin.category')
    		->with('category',$cat);
    }

    public function addcategory(Request $request)
    {
    	

    	return view('Admin.addcategory');
    		
    }

    public function submitcategory(CategoryRequest $request)
    {

        $cat = new category();
        //$ad->regid = $request->session()->get('user')->ID;
        $cat->cname = $request->cname;

        if(Input::hasFile('image')){

           // dd('H');
            $file=Input::file('image');
            $file->move(public_path(). '/assets/category' ,$file->getClientOriginalName());

            $cat->image = 'assets/category/'.$file->getClientOriginalName();
        }





        $cat->save();

        return redirect()->route('category');

        
    }

     public function deletecategory($name)
    {
    	
    		DB::table('categorytable')
    		->where('cname',$name)
    		->delete();

    	 return redirect()->route('category');
    }

}
