@extends('layouts.admin')
@section('content')
    

<div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-8 col-xl-6">
            
              @if(Session::has('success'))
              <div class="mt-3 col-12 col-md-8 ">
                  <div class="alert alert-success">
                                     {{ session('success')}}
                    </div>
              </div>
              @endif
               
            <!-- Header -->
            <div class="header mt-md-5">
              <div class="header-body">
                <div class="row align-items-center">
                  <div class="col">
                    
                    <!-- Pretitle -->
                    <h3 class="header-pretitle">
                     Laboratory Test result #{{$ex->id}}
                    </h3>

                    <!-- Title -->
                   

                  </div>
                  <div class="col-auto">
                  
                    <!-- Button -->
                  <a href="{{route('examination.pdf',$ex->id)}}" class="btn btn-primary">
                     print
                    </a>
                    
                  </div>
                  
                </div> <!-- / .row -->
              </div>
            </div>
            <div class="col-12 ">
                <div class="header">
                   <div class="header-body"> 
                <div class="row align-items-center">
                    <div class="col">
                        <h5 class="mb-2">
                            Patient Id: {{$ex->patient->id}}
                            </h5>
                    
                      <h5 class="mb-2">
                       Patient Names: {{$ex->patient->fullName}}
                      </h5>
                      
                      <h5 class="mb-2">
                        Date: {{$ex->created_at->format('d M Y , H:m')}}
                       </h5>
                       <h5 class="mb-2">
                       Address: {{$ex->patient->address}}
                       </h5>
  
                      <!-- Title -->
                     
  
                    </div>
                    <div class="col-auto">
                      
                        <!-- Pretitle -->
                        <h5 class="mb-2">
                          age: {{$ex->age}}
                        </h5>
                        <h5 class="mb-2">
                          sex: {{$ex->getSex()}}
                         </h5>
                         <h5 class="mb-2">
                          phone: {{$ex->patient->phone}}
                         </h5>
    
                        <!-- Title -->
                       
    
                      </div>
                    
                  </div> <!-- / .row -->
                   </div>
                </div>
                
 
                    </div>
                    <div class="col-12">
                         <!-- Card -->
                         <div class="header">
                           <div class="header-body">
                <div class="card ">
                    <div class="card-body">
      
                      <!-- List group -->
                      <div class="list-group list-group-flush my-n3">
                        <div class="list-group-item">
                          <div class="row align-items-center">
                            <div class="col">
      
                              <!-- Title -->
                              <h5 class="mb-0">
                               chest pain
                              </h5>
      
                            </div>
                            <div class="col-auto">
      
                              <!-- Time -->
                              <small class="text-muted" >
                               {{$ex->getCP()}} 
                              </small>
      
                            </div>
                          </div> <!-- / .row -->
                        </div>
                        <div class="list-group-item">
                          <div class="row align-items-center">
                            <div class="col">
      
                              <!-- Title -->
                              <h5 class="mb-0">
                                Resting blood pressure
                              </h5>
      
                            </div>
                            <div class="col-auto">
      
                              <!-- Time -->
                              <small class="text-muted" >
                                {{$ex->trestbps}} mm Hg
                              </small>
      
                            </div>
                          </div> <!-- / .row -->
                        </div>
                        <div class="list-group-item">
                          <div class="row align-items-center">
                            <div class="col">
      
                              <!-- Title -->
                              <h5 class="mb-0">
                                maximum heart rate achieved
                              </h5>
      
                            </div>
                            <div class="col-auto">
      
                              <!-- Text -->
                              <small class="text-muted">
                                {{$ex->thalach}}
                              </small>
      
                            </div>
                          </div> <!-- / .row -->
                        </div>
                        <div class="list-group-item">
                          <div class="row align-items-center">
                            <div class="col">
      
                              <!-- Title -->
                              <h5 class="mb-0">
                                exercise induced angina
                              </h5>
      
                            </div>
                            <div class="col-auto">
      
                              <!-- Text -->
                              <small class="text-muted">
                                 {{$ex->getexang()}}
                               
                              </small>
      
                            </div>
                          </div> <!-- / .row -->
                        </div>
                        <div class="list-group-item">
                          <div class="row align-items-center">
                            <div class="col">
      
                              <!-- Title -->
                              <h5 class="mb-0">
                               old peak
                              </h5>
      
                            </div>
                            <div class="col-auto">
      
                              <!-- Text -->
                              <small class="text-muted">
                                 {{$ex->oldpeak}}
                               
                              </small>
      
                            </div>
                          </div> <!-- / .row -->
                        </div>
                        <div class="list-group-item">
                          <div class="row align-items-center">
                            <div class="col">
      
                              <!-- Title -->
                              <h5 class="mb-0">
                               Slope
                              </h5>
      
                            </div>
                            <div class="col-auto">
      
                              <!-- Text -->
                              <small class="text-muted">
                                {{$ex->getslope()}}
                              </small>
      
                            </div>
                          </div> <!-- / .row -->
                        </div>
                        <div class="list-group-item">
                          <div class="row align-items-center">
                            <div class="col">
      
                              <!-- Title -->
                              <h5 class="mb-0">
                               number of major vessels
                              </h5>
      
                            </div>
                            <div class="col-auto">
      
                              <!-- Text -->
                              <small class="text-muted">
                                {{$ex->getNbrVessels()}}
                              </small>
      
                            </div>
                          </div> <!-- / .row -->
                        </div>
                        <div class="list-group-item">
                          <div class="row align-items-center">
                            <div class="col">
      
                              <!-- Title -->
                              <h5 class="mb-0">
                               serum cholestrol
                              </h5>
      
                            </div>
                            <div class="col-auto">
      
                              <!-- Link -->
                              <small  class=" text-muted">
                                {{$ex->chol}} mg/dl
                              </small>
      
                            </div>
                          </div> <!-- / .row -->
                        </div>
                        
                       
                        <div class="list-group-item">
                          <div class="row align-items-center">
                            <div class="col">
      
                              <!-- Title -->
                              <h5 class="mb-0">
                               Fasting Blood Sugar
                              </h5>
      
                            </div>
                            <div class="col-auto">
      
                              <!-- Link -->
                              <small  class="text-muted">
                                {{$ex->getFBS()}}
                              </small>
      
                            </div>
                          </div> <!-- / .row -->
                        </div>
                        <div class="list-group-item">
                          <div class="row align-items-center">
                            <div class="col">
      
                              <!-- Title -->
                              <h5 class="mb-0">
                               Resting electrocardiographic
                              </h5>
      
                            </div>
                            <div class="col-auto">
      
                              <!-- Link -->
                              <small  class="text-muted">
                                {{$ex->getrestecg()}}
                              </small>
      
                            </div>
                          </div> <!-- / .row -->
                        </div>
                        <div class="list-group-item">
                          <div class="row align-items-center">
                            <div class="col">
      
                              <!-- Title -->
                              <h5 class="mb-0">
                               Thallium scan
                              </h5>
      
                            </div>
                            <div class="col-auto">
      
                              <!-- Link -->
                              <small class="text-muted">
                                {{$ex->getThal()}}
                              </small>
      
                            </div>
                          </div> <!-- / .row -->
                        </div>
                    
                      </div>
      
                    </div>
                  </div>
                           </div>
                         </div>
                  <div class="">
                    <div class="row align-items-center">
                      <div class="col">
                          <h5 class="mb-5">
                              Collected by: {{$ex->doctor->fullName}}
                              </h5>
                      
                        <h5 class="mb-2">
                             Test results interpretation:
                        </h5>
                        
                        <h5 class="mb-2">
                        Heart disease: {{$ex->getResult()}}
                         </h5>
                       
    
                        <!-- Title -->
                       
    
                      </div>
                  </div>
      
                    </div>
                    @if(is_null($ex->feedback)==False)
                    <div class="mt-5" >
                      <div class="text-center">feedback</div>
                      <div class="card ">
                        <div class="card-body">
          
                          <!-- List group -->
                          <div class="list-group list-group-flush my-n3">
                            <div class="list-group-item">
                              <div class="row align-items-center">
                                <div class="col">
          
                                  <!-- Title -->
                                  <h5 class="mb-0">
                                   Doctor
                                  </h5>
          
                                </div>
                                <div class="col-auto">
          
                                  <!-- Time -->
                                  <small class="text-muted" >
                                   {{$ex->doctor->fullName}} 
                                  </small>
          
                                </div>
                              </div> <!-- / .row -->
                            </div>
                            <div class="list-group-item">
                              <div class="row align-items-center">
                                <div class="col">
          
                                  <!-- Title -->
                                  <h5 class="mb-0">
                                    Was the prediction correct?
                                  </h5>
          
                                </div>
                                <div class="col-auto">
          
                                  <!-- Time -->
                                  <small class="text-muted" >
                                       {{$ex->getCorrectPrediction()}}
                                  </small>
          
                                </div>
                              </div> <!-- / .row -->
                            </div>
                            <div class="list-group-item">
                              <div class="row align-items-center">
                                <div class="col">
          
                                  <!-- Title -->
                                  <h5 class="mb-0">
                                   Comment
                                  </h5>
          
                                </div>
                                <div class="col-auto">
          
                                  <!-- Text -->
                                  <small class="text-muted">
                                    {{$ex->feedback}}
                                  </small>
          
                                </div>
                              </div> <!-- / .row -->
                            </div>
                            
                            
                            
                            
                            
                           
                       
                            
                            
                        
                          </div>
          
                        </div>
                      </div>
                    </div>
                    @endif
                </div>
              </div>
          </div>
        </div>
</div>
@endsection
