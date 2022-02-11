<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Doctor;

class DashboardController extends Controller
{
   public function index()
   {
       if(Auth::user()->hasRole('user')){
            return view('user');
       }elseif(Auth::user()->hasRole('blogwriter')){
            return view('blogwriter');
       }elseif(Auth::user()->hasRole('admin')){
        return view('dashboard');
   }
   }

  
   public function doctor()
   {
        return view('doctors');
   }

   public function myprofile()
   {
        return view('myprofile');
   }
   
  
   public function created()
   {
        return view('profile');
   }
   public function display(Request $request)
   {
       $students = Doctor::all();
       return view('jobs',['students'=>$students,'layout'=>'display']);
   }

   public function displaydoctor(Request $request)
   {
       $students = Doctor::all();
       return view('jobprofile',['students'=>$students,'layout'=>'displaydoctor']);
   }

   public function edit($id)
    {
        $student = Doctor::find($id);
        $students = Doctor::all();
        return view('jobprofile',['students'=>$students,'student'=>$student,'layout'=>'edit']);
        // return view('editappointment',['students=>$students']);
    }

    public function delete($id)
    {
        $student=Doctor::find($id);
        $student->delete();
        return redirect('/jobs');
    }

    public function doctorsform()
    {
        return view('postjob');
    
    }

    public function jobform()
    {
        return view('jobapplication');
    
    }
    public function store(Request $request)
    {
        $student = new Doctor();
        $student->coName = $request->input('coName');
        $student->jobTitle = $request->input('jobTitle');
        $student->location = $request->input('location');
        $student->deadline = $request->input('deadline');
        $student->jobDescription = $request->input('jobDescription');
        $student->qualifications = $request->input('qualifications');
        $student->save();
        return redirect('/dashboard');
    }

}