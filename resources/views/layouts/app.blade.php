<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Naija Vegas') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <script src="https://kit.fontawesome.com/3c7572cba4.js" crossorigin="anonymous"></script>
  <!-- Nucleo Icons -->
  <link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{ asset('css/argon-design-system.css?v=1.2.0') }}" rel="stylesheet" />
  <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
  @yield('head')
</head>
<body>
    <div id="app">
        <div>
            <nav
              id="navbar-main"
              class="navbar navbar-main navbar-expand-lg navbar-light headroom" style="background-color: #000900; padding-top: 10px; padding-bottom: 10px; z-index:25;"
            >
              <div class="container position-relative">
                <div class="icon-wrapper position-absolute">
                  <div class="row">
                    <div class="w-100 text-center">
                      <a href="/" class="d-inline-block">
                        <img
                          style='height: 50px; margin-top: 7px'
                          src="{{ asset('img/brand/NaijaVegasLogoSquaExSmall.png') }}"
                          alt=""
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <div
                  class="d-flex justify-content-between w-100"
                  id="navbar_global"
                >
                  <ul class="navbar-nav navbar-nav-hover align-items-lg-center justify-content-center">
                        @guest
                          <li class="nav-item">
                            <a href="/login" class="nav-link" role="button">
                            
                            <span class="nav-link-inner--text text-white">
                                Login
                            </span>
                            </a>
                          </li>
                        @else
                          <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle text-white" data-toggle="dropdown" role="button" aria-expanded="false">
                            <span class="nav-link-inner--text text-white" style="line-height:1em;">
                              <i class="ni ni-circle-08 mr-1 text-muted nav-icon"></i>
                              <span class="d-none d-md-inline">{{ auth()->user()->profile->firstname }}
                              </span>
                            </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-xl p-2 p-md-0" >
                              <div class="dropdown-menu-inner">
                                <small class="d-block d-md-none font-weight-bold ml-3"><mark class="text-uppercase">Hi, </mark>{{ auth()->user()->profile->firstname }}
                                </small>
                                <hr class="d-block d-md-none m-2" />
                                <a href="/bets" class="media d-flex align-items-center mb-2">
                                  <div class="media-body ml-3">
                                    <h6 class=" text-dark mb-0 small">My Bets</h6>
                                  </div>
                                </a>
                                <a href="/profile" class="media d-flex align-items-center mb-2">
                                  <div class="media-body ml-3">
                                    <h6 class=" text-dark mb-0 small">Profile</h6>
                                  </div>
                                </a>
                                <a href="#notifications" class="media d-flex align-items-center mb-2">
                                  
                                  <div class="media-body ml-3">
                                    <h6 class=" text-dark mb-0 small">Notifications</h6>
                                  </div>
                                </a>
                                <hr class="m-2"/>
                                <a 
                                  href="{{ route('logout') }}" 
                                  class="media d-flex align-items-center mb-0" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                >
                                  <div class="icon icon-shape icon-sm bg-gradient-warning rounded-circle text-white ml-3" style="transform:scale(0.8);">
                                    <i class="ni ni-button-power"></i>
                                  </div>
                                  <div class="media-body ml-3">
                                    <h5 class=" text-warning mb-0 small">Logout</h5>
                                  </div>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>
                              </div>
                            </div>
                          </li>
                        @endguest
                  </ul>
                  
                  <ul class="navbar-nav navbar-nav-hover align-items-lg-center justify-content-center">
                    @guest
                      <li class="nav-item">
                        <a
                          href="/register"
                          class="nav-link"
                          role="button"
                        >
                          <span class="nav-link-inner--text text-white">
                            Register
                          </span>
                        </a>
                      </li>
                    @else
                      @if(auth()->user()->wallet)
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle text-white" href="#" role="button" id="navWalletDropDown" data-toggle="dropdown">
                            <i class="fas fa-wallet mr-1 text-muted nav-icon"></i>
                            <span class="text-white d-md-inline d-none"><small>My Wallet</small></span>
                          </a>
                          
                            
                          
                            <div class="dropdown-menu p-2" aria-labelledby="navWalletDropDown">
                              <span class="d-md-none d-block text-uppercase font-weight-bold ml-3"><small>My Wallet</small></span>
                              
                              <hr class="d-block d-md-none m-2" />

                              <h3 class="dropdown-item"><span class="text-muted text-bold text-uppercase">Balance </span>{{ auth()->user()->wallet->balance }}</h3>
                              <a class="dropdown-item text-dark" href="#">Fund Wallet</a>
                              <a class="dropdown-item text-dark" href="#">See History</a>
                            </div>
                          
                        </li>
                      @else
                        <li class="nav-item dropdown">
                            <a class="nav-link text-danger dropdown-toggle" href="#" role="button" id="navWalletDropDown" data-toggle="dropdown" >
                              <i class="text-muted fas fa-wallet nav-icon"></i>
                              <span class="text-white d-md-inline d-none"><small>My Wallet</small></span>
                            </a>

                            <div class="dropdown-menu p-2" aria-labelledby="navWalletDropDown">
                              <span class="d-md-none d-block text-uppercase font-weight-bold ml-3"><small>My Wallet</small></span>
                              
                              <hr class="d-block d-md-none m-2" />

                              <h3 class="dropdown-item mb-0 text-danger" >Unavailable</h3>
                            </div>
                        </li>
                      @endif
                    @endguest
                  </ul>
                </div>
              </div>
            </nav>
            <nav
              id="navbar-sub"
              class="navbar navbar-sub navbar-expand-lg navbar-light headroom"
              style='background-color: #bf0000; padding-top: 5px; padding-bottom: 5px; z-index:20;'
            >
              <div class="container">
                <div
                  class="d-flex justify-content-between w-100"
                  id="navbar_global"
                >
                  <ul class="navbar-nav navbar-nav-hover align-items-lg-center flex-row w-100">
                    <li class="nav-item">
                      <a
                        href="/politics"
                        class="text-white nav-link px-2"
                        role="button"
                      >
                        <i class="text-white">
                          <i class="fas fa-vote-yea"></i>
                        </i>
                        <span class="nav-link-inner--text ml-0 text-white">
                          Politics
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a
                        href="/sports"
                        class="text-white nav-link px-2"
                        role="button"
                      >
                        <i class="text-white">
                          <i class="far fa-futbol"></i>
                        </i>
                        <span class="nav-link-inner--text ml-0 text-white">
                          Sports
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link  px-2" role="button">
                        <i class="text-white">
                          <i class="fas fa-award"></i>
                        </i>
                        <span class="nav-link-inner--text ml-0 text-white">
                          Awards
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link px-2" role="button">
                        <i class="text-white">
                          <i class="fas fa-medal"></i>
                        </i>
                        <span class="nav-link-inner--text ml-0 text-white">
                          Special Bets
                        </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
        </div>

        <main class="">
            @yield('content')
        </main>

        <footer class="footer text-white" style="background-color: rgb(0, 0, 0);">
            <div class="container">
                <div class="row-grid my-md row row">
                  <div class="col-md-3 col-sm-6">
                      <div class="w-100 mb-3">
                          <img src="{{ asset('img/brand/NaijaVegasLogoRectSmall.png') }}" alt="logo" style="height: 40px;">
                      </div>
                    <ul>
                        <li class="pt-1"><small class="text-uppercase text-muted font-weight-bold">Get In Touch</small></li>
                        <li>
                          <a href="#email"  target="_blank" rel="noopener noreferrer" class="btn-icon-only rounded-circle btn btn-dark">
                            <span class="btn-inner--icon">
                              <i class="ni ni-email-83"></i>
                            </span>
                        </a><small>support@naijavegas.com</small></li>
                        <li li class="pt-1"> 
                          <a href="#PHONE"  target="_blank" rel="noopener noreferrer" class="btn-icon-only rounded-circle btn btn-dark">
                            <span class="btn-inner--icon">
                              <i class="ni ni-mobile-button"></i>
                            </span>
                          </a><span>+23480naijavegas.com</span>
                        </li>
                        <li li class="pt-1"> <div class="w-100 ">
                          <a href="https://twitter.com/naijavegas" id="tooltip475038074" target="_blank" rel="noopener noreferrer" class="btn-icon-only rounded-circle btn btn-twitter">
                              <span class="btn-inner--icon"><i class="fa fa-twitter"></i></span>
                          </a>
                          <a href="https://www.facebook.com/naiajavegas" id="tooltip837440414" target="_blank" rel="noopener noreferrer" class="btn-icon-only rounded-circle ml-1 btn btn-facebook">
                              <span class="btn-inner--icon"><i class="fa fa-facebook-square"></i></span>
                          </a>
                          <a href="https://www.instagram.com/naiajavegas" id="tooltip837440414" target="_blank" rel="noopener noreferrer" class="btn-icon-only rounded-circle ml-1 btn btn-instagram">
                              <span class="btn-inner--icon"><i class="fa fa-instagram"></i></span>
                          </a>
                        </div></li>
                    </ul>
                </div>
                  <div class="col-md-3 col-sm-6">
                    <small class="text-uppercase text-muted font-weight-bold">Help Desk</small>
                    <ul>
                        <li><span>How To Play</span></li>
                        <li><span>FAQs</span></li>
                        <li><span>Customer Support</span></li>
                        <li><span>Vacancies</span></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6">
                    <small class="text-uppercase text-muted font-weight-bold">Legal</small>
                    <ul>
                        <li><span>Terms and Conditions</span></li>
                        <li><span>Privacy Policy</span></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6">
                    <small class="text-uppercase text-muted font-weight-bold">Categories</small>
                    <ul>
                        <li><span>Politics</span></li>
                        <li><span>Sports</span></li>
                        <li><span>Awards</span></li>
                        <li><span>Special Bets</span></li>
                    </ul>
                </div>
            </div>
            
            <hr>
            <div class="align-items-center justify-content-md-between row">
                <div class="col-md-6">
                    <div class="copyright">© 2020 
                        <a href="https://www.naijavegas.com?ref=adsr-footer" target="_blank" rel="noopener noreferrer">Naija Vegas </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="nav-footer justify-content-end nav">
                        <li class="nav-item">
                            <a href="https://www.naijavegas.com?ref=adsr-footer" target="_blank" rel="noopener noreferrer" class="nav-link">Create Account</a>
                        </li>
                        <li class="nav-item">
                            <a href="http://news.naijavegas.com?ref=adsr-footer" target="_blank" rel="noopener noreferrer" class="nav-link">Latest Tips</a>
                        </li>
                        <li class="nav-item">
                            <a href="http://news.naijavegas.com?ref=adsr-footer" target="_blank" rel="noopener noreferrer" class="nav-link">Trending Bets</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    </div>
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
</body>
</html>
