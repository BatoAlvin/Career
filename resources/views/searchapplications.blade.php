@extends('layouts.navigation')

@section('content')

    
                   
                
<form action="{{route('searchapplications')}}" method="POST">
    <input type='text' data-column='0' class='filter-input' name='query' placeholder='email'/><br/><br/>
              <table class="table table-light">
                <thead class="thead-dark">
                  <tr>
                  
                  <th scope="col">Email</th>
                    <th scope="col">Github Handle</th>
                    <th scope="col">CV</th>
                    <th scope="col">Date</th>
                    <th scope="col">Company</th>
                    <th scope="col">Position</th>
                   
                  </tr>
                </thead>
                <tbody>
                @foreach($students as $student)
                  <tr>
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
                      <i class="fas fa-arrow-up text-success mr-3"></i> 
                      {{ $student->date}}
                    </td>
                    <td>
                      <i class="fas fa-arrow-up text-success mr-3"></i> 
                      {{ $student->company}}
                    </td>
                    <td>
                      <i class="fas fa-arrow-up text-success mr-3"></i> 
                      {{ $student->job}}
                    </td>
                  </tr>
                  @endforeach

                  <tr>
 
                  </tr>
                  
                
                
                 
                </tbody>
              </table>
              <div class="m-t-20 text-center">
                              <a href="/applicationslist" class="btn btn-primary">Back </a>
                            </div>
              </form>

@endsection
