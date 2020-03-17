@foreach ($notifications as $x) 
@if($x->type=="App\Notifications\TenderApplicantNotification")


<a class="list-group-item px-0" href="{{route('notification.show',$x->id)}}">

<div class="row {{$x->unread() ? 'unread' : 'read'}} ">
  <div class="col-auto">

    <!-- Avatar -->
    <div class="avatar avatar-sm">
      <img src="{{  $x->data['avatar'] ? asset('/images/logo/'. $x->data['avatar'] ): asset('/images/placeholder/logo.png' )}}"" alt="..." class="avatar-img rounded-circle">
    </div>

  </div>
  <div class="col ml-n2">

    <!-- Content -->
  <div  >
    {{ $x->data['name']}}, {{$x->data['content']}} {{ $x->data['tender']}}
    </div>

  </div>
  <div class="col-auto">

    <small class="text-muted">
     {{$x->created_at->diffForHumans()}}
    </small>

  </div>
</div> <!-- / .row -->

</a>
@endif
@if($x->type=="App\Notifications\TenderApplicationNotification")
<a class="list-group-item px-0" href="{{route('notification.show',$x->id)}}">

<div class="row {{$x->unread() ? 'unread' : 'read'}}">
  
  <div class="col ml-n2">

    <!-- Content -->
    <div >
     {{$x->data['content']}}, " {{ $x->data['tender']}}  "
    </div>

  </div>
  <div class="col-auto">

    <small class="text-muted">
     {{$x->created_at->diffForHumans()}}
    </small>

  </div>
</div> <!-- / .row -->

</a>
@endif
@if($x->type=="App\Notifications\TenderApplicationAccepted")
<a class="list-group-item px-0" href="{{route('notification.show',$x->id)}}">

<div class="row {{$x->unread() ? 'unread' : 'read'}}">
  
  <div class="col ml-n2">

    <!-- Content -->
    <div >
     {{$x->data['content']}}, " {{ $x->data['tender']}} "
    </div>

  </div>
  <div class="col-auto">

    <small class="text-muted">
     {{$x->created_at->diffForHumans()}}
    </small>

  </div>
</div> <!-- / .row -->

</a>
@endif
@if($x->type=="App\Notifications\TenderCancelledByOwner")
<a class="list-group-item px-0" href="{{route('notification.show',$x->id)}}">

<div class="row {{$x->unread() ? 'unread' : 'read'}}">
    <div class="col-auto">

        <!-- Avatar -->
        <div class="avatar avatar-sm">
          <img src="{{  $x->data['avatar'] ? asset('/images/logo/'. $x->data['avatar'] ): asset('/images/placeholder/logo.png' )}}"" alt="..." class="avatar-img rounded-circle">
        </div>

      </div>
      <div class="col ml-n2">
  
        <!-- Content -->
      <div  >
        {{ $x->data['name']}}, {{$x->data['content']}} {{ $x->data['tender']}}
        </div>

      </div>
      <div class="col-auto">

        <small class="text-muted">
         {{$x->created_at->diffForHumans()}}
        </small>
  
      </div>
    </div> <!-- / .row -->


</a>
@endif

@if($x->type=="App\Notifications\TenderCancelledBySystemForApplicant")
<a class="list-group-item px-0" href="{{route('notification.show',$x->id)}}">

<div class="row {{$x->unread() ? 'unread' : 'read'}}">
    
      <div class="col ml-n2">
  
        <!-- Content -->
      <div  >
            "{{ $x->data['tender']}} ", {{$x->data['content']}} 
        </div>

      </div>
      <div class="col-auto">

        <small class="text-muted">
         {{$x->created_at->diffForHumans()}}
        </small>
  
      </div>
    </div> <!-- / .row -->


</a>
@endif
@if($x->type=="App\Notifications\TenderCancelledBySystemForOwner")
<a class="list-group-item px-0" href="{{route('notification.show',$x->id)}}">

<div class="row {{$x->unread() ? 'unread' : 'read'}}">
    
      <div class="col ml-n2">
  
        <!-- Content -->
      <div  >
            "{{ $x->data['tender']}} ", {{$x->data['content']}} 
        </div>

      </div>
      <div class="col-auto">

        <small class="text-muted">
         {{$x->created_at->diffForHumans()}}
        </small>
  
      </div>
    </div> <!-- / .row -->


</a>
@endif
@if($x->type=="App\Notifications\TenderCreated")
<a class="list-group-item px-0" href="{{route('notification.show',$x->id)}}">

<div class="row {{$x->unread() ? 'unread' : 'read'}}">
    
      <div class="col ml-n2">
  
        <!-- Content -->
      <div  >
            "{{ $x->data['name']}} ", {{$x->data['content']}} 
        </div>

      </div>
      <div class="col-auto">

        <small class="text-muted">
         {{$x->created_at->diffForHumans()}}
        </small>
  
      </div>
    </div> <!-- / .row -->


</a>
@endif

@if($x->type=="App\Notifications\TenderDeadline")
<a class="list-group-item px-0" href="{{route('notification.show',$x->id)}}">

<div class="row {{$x->unread() ? 'unread' : 'read'}}">
    
      <div class="col ml-n2">
  
        <!-- Content -->
      <div  >
            "{{ $x->data['tender']}} ", {{$x->data['content']}} 
        </div>

      </div>
      <div class="col-auto">

        <small class="text-muted">
         {{$x->created_at->diffForHumans()}}
        </small>
  
      </div>
    </div> <!-- / .row -->


</a>
@endif

@if($x->type=="App\Notifications\TenderRejected")
<a class="list-group-item px-0" href="{{route('notification.show',$x->id)}}">

<div class="row {{$x->unread() ? 'unread' : 'read'}}">
    
      <div class="col ml-n2">
  
        <!-- Content -->
      <div  >
            "{{ $x->data['tender']}} ", {{$x->data['content']}} 
        </div>

      </div>
      <div class="col-auto">

        <small class="text-muted">
         {{$x->created_at->diffForHumans()}}
        </small>
  
      </div>
    </div> <!-- / .row -->


</a>
@endif
@endforeach
