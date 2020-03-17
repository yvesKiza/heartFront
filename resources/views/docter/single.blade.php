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
                     Doctor
                    </h6>

                    <!-- Title -->
                    <h1 class="header-title">
                      doctor Details
                    </h1>

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
                             {{$doctor->fullName}} 
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
                              {{$doctor->email}}
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
                              {{$doctor->address}}
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
                                @if($doctor->gender==1)
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
                              {{$doctor->phone}}
                            </small>
    
                          </div>
                        </div> <!-- / .row -->
                      </div>
                      <div class="list-group-item">
                        <div class="row align-items-center">
                          <div class="col">
    
                            <!-- Title -->
                            <h5 class="mb-0">
                             Speciality
                            </h5>
    
                          </div>
                          <div class="col-auto">
    
                            <!-- Text -->
                            <small class="text-muted">
                              {{$doctor->speciality}}
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
                              {{$doctor->DOB->format('d M Y')}} ({{$doctor->DOB->age}} years old)
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
                              {{$doctor->examination->count()}}
                            </a>
    
                          </div>
                        </div> <!-- / .row -->
                      </div>
                      <div class="list-group-item">
                        <div class="row align-items-center">
                          <div class="col">
    
                            <!-- Title -->
                            <h5 class="mb-0">
                           @if($doctor->active==1)
                           <p class="badge badge-success">Active</p>
                               @else 
                               <p class="badge badge-danger">Banned</p>
                               @endif
                            </h5>
    
                          </div>
                          <div class="col-auto">
    
                            <!-- Link -->
                            <a href="#!" class="small">
                                @if($doctor->active==1)
                                 Disable
                                    @else 
                                    Enable
                                    @endif
                                    
                            </a>
    
                          </div>
                        </div> <!-- / .row -->
                      </div>
                    </div>
    
                  </div>
                </div>
    
                <!-- Weekly Hours -->
               @if($doctor->examination->count()>0)
                <div class="card" id="paymentTable" >
                   
                    
                            <div class="table-responsive mt-5" data-toggle="lists" data-lists-values='["No", "Date","patient"]'>
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
                                            <a href="#" class="text-muted sort" data-sort="Doctor">patient</a>
                                          </th>
                                       
                                        
                                         
                                          
                                          
                                         
                                         
                                          
                                        </tr>
                                      </thead>
                                      <tbody class="list">
        
                                         
                                            @foreach ($doctor->examination->sortByDesc('created_at') as $c)
                                        <tr>
        
                                          <td  class="No">{{$loop->index+1}}</td>
                                          <td class="Date">{{$p->created_at->format('d M y')}}</td>
                                     
                                          <td class="Doctor">{{$c->patient->fullName}}</td>
                                           
                                       
                                       
                                     
                                          
                                          
                                        
                                        
                                         
                                         
                                                <td class="text-right">
                                                        <div class="dropdown">
                                                          <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                          </a>
                                                          <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" class="dropdown-item">
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
    valueNames: ["no", "date","patient"],
  page: 5,
  pagination: true
});	

</script>
@endsection