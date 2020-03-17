@extends('layouts.admin')
@section('content')
    

<div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-8 col-xl-6">
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
                      Create a feedback
                    </h1>

                  </div>
                  <div class="col-auto">
                     
                  </div>
                </div> <!-- / .row -->
                <div class="row mt-5">
                    Examination ID: {{$ex->id}}<br>
                    patient name: {{$ex->patient->fullName}}<br>
                    prediction(heart Disease): {{$ex->getResult()}}

                </div>
              </div>
            </div>

            <!-- Form -->
           
{!! Form::open(['method'=>'POST','action'=>['ExaminationController@comment',$ex->id]]) !!}
  
<div class="form-group" >
    <label>
      was prediction correct?
    </label>
    {!!Form::select('doctorAnalysis', ['0'=>'no','1' => 'yes'],'',['class'=>'form-control'])!!}
   
  </div>
<div class="form-group" >
  <label>
    comment
  </label>
  {!!Form::textarea('comment',null,['class'=>'form-control'])!!}
 
</div>


             
              <div class="form-group">
        
                    {!!Form::submit('Save',['class'=>'btn btn-block btn-primary'])!!}
           </div>

           {!! Form::close() !!}

          </div>
        </div> <!-- / .row -->
      </div>
      @endsection
      @section('scripts')

@endsection