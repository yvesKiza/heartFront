@extends('layouts.admin')
@section('content')
    

<div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-10">
              @if(!$errors->isEmpty())
                <div class="mt-3">
                @include('includes.errors')
                </div>
              
              @endif
               
            <!-- Header -->
            <div class="header mt-md-5">
              <div class="header-body">
                <div class="row align-items-center">
                  <div class="col">
                    
                    <!-- Pretitle -->
                   

                    <!-- Title -->
                    <h1 class="header-title">
                     search  Patient
                    </h1>

                  </div>
                  <div class="col-auto">
                  <a href="{{route('patient.create')}}" class="btn btn-primary">create new patient</a>
                  </div>
                </div> <!-- / .row -->
              </div>
            </div>

            <!-- Form -->
                      
{!! Form::open(['method'=>'POST','action'=>'PatientController@searchID']) !!}
<div class="row mt-5">
    <div class="col-4">

    <label>
     Patient ID:
    </label>
    {!!Form::text('id',null,['class'=>'form-control','required' => 'required'])!!}
   
  </div>
 
  

  <!-- Project cover -->
  
 
  <div class="mt-5 col-2">

        {!!Form::submit('search',['class'=>'btn btn-block btn-primary'])!!}
</div>
</div>

{!! Form::close() !!}
<hr class="mt-5 mb-4">
           <h3 class="text-center">OR</h3>
{!! Form::open(['method'=>'POST','action'=>'PatientController@searchByNames']) !!}
<div class="row">
<div class="col-5" >
    <div>
    <label>
     patient first name:
    </label>
    {!!Form::text('first_name',null,['class'=>'form-control','required' => 'required'])!!}
   
  </div>
  <div  >
    <label>
     patient surname:
    </label>
    {!!Form::text('surname',null,['class'=>'form-control','required' => 'required'])!!}
   
  </div>
</div>
<div class="col-5">
  <div class="form-group" >
    <label>
     phone:
    </label>
    {!!Form::text('phone',null,['class'=>'form-control','required' => 'required'])!!}
   
  </div>
 
 
  
 
  <div class="form-group">

        {!!Form::submit('search',['class'=>'btn btn-block btn-primary'])!!}
</div>
</div>

{!! Form::close() !!}
<hr class="mt-4 mb-5">
          </div>
        </div>
</div>
@endsection

 