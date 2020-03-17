@extends('layouts.admin')
@section('content')
    

<div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-8 col-xl-6">
             
               
            <!-- Header -->
            <div class="header mt-md-5">
              <div class="header-body">
                <div class="row align-items-center">
                  <div class="col">
                    
                    <!-- Pretitle -->
                    <h6 class="header-pretitle">
                     Patient
                    </h6>

                    <!-- Title -->
                    <h1 class="header-title">
                      Patient Details
                    </h1>

                  </div>
                  <div class="col-auto">
                  
                    <!-- Button -->
                  <a href="{{route('create.prediction',$patient->id)}}" class="btn btn-primary">
                      New Examination
                    </a>
                    
                  </div>
                </div> <!-- / .row -->
              </div>
            </div>
            <div class="col-12 col-xl-10">

                <!-- Card -->
                <div class="card">
                  <div class="card-body">
    
                    <!-- List group -->
                    <div class="list-group list-group-flush my-n3">
                      <div class="list-group-item">
                        <div class="row align-items-center">
                          <div class="col">
    
                            <!-- Title -->
                            <h5 class="mb-0">
                             Names
                            </h5>
    
                          </div>
                          <div class="col-auto">
    
                            <!-- Time -->
                            <small class="text-muted" >
                             {{$patient->first_name}} {{$patient->surname}}
                            </small>
    
                          </div>
                        </div> <!-- / .row -->
                      </div>
                      <div class="list-group-item">
                        <div class="row align-items-center">
                          <div class="col">
    
                            <!-- Title -->
                            <h5 class="mb-0">
                              email
                            </h5>
    
                          </div>
                          <div class="col-auto">
    
                            <!-- Time -->
                            <small class="text-muted" >
                              {{$patient->email}}
                            </small>
    
                          </div>
                        </div> <!-- / .row -->
                      </div>
                      <div class="list-group-item">
                        <div class="row align-items-center">
                          <div class="col">
    
                            <!-- Title -->
                            <h5 class="mb-0">
                              Address
                            </h5>
    
                          </div>
                          <div class="col-auto">
    
                            <!-- Text -->
                            <small class="text-muted">
                              {{$patient->address}}
                            </small>
    
                          </div>
                        </div> <!-- / .row -->
                      </div>
                      <div class="list-group-item">
                        <div class="row align-items-center">
                          <div class="col">
    
                            <!-- Title -->
                            <h5 class="mb-0">
                              Gender
                            </h5>
    
                          </div>
                          <div class="col-auto">
    
                            <!-- Text -->
                            <small class="text-muted">
                                @if($patient->gender==1)
                                  Male
                                  @else 
                                  Female
                                  @endif
                             
                            </small>
    
                          </div>
                        </div> <!-- / .row -->
                      </div>
                      <div class="list-group-item">
                        <div class="row align-items-center">
                          <div class="col">
    
                            <!-- Title -->
                            <h5 class="mb-0">
                             Phone
                            </h5>
    
                          </div>
                          <div class="col-auto">
    
                            <!-- Text -->
                            <small class="text-muted">
                              {{$patient->phone}}
                            </small>
    
                          </div>
                        </div> <!-- / .row -->
                      </div>
                      <div class="list-group-item">
                        <div class="row align-items-center">
                          <div class="col">
    
                            <!-- Title -->
                            <h5 class="mb-0">
                             Date of Birth
                            </h5>
    
                          </div>
                          <div class="col-auto">
    
                            <!-- Link -->
                            <time  class="small text-muted">
                              {{$patient->DOB->format('d M Y')}} ({{$patient->DOB->age}} years old)
                            </time>
    
                          </div>
                        </div> <!-- / .row -->
                      </div>
                      <div class="list-group-item">
                        <div class="row align-items-center">
                          <div class="col">
    
                            <!-- Title -->
                            <h5 class="mb-0">
                             Examinations
                            </h5>
    
                          </div>
                          <div class="col-auto">
    
                            <!-- Link -->
                            <a href="#!" class="small">
                              {{$patient->examination->count()}}
                            </a>
    
                          </div>
                        </div> <!-- / .row -->
                      </div>
                    </div>
    
                  </div>
                </div>
    
                <!-- Weekly Hours -->
               @if($patient->examination->count()>0)
               <h3 class="mt-6 text-center">Test</h3>
                <div class="card" id="paymentTable" >
                   
                    
                            <div class="table-responsive mt-5" data-toggle="lists" data-lists-values='["No", "Date","Doctor"]'>
                                    <table class="table  table-nowrap card-table">
                                      <thead>
                                        <tr>
                                          <th scope="col">
                                            <a href="#" class="text-muted sort" data-sort="No">#</a>
                                          </th>
                                          <th scope="col">
                                            <a href="#" class="text-muted sort" data-sort="Date">Date</a>
                                          </th>
                                          <th scope="col">
                                            <a href="#" class="text-muted sort" data-sort="Doctor">Doctor</a>
                                          </th>
                                       
                                        
                                         
                                          
                                          
                                         
                                         
                                          
                                        </tr>
                                      </thead>
                                      <tbody class="list">
        
                                         
                                            @foreach ($patient->examination->sortByDesc('created_at') as $c)
                                        <tr>
        
                                          <td  class="No">{{$loop->index+1}}</td>
                                          <td class="Date">{{$c->created_at->format('d M y')}}</td>
                                     
                                          <td class="Doctor">{{$c->doctor->fullName}}</td>
                                           
                                       
                                       
                                     
                                          
                                          
                                        
                                        
                                         
                                         
                                                <td class="text-right">
                                                        <div class="dropdown">
                                                          <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                          </a>
                                                          <div class="dropdown-menu dropdown-menu-right">
                                                          <a href="{{route('examination',$c->id)}}" class="dropdown-item">
                                                              view
                                                            </a>
                                                           
                                                          </div>
                                                        </div>
                                                    </tr>
                                                                  
                                                    @endforeach
                                                      
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                           
                                                    <td>
                                                            <nav aria-label="Page navigation example">
                                                                    
                                                      <ul class="pagination">
                                                          
                                                      </ul>
                                                            </nav>
                                                    </td>
                                                  
                                        </tr>
                                    </tfoot>
                                    </table>
                                  </div>
                    </div>
                    @endif
                    </div>
                </div>
              </div>
          </div>
        </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">

var userList = new List('paymentTable', { 
    valueNames: ["no", "date","Doctor"],
  page: 5,
  pagination: true
});	

</script>
@endsection