<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index(){
        return view('employee');
    }
    //
    public function store(Request $request){

        // $employee = Employee();

        // $employee->name = $request->input('name');
        // $employee->lastname = $request->input('lastname');
        // $employee->email = $request->input('email');
        //$employee->image = $request->input('image');
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();//getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/employee/', $filename);
            $employee->image = $filename;
        }
        else{
            return $request;
            $employee->image = '';
        }

        $employee = Employee::create([
            'name'=> $request->name,
            'lastname'=> $request->lastname,
            'email'=>$request->email
            //'image'=>'uploads/employee/'. $filename
        ]);

        $employee->save();

        return view('employee')->with('employee', $employee);
    }
}
