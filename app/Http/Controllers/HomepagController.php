<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class HomepagController extends Controller
{
    public function index()
    {
    	return view('frontend.home');
    }
    public function save(Request $request)
    {
    	$students = new Student();

    	$students ->name 	= $request ->name;
    	$students ->roll	= $request ->roll;
    	$students ->subject = $request ->subject;
    	$students ->class   = $request ->class;
    	$students ->save();
    	return redirect('/');
    }
    public function showYourInfo()
    {
    	$studentData = Student::all();

    	return view('frontend.studentData',['studentData' =>$studentData]);
    }
    public function infoEdit($id)
    {
        $edit = Student::findOrFail($id);
        return view('frontend.edit',['edit'=>$edit]);
    }
    public function update(Request $request)
    {
        $students = Student::findOrFail($request->studUpdate);
        $students ->name    = $request ->name;
        $students ->roll    = $request ->roll;
        $students ->subject = $request ->subject;
        $students ->class   = $request ->class;
        $students ->save();
        return redirect('student/your/data');

    }
    public function delete($id)
    {
        $delete = Student::findOrFail($id);
        $delete->delete();
        return redirect('student/your/data');

    }

}
