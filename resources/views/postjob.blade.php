@extends('layouts.navigation')

@section('content')

<h4 class="page-title">Post Job</h4>

@if(session('message'))
<div class='alert alert-success'>{{session('message')}}</div>
@endif

<div class="row">
<form action="{{route('postjob')}}" method='post' enctype='multipart/form-data'>
                        @csrf
                    <div class="col-lg-8 offset-lg-2">
                       
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                       
                            <div class="row">
                                

                                <div class="col-sm-6 col-md-6 col-lg-6">
											<div class="form-group">
												<label for="validationDefault03">Company Name<span class="text-danger">*</span></label>
												<select class="form-control select" id="validationDefault03" name='coName' required>
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
												<label for="validationDefault03">JobTitle<span class="text-danger">*</span></label>
												<select class="form-control select" id="validationDefault03" name='jobTitle' required>
                                                <option selected disabled value=''>Select Job</option>
                                <option value="Frontend">Frontend</option>
                                <option value="Backend">Backend</option>
                                <option value="Fullstack">Fullstack</option>
                                <option value="UI/UX">UI/UX</option>
                                <option value="Devops">Devops</option>
                                <option value="Scrum Master">Scrum master</option>
                             
												</select>
											</div>
										</div>
                                

								<div class="col-sm-6">
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<label>Location<span class="text-danger">*</span></label>
												<input type="text" class="form-control" name='location' required>
											</div>
										</div>
									</div>
								</div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Deadline<span class="text-danger">*</span></label>
                                        <div class="cal-iconas">
                                            <input type="date" class="form-control datetimepicker" name='deadline' required>
                                        </div>
                                    </div>
                                </div>

                               
                                <div class="col-sm-12">
                                <div class="form-group">
                                <label>JobDescription<span class="text-danger">*</span></label>
                                <textarea cols="30" rows="4" class="form-control" name='jobDescription' required></textarea>
                            </div>
                            </div>


                            <div class="col-sm-12">
                            <div class="form-group">
                                <label>Qualifications<span class="text-danger">*</span></label>
                                <textarea cols="30" rows="4" class="form-control" name='qualifications' required></textarea>
                            </div>
                            </div> 
					
				                              



                                

                              


                                
                            </div>
							
        
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn">Post Job</button>
                            </div>
                       
                    </div>
                    </form>
                </div>

@endsection