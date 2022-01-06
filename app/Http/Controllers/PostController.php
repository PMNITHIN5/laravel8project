<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class PostController extends Controller
{
    public function getAllEmployee(){
        $employees=DB::table('employee')->get();
        return view('employee',compact('employees'));
    }
    public function addEmployee(){
        return view('addEmployee');
    }

    public function addEmployeeSubmit(Request $request){
        //dd($request);
        DB::table('employee')->insert([
            'firstname'=>$request->firstname,
            'email' =>$request->email,
            'phonenumber'=>$request->phonenumber,
            'gender'=>$request->gender,
            'city' =>$request->city,
            'state'=>$request->state,
            'department'=>$request->department,
            'date_of_birth'=>$request->date_of_birth,
            'date_of_joining'=>$request->date_of_joining


        ]);
        return back()->with('employee_created','EMPLOYEES CREATED SUCCESSFULLY!');
    }
   
}
