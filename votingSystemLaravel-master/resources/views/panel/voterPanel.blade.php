<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{ URL::asset('/asset/home/assets/img/favicon.png')}}" rel="icon">
  <title>User - HomePage</title>
  <link href="{{ URL::asset('/asset/user/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{ URL::asset('/asset/user/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{ URL::asset('/asset/user/css/ruang-admin.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">
    <div id="wrapper">
      <!-- Sidebar -->
      <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/voterPanel">
          <div class="sidebar-brand-icon">
            <img src="{{ URL::asset('/asset/user/img/voter.png')}}">
          </div>
          <div class="sidebar-brand-text mx-3">Voter</div>
        </a>
        <hr class="sidebar-divider my-0">
        <li class="nav-item active">
          <a class="nav-link" href="/voterPanel">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
          Features
        </div>
        
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
            aria-controls="collapseForm">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>Vote</span>
          </a>
          <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Forms</h6>
              <a class="collapse-item" href="/vote">New Vote</a>
               {{--  <a class="collapse-item" href="form_advanceds.html">Form Advanceds</a>--}}
            </div>
          </div>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="ui-colors.html">
            <i class="fas fa-fw fa-palette"></i>
            <span>Results</span>
          </a>
        </li>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
          Others
        </div>
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
            aria-controls="collapsePage">
            <i class="fas fa-fw fa-columns"></i>
            <span>Pages</span>
          </a>
          <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Pages</h6>
              <a class="collapse-item" href="/voterLogin">Login</a>
              <a class="collapse-item" href="/voterSignUp">Register</a>
              
            </div>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span>
          </a>
        </li>
       
      </ul>
      <!-- Sidebar -->
      <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
          <!-- TopBar -->
          <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
            <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>
            <ul class="navbar-nav ml-auto">
            
              <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-bell fa-fw"></i>
                  <span class="badge badge-danger badge-counter">3+</span>
                </a>
                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                  aria-labelledby="alertsDropdown">
                  <h6 class="dropdown-header">
                    Alerts Center
                  </h6>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                      <div class="icon-circle bg-primary">
                        <i class="fas fa-file-alt text-white"></i>
                      </div>
                    </div>
                    <div>
                      <div class="small text-gray-500">April 04, 2022</div>
                      <span class="font-weight-bold">An update coming!</span>
                    </div>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                      <div class="icon-circle bg-success">
                        <i class="fas fa-donate text-white"></i>
                      </div>
                    </div>
                    <div>
                      <div class="small text-gray-500">April 05, 2022</div>
                      The Sun team VS the Moon team election will be starting
                    </div>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                      <div class="icon-circle bg-warning">
                        <i class="fas fa-exclamation-triangle text-white"></i>
                      </div>
                    </div>
                    <div>
                      <div class="small text-gray-500">April 07, 2022</div>
                      The voting result will be published
                    </div>
                  </a>
                  
                </div>
              </li>
             
              
              <div class="topbar-divider d-none d-sm-block"></div>
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <img class="img-profile rounded-circle" src="{{ URL::asset('/asset/user/img/boy.png')}}" style="max-width: 60px">
                  <span class="ml-2 d-none d-lg-inline text-white small">{{ session()->get('voterid')->voterid }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                  </a>
                  
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                  </a>
                </div>
              </li>
            </ul>
          </nav>
          <!-- Topbar -->
  
          <!-- Container Fluid-->
          <div class="container-fluid" id="container-wrapper">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
              </ol>
            </div>
  
            <!-- Row -->
          <div class="row">
            <!-- Area Charts -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">CountDown</h6>
                </div>
                <div class="card-body">



                  <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                  </div>
                  <hr>












                  
                </div>
              </div>
            </div>
           
  
            <!-- Modal Logout -->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
              aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p>Are you sure you want to logout?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                    <a href="{{route('logout')}}" class="btn btn-primary">Logout</a>
                  </div>
                </div>
              </div>
            </div>
  
          </div>
          <!---Container Fluid-->
        </div>
        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - developed by
                <b><a href="#" target="_blank">DIU Thesis Members</a></b>
              </span>
            </div>
          </div>
  
          
        </footer>
        <!-- Footer -->
      </div>
    </div>
  
    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
  

  <script src="{{ URL::asset('/asset/user/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ URL::asset('/asset/user/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ URL::asset('/asset/user/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{ URL::asset('/asset/user/js/ruang-admin.min.js')}}"></script>
  <!-- Page level plugins -->
  <script src="{{ URL::asset('/asset/user/vendor/chart.js/Chart.min.js')}}"></script>
  <!-- Page level custom scripts -->
  <script src="{{ URL::asset('/asset/user/js/demo/chart-area-demo.js')}}"></script>
  <script src="{{ URL::asset('/asset/user/js/demo/chart-pie-demo.js')}}"></script>
  <script src="{{ URL::asset('/asset/user/js/demo/chart-bar-demo.js')}}"></script>
</body>

</body>

</html>
