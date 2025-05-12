<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
   public function addstudent(Request $request){
    $file = $request->file('file');
    $fileName = time().''.$file->getClientOriginalName();
    $filePath = $file->storeAs('images',$fileName,'public');
    $student = new Student();
    $student->name = $request->name;
    $student->email = $request->email;
    $student->file = $filePath;
    $student->save();
    return response()->json(['res'=>'Student Created Sucessfully']);
    }
    public function getstudents(){
     $student = Student::all();
    //  return $student;
     return response()->json(['students'=>$student]);
    }
}
