
@extends('layouts.navigation')

@section('content')
        
      
     
                <div class="row">
                    <div class="col-sm-7 col-6">
                        <center>
                        <h4 class="page-title" style='font-weight:bolder;'>Application Details</h4>
                        </center>
                       
                    </div>

                   
                </div>
                <div class="card-box profile-header">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-view">
                                <div class="profile-img-wrap">
                                    <div class="profile-img">
                                    <img src="{{ asset('uploads/'.$student->avatar)}}"  class="avatar"/>
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="profile-info-left">
                                                <div class='title'>Company

                                                <h3 class="user-name m-t-0 mb-0"  style="color:#009efb;">{{ $student->company}}</h3>
                                                </div>
                                                
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="personal-info">
                                            <li>
                                                    <span class="title">Email:</span>
                                                    <span class="text" style="color:#009efb;">{{ $student->email}}</span>
                                                </li>
                                                <li>
                                                    <span class="title">CV:</span>
                                                    <span class="text"  style="color:#009efb;">{{ $student->cv}}</span>
                                                </li>
                                                <li>
                                                    <span class="title">GithubHandle:</span>
                                                    <span class="text"  style="color:#009efb;">{{ $student->github}}</span>
                                                </li>
                                                <li>
                                                    <span class="title">Position:</span>
                                                    <span class="text"  style="color:#009efb;">{{ $student->job}}</span>
                                                </li>
                                               
                                                <li>
                                                    <span class="title">Date:</span>
                                                    <span class="text"  style="color:#009efb;">{{ $student->date}}</span>
                                                </li>
                                               
                                        
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                        </div>
                    </div>
                </div>
                <div class="m-t-20 text-center">
                              <a href="/applicationslist" class="btn btn-primary">Back </a>
                            </div>
            </div>
           
         
    
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/app.js"></script>
@endsection