@extends('layouts.navigation')

@section('content')


                <div class="row">
<h1>Hello</h1>
                </div>
                <form action="{{route('searchdepartment')}}" type='get'>
            
            <input type='search' data-column='0' class='filter-input' name='query' placeholder='Departy'/>
<button class='btn btn-outline-success my-2 my sm-0' type='submit'>Search</button><br/><br/>
              
<div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="{{ route('createjob') }}" class="btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Post Jobs</a>
                    </div> 
            </form>

            <form action="{{route('doctors')}}" method="post">
<h4 class="page-title">Post a Job</h4>

<div class="row doctor-grid">
@foreach($students as $student)
                    <div class="col-md-4 col-sm-4  col-lg-3">
                        <div class="profile-widget">
                            <div class="doctor-img">
                        <img src="{{ asset('uploads/'.$student->avatar)}}" width='35px' height='35px'  class="avatar"/>

                            </div>
                            <div class="dropdown profile-action">
                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    
                                <a href="{{url('/details/'.$student->id)}}" class="dropdown-item"><i class="fa fa-pencil m-r-5"></i> View</a>
                                
                                    <a href="{{url('/delete/'.$student->id)}}" class="dropdown-item"  data-toggle="modal"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                </div>
                            </div>
                            <h4 class="doctor-name text-ellipsis"><a>{{ $student->coName}}</a></h4>
                            
                            <h4 class="doctor-name text-ellipsis">{{ $student->lastname}}</h4>
                            <div class="doc-prof">{{ $student->departments}}</div>
                            <div class="user-country">
                                <i class="fa fa-map-marker"></i> {{ $student->location}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
				
    
           
                </form>   
    
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/app.js"></script>



@endsection

