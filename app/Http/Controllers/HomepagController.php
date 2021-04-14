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
    	return "ok";
    }
    public function showYourInfo()
    {
    	$studentData = Student::all();

    	return view('frontend.studentData',['studentData' =>$studentData]);
    }
}
