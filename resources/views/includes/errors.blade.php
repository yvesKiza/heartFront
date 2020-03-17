@if (count($errors)>0)
<div class="mt-3 col-12 col-md-8 ">
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
                
            @endforeach
        </ul>
    </div>
</div>
    
@endif
<div class="mt-3 col-12 col-md-8 ">
@if(Session::has('success'))
    <div class="alert alert-success">
                       {{ session('success')}}
      </div>
@endif
@if(Session::has('error'))
    <div class="alert alert-danger">
                       {{ session('error')}}
      </div>
@endif
</div>

