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
                    <h6 class="header-pretitle">
                      Edit Payment
                    </h6>

                    <!-- Title -->
                    <h1 class="header-title">
                      updating a Payment
                    </h1>

                  </div>
                </div> <!-- / .row -->
              </div>
            </div>

            <!-- Form -->
           
{!! Form::model($payment,['method'=>'PATCH','action'=>['PaymentController@update',$payment->id]]) !!}
                   
              <div class="form-group" >
                <label>
                  Member
                </label>
                <select  name="payer_id" class="form-control  memberList"  >
                <option value="{{$payment->payer->id}}" selected="selected">{{$payment->payer->name}}</option>
                </select>
              </div>

              <div class="form-group">
                    {!!Form::label('amount','amount')!!}
                    {!!Form::number('amount',null,['class'=>'form-control'])!!}
              </div>
              <div class="form-group">
                    {!!Form::label('date','date')!!}
                    {!!Form::text('created_at',null,['class'=>'form-control','id'=>'paymentDate'])!!}
              </div>



              <!-- Divider -->
              <hr class="mt-4 mb-5">

              <!-- Project cover -->
              
             
              <div class="form-group">
        
                    {!!Form::submit('update payment',['class'=>'btn btn-block btn-primary'])!!}
           </div>

           {!! Form::close() !!}

          </div>
        </div> <!-- / .row -->
      </div>
      @endsection
      @section('scripts')
<script type="text/javascript">
    $(document).ready(function() {
      $('.memberList').select2({
      placeholder: 'Select a member',
    minimumInputLength: 3,
    ajax: {
        url: '{{route('members')}}',
        dataType: 'json',
          delay: 250,
          processResults: function (data) {
            return {
              results:  $.map(data, function (item) {
                    return {
                        text: item.name,
                        id: item.id
                    }
                })
            };
          },
          cache: true
        }
      });

    $("#paymentDate").flatpickr({
    
    dateFormat: "Y-m-d",
    maxDate: "today",
    minDate: new Date().fp_incr(-7)
    
});
    
});

</script>
@endsection