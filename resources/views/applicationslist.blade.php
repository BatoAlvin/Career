@extends('layouts.navigation')

@section('content')
<form action="{{route('searchapplications')}}" type='get'>
            
            <input type='search' data-column='0' class='filter-input' name='query' placeholder='Email'/>
<button class='btn btn-outline-success my-2 my sm-0' type='submit'>Search</button><br/><br/>
              
            
            </form>

<form action="{{route('applicationslist')}}" method="post">
  
<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-striped custom-table">
								<thead>
									<tr>
										<th>Avatar</th>
										<th>Email</th>
								
										<th>Github</th>
										<th>CV</th>
										<th>Date</th>
										<th>Company</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
                @foreach($students as $student)
									<tr>
									
									<td>
                      <img src="{{ asset('uploads/'.$student->avatar)}}" width='28px' height='28px'  class="rounded-circle m-r-5"/>
                    
                    </td>
										<td>{{ $student->email}}</td>
										<td> {{ $student->github}}</td>
										<td>{{ $student->cv}}</td>
										<td>{{ $student->date}}</td>
                    <td>
                     
                     {{ $student->company}}
                   </td>
                   <td>
                    <a href="{{url('/applications/'.$student->id)}}" class="btn btn-sm btn-warning">View</a>
                    </td>

									</tr>
                  @endforeach
								</tbody>
							</table>
              <div class="m-t-20 text-center" style='padding-bottom:20px;'>
                              <a href="/dashboard" class="btn btn-primary">Back </a>
                            </div>
						</div>
					</div>
                </div>

              <div style='padding: 0px'>
                {{ $students->links()}}
                </div>
@endsection