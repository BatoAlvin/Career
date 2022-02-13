@extends('layouts.navigation')

@section('content')
<center>

<h4 class="page-title" style='font-weight:bolder;'>JobApplication Form</h4>


</center>
@if(session('message'))
<div class='alert alert-success'>{{session('message')}}</div>
@endif

<div class="row">
<form action="{{route('jobapplication')}}" method='post' enctype='multipart/form-data'>
                        @csrf

                    <div class="col-lg-8 offset-lg-2">
                       
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                       
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email <span class="text-danger">*</span></label>
                                        <input class="form-control" type="email" name='email' required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Github <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name='github' required>
                                    </div>
                                </div>

                               
                                

								<div class="col-sm-6">
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<label>CV link<span class="text-danger">*</span></label>
												<input type="text" class="form-control" name='cv' required>
											</div>
										</div>
									</div>
								</div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Date<span class="text-danger">*</span></label>
                                        <div class="cal-iconas">
                                            <input type="date" class="form-control datetimepicker" name='date' required>
                                        </div>
                                    </div>
                                </div>

                                

  
                                <div class="col-sm-6 col-md-6 col-lg-6">
											<div class="form-group">
												<label for="validationDefault03">Company</label>
												<select class="form-control select" id="validationDefault03" name='company' required>
                                                <option selected disabled value=''>Select Company</option>
                                <option value="Bank of Africa">Bank of Africa</option>
                                <option value="Outbox">Outbox</option>
                                <option value="Andella">Andella</option>
                                <option value="Laboremus">Laboremus</option>
                                <option value="Akalo Tech">Akalo Tech</option>
                                <option value="Collas Tech">Collas Tech</option>
                                <option value="URA">URA</option>
												</select>
											</div>
										</div>

                                        <div class="col-sm-6 col-md-6 col-lg-6">
											<div class="form-group">
												<label for="validationDefault03">Job</label>
												<select class="form-control select" id="validationDefault03" name='job' required>
                                                <option selected disabled value=''>Select Job</option>
                                <option value="Frontend">Frontend</option>
                                <option value="Backend">Backend</option>
                                <option value="Fullstack">Fullstack</option>
                                <option value="UI/UX">UI/UX</option>
                                <option value="Devops">Devops</option>
                                <option value="Scrum master">Scrum master</option>
                             
												</select>
											</div>
										</div>

                                        
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Profile Picture<span class="text-danger">*</span></label>
                                        <div class="cal-iconas">
                                            <input type="file" class="form-control" name='avatar' required>
                                        </div>
                                    </div>
                                </div>
                            </div>
							
        
                            <div class="m-t-20 text-center" style='padding-bottom:20px;'>
                                <button class="btn btn-primary submit-btn">Apply</button>
                            </div>
                       
                    </div>
                    </form>
                </div>

@endsection