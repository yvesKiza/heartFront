@extends('layouts.navbar')
@section('css')

<link href="{{asset('css/all.css')}}" rel="stylesheet">

@endsection
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-10 col-xl-8">
        
            @include('includes.profileEdit')

        @if(!$errors->isEmpty())
        <div class="mt-3">
        @include('includes.errors')
        </div>
        @endif
        <!-- Form -->
        {!! Form::model($user,['method'=>'PATCH','action'=>['CompanyController@updateGeneral'],'class'=>'mb-4']) !!}
        

          <div class="row">
            <div class="col-12 col-md-6">
              
              <!-- First name -->
              <div class="form-group">

                <!-- Label -->
                <label>
                  NAME
                </label>

                <!-- Input -->
                {!!Form::text('name',null,['class'=>'form-control'])!!}

              </div>

            </div>
            <div class="col-12 col-md-6">
              
              <!-- Last name -->
              <div class="form-group">

                <!-- Label -->
                <label>
                WEBSITE
                </label>

                <!-- Input -->
                {!!Form::text('website',null,['class'=>'form-control'])!!}

              </div>

            </div>
            
            <div class="col-12">
              
              <!-- Phone -->
              <div class="form-group">

                <!-- Label -->
                <label>
                  ADDRESS
                </label>

                <!-- Input -->
                {!!Form::text('address',null,['class'=>'form-control'])!!}

              </div>

            </div>
            <div class="col-12">
              
              <!-- Birthday -->
              <div class="form-group">

                <!-- Label -->
                <label>
                  DESCRIPTION
                </label>

                <!-- Input -->
                {!!Form::textarea('description',null,['class'=>'form-control','rows' => 5])!!}

              </div>

            </div>
          
            {!!Form::submit('save changes',['class'=>'btn btn-primary'])!!}
              <!-- Submit -->
             
         
          {!! Form::close() !!}
        </div>
    </div> <!-- / .row -->
    </div>
        

    
    
  </div>
  @endsection