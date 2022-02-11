<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Applications;

class ApplicationsController extends Controller
{
    
    public function store(Request $request)
    {
        $student_name = $request->email;
        $student_names = $request->github;
        $student_namess = $request->cv;
        $student_namesss = $request->date;
        $student_namessss = $request->company;
        $student_namessssa = $request->job;
        $student_namesssss = $request->avatar;

         $student = new Applications;
        $student->email=$student_name;
        $student->github=$student_names;
        $student->cv=$student_namess;
        $student->date=$student_namesss;
        $student->job=$student_namessssa;
        $student->company=$student_namessss;
      
        if($request->hasfile('avatar')){
            $file = $request->file('avatar');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/',$filename);
            $student->avatar = $filename;
        }
        $student->save();
         return redirect('/jobapplication')->with('message', 'Application Sent');
     }

    public function displayformlist()
    {
        $students = Applications::paginate(10);
        return view('applicationslist',['students'=>$students,'layout'=>'displayformlist']);
      
    }

   public function created()
   {
        return view('profile');
   }
  
   public function edit($id)
    {
        $student = Applications::find($id);
        $students = Applications::all();
        return view('applicationsdetails',['students'=>$students,'student'=>$student,'layout'=>'edit']);
        // return view('editappointment',['students=>$students']);
    }


    public function search()
    {
             $search_text = $_GET['query'];
             $students = Applications::where('email','LIKE', '%'.$search_text.'%')->get();
             return view('/searchapplications', compact('students'));
            //  return view('posts.user');
             
    
    }


    public function jobform()
    {
        return view('jobapplication');
    
    }
   
}