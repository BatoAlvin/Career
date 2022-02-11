@extends('layouts.navigation')

@section('content')
<form action="{{route('searchjobs')}}" type='get'>
            
            <input type='search' data-column='0' class='filter-input' name='query' placeholder='Job'/>
<button class='btn btn-outline-success my-2 my sm-0' type='submit'>Search</button><br/><br/>
              

            </form>

            <form action="" method="post">
                <center>
<h4 class="page-title" style='font-weight:bolder;'>Available Jobs</h4>
</center>


<div class="row doctor-grid">
@foreach($students as $student)
                    <div class="col-md-4 col-sm-4  col-lg-3">
                        <div class="profile-widget">
                          
                            <div class="dropdown profile-action">
                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    
                                <a href="{{url('/details/'.$student->id)}}" class="dropdown-item" ><i class="fa fa-pencil m-r-5" ></i> View</a>
                                @if (Auth::user()->hasRole('admin'))
                                    <a href="{{url('/delete/'.$student->id)}}" class="dropdown-item"  data-toggle="modal"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                @endif
                                </div>
                            </div>
                            <h4 class="doctor-name text-ellipsis"><a>{{ $student->coName}}</a></h4>
                            
                            <h4 class="doctor-name text-ellipsis">{{ $student->jobTitle}}</h4>
                            
                            <p class="doctor-name text-ellipsis">{{ $student->jobDescription}}</p>
                            <div class="user-country">
                                <i class="fa fa-map-marker"></i> {{ $student->location}}
                            </div>
                            <div style="color:red;">{{ $student->deadline}}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
				
    
           
                </form>   
                <div style='padding: 0px'>
                {{ $students->links()}}
                </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/app.js"></script>


             

@endsection