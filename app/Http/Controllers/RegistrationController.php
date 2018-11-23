<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{
    public function index(Request $request)
   {
    return view('registration.index');
   }

   public function insertuser(RegistrationRequest $request)
   {

   	 $data = [
        	'First_Name' => $request->First_Name,
        	'Last_Name' => $request->Last_Name,
        	'User_Name' => $request->User_Name,
        	'Pass' => $request->Password,
        	'Phone' => $request->Phone,
        	'Division' => $request->Division,
        	'User_Type' => $request->User_Type,
        	'Email' => $request->Email,
        	'NID' => $request->NID,
        	'Gender' => $request->Gender,
        	'DB_Date' => $request->DB_Date,
        	'DB_Month' => $request->DB_Month,
        	'DB_Year' => $request->DB_Year,
        	'Nationality' => $request->Nationality

        ];

       // Employee::create($data);

         DB::table('Registrationtable')
            ->insert($data);

        return redirect()->route('login');

   }
}
