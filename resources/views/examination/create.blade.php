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
                    <h6 class="header-pretitle">
                      New Examination
                    </h6>

                    <!-- Title -->
                    <h3 class="header-title">
                      {{$patient->fullName}}<br>
                      @if($patient->gender==1)
                      Male
                      @else 
                      Female
                      @endif
                      <br>{{$patient->DOB->age}} years old

                    </h3>

                  </div>
                </div> <!-- / .row -->
              </div>
            </div>

            <!-- Form -->
           
{!! Form::open(['method'=>'POST','action'=>['ExaminationController@predict',$patient->id]]) !!}
<div class="row">
    <div class="col">
        {!!Form::label('chest pain','chest pain(CP)')!!}

        {!!Form::select('cp', ['0'=>'None','1' => 'Typical Angina', '2' => 'Atypical Angina','3'=>'Non-Angina','4'=>'Asymptomatic'],'',['class'=>'form-control'])!!}
         

                                
    </div>
    <div class="col">
        {!!Form::label('trestbps','trestbps (mm Hg )')!!}
        {!!Form::number('trestbps',null,['class'=>'form-control'])!!}

        
           

                               
    </div>
  </div>
  <div class="row mt-5">
    <div class="col">
        {!!Form::label('chol','serum cholestoral(mg/dl)')!!}
        {!!Form::number('chol',null,['class'=>'form-control'])!!}

                                
    </div>
    <div class="col">
        {!!Form::label('fbs','fasting blood sugar(fbs)')!!}

        
        {!!Form::select('fbs', ['1'=>'fasting blood sugar > 120 mg/dl','0' => 'fasting blood sugar < 120 mg/dl'],'',['class'=>'form-control'])!!}

                              
    </div>
                               
    </div>
    <div class="row mt-5">
        <div class="col">
            <label for="Restecg" class=" col-form-label text-md-right">restecg</label>

            {!!Form::select('restecg', ['0'=>'normal','1' => 'Having ST-T wave abnormality','2'=>'hypertrophy'],'',['class'=>'form-control'])!!}
               

                                    
        </div>
        <div class="col">
            <label for="thalach" class=" col-form-label text-md-right">Maximum Heart Rate(thalach)</label>

            
            {!!Form::number('thalach',null,['class'=>'form-control'])!!}

                                  
        </div>
                                   
        </div>
        <div class="row mt-5">
            <div class="col">
                <label for="slope" class=" col-form-label text-md-right">Slope of the peak exercice</label>

                {!!Form::number('slope',null,['class'=>'form-control'])!!}
                   

                                        
            </div>
            <div class="col">
                <label for="ca" class=" col-form-label text-md-right">number of major vessels(ca)</label>

                
                {!!Form::select('ca', ['0'=>'none','1' => '1','2'=>'2','3'=>'3'],'',['class'=>'form-control'])!!}

                                      
            </div>
                                       
            </div>
            <div class="row mt-5">
                <div class="col">
                    <label for="exang" class=" col-form-label text-md-right">Exang</label>

                    {!!Form::select('exang', ['0'=>'no','1' => 'yes'],'',['class'=>'form-control'])!!}
                       
    
                                            
                </div>
                <div class="col">
                    <label for="thal" class=" col-form-label text-md-right">thalium scan results</label>

                    
                    {!!Form::select('thal', ['3'=>'normal','6' => 'Fixed Defect','7'=>'Reversible Defect'],'',['class'=>'form-control'])!!}
                                          
                </div>
                                           
                </div>
            </div>
            <div class="row mt-5">
              <div class="col">
                  <label for="oldPeak" class=" col-form-label text-md-right">oldPeak </label>

                  {!!Form::number('oldpeak',null,['class'=>'form-control'])!!}
  
                                          
              </div>
            
                                         
              </div>
          </div>


            <!-- Divider -->
            <hr class="mt-4 mb-5">

            <!-- Project cover -->
            
           
            <div class="form-group">
      
                  {!!Form::submit('Save',['class'=>'text-center btn  btn-primary'])!!}
         </div>

         {!! Form::close() !!}

        </div>
      </div> <!-- / .row -->
    </div>
    @endsection
    @section('scripts')

@endsection
