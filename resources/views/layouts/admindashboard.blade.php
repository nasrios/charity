<!doctype html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Phoenix</title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
    <link href="{{asset('/dashassets/assets/css/phoenix.min.css')}}" rel="stylesheet" id="style-default">
    <link href="{{asset('/dashassets/assets/css/user.min.css')}}" rel="stylesheet" id="user-style-default">
    <style>
      body {
        opacity: 0;
      }
    </style>
  </head>

  <body>
    <main class="main" id="top">
      <div class="container-fluid px-0">
        <nav class="navbar navbar-light navbar-vertical navbar-vibrant navbar-expand-lg">
          <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
            <div class="navbar-vertical-content scrollbar">
              <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                <li class="nav-item"><a class="nav-link active" href="{{route('guests.index')}}">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="cast"></span></span><span class="nav-link-text">guests</span></div>
                  </a></li>
                  <li class="nav-item"><a class="nav-link active" href="{{route('donations.index')}}">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="cast"></span></span><span class="nav-link-text">donations</span></div>
                  </a></li>
                  <li class="nav-item"><a class="nav-link active" href="index.html">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="cast"></span></span><span class="nav-link-text">posts</span></div>
                  </a></li>


              </ul>
            </div>
            <div class="navbar-vertical-footer"><a class="btn btn-link border-0 fw-semi-bold d-flex ps-0" href="#!"><span class="navbar-vertical-footer-icon" data-feather="log-out"></span><span>Settings</span></a></div>
          </div>
        </nav>
        <nav class="navbar navbar-light navbar-top navbar-expand">
          <div class="navbar-logo"><button class="btn navbar-toggler navbar-toggler-humburger-icon" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button> <a class="navbar-brand me-1 me-sm-3" href="index.html">
              <div class="d-flex align-items-center">
                <a href="{{route('nowhere')}}">
                    <p class="logo-text ms-2 d-none d-sm-block">HopeShare</p>
                </a>
              
              </div>
            </a></div>
          <div class="collapse navbar-collapse">
            <div class="search-box d-none d-lg-block" style="width:25rem;">
              <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control form-control-sm search-input search min-h-auto" type="search" placeholder="Search..." aria-label="Search"> <span class="fas fa-search search-box-icon"></span></form>
            </div>
            <ul class="navbar-nav navbar-nav-icons ms-auto flex-row">
            
              <li class="nav-item dropdown"><a class="nav-link lh-1 px-0 ms-5" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/57.png" alt=""></div>
                </a>
                <div class="dropdown-menu dropdown-menu-end py-0 dropdown-profile shadow border border-300" aria-labelledby="navbarDropdownUser">
                  <div class="card bg-white position-relative border-0">
                    <div class="card-body p-0 overflow-auto scrollbar" style="height: 18rem;">
                      <div class="text-center pt-4 pb-3">
        
                        <h6 class="mt-2">{{auth()->user()->name}}</h6>
                      </div>
                     
                    
                      <hr>
                      <div class="px-3">
                        <a onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"><span class="me-2" data-feather="log-out"></span>Sign out</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>  
                      </div>
                      <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1" href="#!">Privacy policy</a>&bull;<a class="text-600 mx-1" href="#!">Terms</a>&bull;<a class="text-600 ms-1" href="#!">Cookies</a></div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
        <div class="content">
          <div class="pb-5">
            <div class="row g-5">
              <div>
                @yield('content')
            </div>
        </div>
      </div>
    
      <footer class="footer">
        <div class="row g-0 justify-content-between align-items-center h-100 mb-3">
          <div class="col-12 col-sm-auto text-center">
          </div>
          <div class="col-12 col-sm-auto text-center">
            <p class="mb-0 text-600">v1.1.0</p>
          </div>
        </div>
      </footer>
    </div>
  </div>
</main>
<script src="{{asset('/dashassets/assets/js/phoenix.js')}}"></script>
<script src="{{asset('dashassets/assets/js/ecommerce-dashboard.js')}}"></script>
</body>

</html>  