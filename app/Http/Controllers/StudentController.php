<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Inquiry;

class StudentController extends Controller
{
    public function form(){
        return view('student');
    }

    public function submit(Request $request){
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'idNumber' => 'required',
            'email' => 'required',
            'contactNumber' => 'required',
            'subject' => 'required',
            'inquiryType' => 'required'
        ]);

        $student = new Student;
        $inquiry = new Inquiry;
        $student -> fname=$request->fname;
        $student -> lname=$request->lname;
        $student -> id_number=$request->idNumber;
        $student -> email=$request->email;
        $student -> contact_number=$request->contactNumber;
        $student -> subject_inquiry=$request->subject;
        $student -> content_inquiry=$request->concern;
        $inquiry -> type_of_inquiry=$request->inquiryType;
        $student -> save();
        $inquiry -> save();

        if($student) {
            return back()->with('success', 'Form have been submitted successfully.');
        }
        else {
            return back()->with('fail', 'Something went wrong.');
        }
    }
}
