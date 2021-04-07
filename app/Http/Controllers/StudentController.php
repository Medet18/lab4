<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function addStudent(){
        return view('add-student');
    }

    //2
    public function storeStudent(Request $request){
        $name = $request->name;
        $surname = $request->surname;
        $email = $request->email;
        $image = $request->file('file');
        //$imageName = time() . '.' . $image->extension();

        //$file = $request->file('image');
        // $extension = $file->getClientOriginalExtension();//getting image extension
        // $filename = time() . '.' . $extension;
         
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        $image->move(public_path('images'), $imageName);

        $student = new Student();
        $student->name = $name;
        $student->surname = $surname;
        $student->email = $email;
        $student->profileimage = $imageName;
        $student->save();
        return back()->with('student_added','Student record has been inserted'); 
    }
    //3
    public function students(){
        $students = Student::all();
        return view('all-students',compact('students'));
    }
}
