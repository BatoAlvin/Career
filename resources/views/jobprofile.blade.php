@extends('layouts.navigation')

@section('content')
    
                     
<form action="" method='post'>
@csrf
<input type="hidden" name="id" value="{{$student->id}}">
<div class="row">
                    <div class="col-sm-7 col-6">
                        <h4 class="page-title" style='font-weight:bolder; text-align:center;'>Job Details</h4>
                    </div>

                   
                </div>
                <div class="card-box profile-header">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-view">
                               
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="profile-info-left">
                                                <h3 class="user-name m-t-0 mb-0">{{ $student->coName}}</h3>
                                                <h4 class="user-name m-t-0 mb-0">{{ $student->jobTitle}}</h4>
                                                <p class="text-muted">{{ $student->jobDescription}}</p>
                                                
                                                <div class="staff-id"><span  style="color:#009efb; font-weight:bolder;">Location :</span> {{ $student->location}}</div>
                                                <div><span  style="color:#009efb; font-weight:bolder;">Deadline:</span> {{ $student->deadline}}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="personal-info">
                                              
                                               
                                                <li>
                                                    <span class="title" style="color:#009efb; font-weight:bolder;">Qualifications:</span>
                                                    <span class="text">{{ $student->qualifications}}</span>
                                                </li>
                                               
                                               
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                        </div>
                    </div>
                </div>
			
            </div>
            @if (Auth::user()->hasRole('user'))
            <div class="m-t-20 text-center">
                              <a href="/jobapplication" class="btn btn-primary">Apply </a>
                            </div>
                            @endif
            <div class="m-t-20 text-center" style='padding-bottom:20px;'>
                              <a href="/dashboard" class="btn btn-primary">Back </a>
                            </div>
                           
  </form>

@endsection