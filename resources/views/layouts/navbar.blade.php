<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IHeart</title>
    
    @yield('css')
    <link href="{{asset('css/all.css')}}" rel="stylesheet" id="stylesheetLight">
   
   
    
</head>
<body style="display:block;">
        <nav class="navbar navbar-expand-lg  navbar-light " id="topnav">
                <div class="container">
        
                  
                  <button class="navbar-toggler mr-auto collapsed" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
        
                  
                  {{-- <a class="navbar-brand mr-auto" href="index-2.html">
                        <img src="{{asset('img/logo.svg')}}" class="navbar-brand-img 
                        mx-auto" alt="...">
                  </a> --}}
        
                  
                  
        
                  
                  <div class="navbar-user" >
              
                    
                    
        
                      @guest
                      <ul class="navbar-nav  d-none d-md-flex">
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                      </li>
                     
                      
                
                     
                     
                    </ul>
                  @else
              
                    <div class="dropdown">
                
                      <!-- Toggle -->
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a href="#" class="dropdown-item">Profile</a>
                    
                        <hr class="dropdown-divider">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                     </form>
                      </div>
        
                    </div>
                 
                   @endguest
                  </div>

                  <div class="navbar-collapse mr-auto order-lg-first collapse" id="navbar" >
        
                    <!-- Form -->
                    
        
                    <!-- Navigation -->
                    <ul class="navbar-nav mr-auto">
                      @auth
                          
                    
                      
                      
                      
                      <li class="nav-item">
                        <a class="nav-link " href="/" >
                          Dashboard
                        </a>
                      </li>
                     
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="topnavDashboards" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Sale
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="topnavDashboards">
                           @can('admin')
                            <li>
                            <a class="dropdown-item active" href="{{route('sales.all')}}">
                                Overview
                              </a>
                            </li>
                            @endcan
                            <li>
                                <a class="dropdown-item active" href="{{route('mysales')}}">
                                 mySales
                                </a>
                              </li>
                            <li>
                            <a class="dropdown-item " href="{{route('sale.decoder.create')}}">
                                decoder
                              </a>
                            </li>
                            <li>
                                <a class="dropdown-item " href="{{route('sale.subscription.create')}}">
                                  Subscription
                                </a>
                              </li>
                          </ul>
                        </li>
                      </li>
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle " href="#" id="topnavClient" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Client
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="topnavClient">
                            <li>
                              <a class="dropdown-item " href="{{route('client.index')}}">
                                Overview
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item " href="{{route('client.create')}}">
                                create
                              </a>
                            </li>
            
                               
                          </ul>
                        </li>
                        @can('admin')
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle " href="#" id="topnavUsers" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Users
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="topnavUsers">
                                <li>
                                  <a class="dropdown-item active" href="{{route('agent.index')}}">
                                    Overview
                                  </a>
                                </li>
                                <li>
                                  <a class="dropdown-item " href="{{route('agent.create')}}">
                                    create
                                  </a>
                                </li>
                               
                              </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle " href="#" id="topnavDecoder" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  decoder
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="topnavDecoder">
                                 <li>
                                 <a class="dropdown-item " href="{{route('decoder.index')}}">
                                    Overview
                                  </a>
                                 </li>
                                 <li>
                                  <a class="dropdown-item " href="{{route('decoder.create')}}">
                                    create
                                  </a>
                                 </li>
                                  
                                </ul>
                              </li>
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle " href="#" id="topnavSubscription" role="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                                  Subscription
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnavSubscription">
                                <a class="dropdown-item " href="{{route('subscription.index')}}">
                                    Overview
                                  </a>
                                  <a class="dropdown-item " href="{{route('subscription.create')}}">
                                    create
                                  </a>
                                  
                                </div>
                              </li>
                              <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle " href="#" id="topnavcat" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Decoder category
                                  </a>
                                  <div class="dropdown-menu" aria-labelledby="topnavCat">
                                  <a class="dropdown-item " href="{{route('decoder-type.index')}}">
                                      Overview
                                    </a>
                                    <a class="dropdown-item " href="{{route('decoder-type.create')}}">
                                      create
                                    </a>
                                    
                                  </div>
                                </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle " href="#" id="topnavService" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Service
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="topnavService">
                                  <li>
                                    <a class="dropdown-item " href="{{route('service.index')}}">
                                      Overview
                                    </a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item " href="{{route('service.create')}}">
                                      create
                                    </a>
                                  </li>
                  
                                     
                                </ul>
                              </li>

                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle " href="#" id="topnavCard" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                card
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="topnavCard">
                                  <li>
                                    <a class="dropdown-item " href="{{route('card.index')}}">
                                      Overview
                                    </a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item " href="{{route('card.create')}}">
                                      create
                                    </a>
                                  </li>
                  
                                     
                                </ul>
                              </li>
                         @endcan
                              @endauth
                              @guest
                              <li class="nav-item d-md-none">
                                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                              </li>
                             
                              @endguest
                      </ul>
                    
          
                    
          
                  </div> <!-- / .container -->
                  </div>
                </nav>
               
                <div class="main-content">
                @yield('content')
                </div>

                <script src="{{asset('js/all.js')}}"></script>
                @yield('scripts')
</body>
</html>
                
              
                    