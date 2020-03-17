@extends('layouts.navbar')
@section('css')

<link href="{{asset('css/all.css')}}" rel="stylesheet">
<style>
.banner{
  width: 100%;
  max-height: 248px;
}
.dropzone {
    
    border: 0;
    background: lavenderblush;
     padding: 0 ;
}
</style>
 
@endsection
@section('content')
@include('includes.profileOwner')
      <div class="container">
            <div class="row">
              <div class="col-12 col-xl-8">
                
                <!-- Card -->
                <div class="card">
                  <div class="card-body">
                    
                    <!-- Header -->
                    <div class="mb-3">
                      <div class="row align-items-center">
                       
                        <div class="col ml-n2">
    
                          <!-- Title -->
                          <h4 class="card-title mb-1">
                            DESCRIPTION
                          </h4>
    
                          <!-- Time -->
                          
                          
                        </div>
                        
                      </div> <!-- / .row -->
                    </div>
    
                    <!-- Text -->
                    <p class="mb-3">
                      @if($user->description)
                        {{$user->description}}
                        @endif
                    </p>
                    
                    
    
                    <!-- Image -->
                    
    
                    <!-- Buttons -->
                    
    
                    <!-- Divider -->
                    
    
                    <!-- Comments -->
    
                    
    
                    
    
                    <!-- Divider -->
                    
    
                    <!-- Form -->
                     <!-- / .row -->
    
                  </div>
                </div>
    
                <!-- Card -->
                
    
              </div>
              <div class="col-12 col-xl-4">
                
                <!-- Card -->
                <div class="card">
                  <div class="card-body">
    
                    
    
                    <!-- Divider -->
                    <hr>
    
                    <div class="row align-items-center">
                      <div class="col">
                        
                        <!-- Title -->
                        <h5 class="mb-0">
                          JOINED
                        </h5>
    
                      </div>
                      <div class="col-auto">
                        
                        <time class="small text-muted" >
                         {{$user->created_at->diffForHumans()}}
                        </time>
    
                      </div>
                    </div> <!-- / .row -->
    
                    <!-- Divider -->
                    <hr>
    
                    <div class="row align-items-center">
                      <div class="col">
                        
                        <!-- Title -->
                        <h5 class="mb-0">
                          LOCATION
                        </h5>
    
                      </div>
                      <div class="col-auto">
                        
                        <small class="text-muted">
                                {{$user->address}}
                        </small>
    
                      </div>
                    </div> <!-- / .row -->
    
                    <!-- Divider -->
                    <hr>
    
                    <div class="row align-items-center">
                      <div class="col">
                        
                        <!-- Title -->
                        <h5 class="mb-0">
                          WEBSITE
                        </h5>
    
                      </div>
                      <div class="col-auto">
                        @if($user->website)
                      <a href="{{$user->website}}"  target="_blank" class="small">
                            {{$user->website}}
                        </a>
                        @else 
                        <a href="#" class="small">
                               N\A
                            </a>
                            @endif
    
                      </div>
                    </div> <!-- / .row -->
                    <hr>
    
                    <div class="row align-items-center">
                      <div class="col">
                        
                        <!-- Title -->
                        <h5 class="mb-0">
                          EMAIL ADDRESS
                        </h5>
    
                      </div>
                      <div class="col-auto">
                       
                          <small class="text-muted">
                            {{$user->user->email}}
                          </small>
                        
    
                      </div>
                    </div> 
    
                  </div>
                </div>
    
               
                
    
              </div>
            </div> <!-- / .row -->
          </div>
        
          @endsection
          @section('scripts')
@include('includes.profileJs')
  @endsection