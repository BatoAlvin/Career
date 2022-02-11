<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Jobs;

class JobsController extends Controller
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


  
   public function created()
   {
        return view('profile');
   }
   public function display(Request $request)
   {
       $students = Jobs::paginate(8);
       return view('jobs',['students'=>$students,'layout'=>'display']);
   }

   public function displayjobform(Request $request)
   {
       $students = Jobs::all();
       return view('jobapplication',['students'=>$students,'layout'=>'displayjobform']);
   }

   public function edit($id)
    {
        $student = Jobs::find($id);
        $students = Jobs::all();
        return view('jobprofile',['students'=>$students,'student'=>$student,'layout'=>'edit']);

    }

    public function delete($id)
    {
        $student=Jobs::find($id);
        $student->delete();
        return redirect('/dashboard');
    }

    public function doctorsform()
    {
        return view('postjob');
    
    }

    public function store(Request $request)
    {
        $student = new Jobs();
        $student->coName = $request->input('coName');
        $student->jobTitle = $request->input('jobTitle');
        $student->location = $request->input('location');
        $student->deadline = $request->input('deadline');
        $student->jobDescription = $request->input('jobDescription');
        $student->qualifications = $request->input('qualifications');
        $student->save();
        return redirect('/postjob')->with('message', 'Job Post Successful');
    }

    public function searchjob()
    {
             $search_text = $_GET['query'];
             $students = Jobs::where('jobTitle','LIKE', '%'.$search_text.'%')->get();
             return view('/searchjobs', compact('students'));
            //  return view('posts.user');
             
    
    }
    
}