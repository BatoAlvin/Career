
@extends('layouts.navigation')

@section('content')
        
      
     
                <div class="row">
                    <div class="col-sm-7 col-6">
                        <center>
                        <h4 class="page-title" style='font-weight:bolder;'>My Profile</h4>
                        </center>
                       
                    </div>

                   
                </div>
                <div class="card-box profile-header">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="profile-info-left">
 
                                               
                                             
                                                
                                            </div>
                                            <ul class="personal-info">
                                            <li>
                                                    <span class="title">Name:</span>
                                                    <span class="text"><a href="">{{ Auth::user()->name }}</a></span>
                                                </li>
                                                <li>
                                                    <span class="title">Phone:</span>
                                                    <span class="text"><a href="">{{ Auth::user()->phonenumber }}</a></span>
                                                </li>
                                                <li>
                                                    <span class="title">Email:</span>
                                                    <span class="text"><a href="">{{ Auth::user()->email }}</a></span>
                                                </li>
                                                <li>
                                                    <span class="title">Date:</span>
                                                    <span class="text"><a href="">{{ Auth::user()->date }}</a></span>
                                                </li>
                                                <li>
                                                    <span class="title">Address:</span>
                                                    <span class="text"><a href="">{{ Auth::user()->address }}</a></span>
                                                </li>
                                                <li>
                                                    <span class="title">Gender:</span>
                                                    <span class="text"><a href="#">{{ Auth::user()->gender }}</a></span>
                                                </li>
                                            </ul>

                                                    
                        </div>
                    </div>
                </div>
			
            </div>
          
    
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/app.js"></script>
@endsection