@extends('layouts.navigation')

@section('content')
<form action="{{route('searchapplications')}}" type='get'>
            
            <input type='search' data-column='0' class='filter-input' name='query' placeholder='Email'/>
<button class='btn btn-outline-success my-2 my sm-0' type='submit'>Search</button><br/><br/>
              
            
            </form>

<form action="{{route('applicationslist')}}" method="post">
  
<table class="table table-light">
                <thead class="thead-dark">
                  <tr>
                  <th scope="col">Avatar</th>
                    <th scope="col">Email</th>
                    <th scope="col">Github Handle</th>
                    <th scope="col">CV</th>
                    <th scope="col">Date</th>
                    <th scope="col">Company</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($students as $student)
                  <tr>
                  <td>
                      <img src="{{ asset('uploads/'.$student->avatar)}}" width='28px' height='28px'  class="rounded-circle m-r-5"/>
                    
                    </td>
                  <td>
                     {{ $student->email}}
                    </td>
                    <td>
                     {{ $student->github}}
                    </td>
                    <td>
                    {{ $student->cv}}
                    </td>
                    <td>
                    {{ $student->date}}
                    </td>
                    <td>
                     
                      {{ $student->company}}
                    </td>
                  
                    <td>
                    <a href="{{url('/applications/'.$student->id)}}" class="btn btn-sm btn-warning">View</a>
                    
                     
                    </td>
                  </tr>
                  @endforeach

                  <tr>
 
                  </tr>
                  
                
                
                 
                </tbody>
              </table>
              <div class="m-t-20 text-center">
                              <a href="/dashboard" class="btn btn-primary">Back </a>
                            </div>
              </form>
              <div style='padding: 0px'>
                {{ $students->links()}}
                </div>
@endsection