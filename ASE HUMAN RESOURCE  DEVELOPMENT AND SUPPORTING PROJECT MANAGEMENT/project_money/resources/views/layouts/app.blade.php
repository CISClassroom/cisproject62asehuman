<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>หน้าหลัก</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="indexuser">
        <div class="sidebar-brand-icon rotate-n-12">
          <img src="https://upload.wikimedia.org/wikipedia/th/8/80/Logo-ASE_KKU.png" width="40"height="35">
        </div>
        <div class=>ระบบบริหารจัดการโครงการสนับสนุนพัฒนาบุคลากร</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - หน้าหลัก -->
      <li class="nav-item active">
        <a class="nav-link" href="indexuser">
          <i class=""></i>
          <span></span></a>
      </li>
      @guest
    
      @else
       
          <!-- Heading -->
          <div class="sidebar-heading">
          user
          </div>
          <li class="nav-item">
              <a class="nav-link" href="indexuser">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>แผนพัฒนาบุคลากรของฉัน</span>
              </a>
            </li>

             <!-- Nav Item - Pages Collapse Menu -->
   
        <li class="nav-item">
          <a class="nav-link" href="newplan">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>สร้างแผนพัฒนาบุคลากร</span>
          </a>
      </li>

      @if (Auth::user()->role==2)
     <hr class="sidebar-divider d-none d-md-block">
     <div class="sidebar-heading">
staff</div>
        <li class="nav-item">
          <a class="nav-link" href="staff">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>หน้าหลักผู้ดูแลระบบ</span>
          </a>
      </li>

        <li class="nav-item">
          <a class="nav-link" href="budget">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>งบพัฒนาบุคลากร</span>
          </a>
      </li>

        <li class="nav-item">
          <a class="nav-link" href="charts1">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>สรุปสถิติ</span>
          </a>
      </li>

        <!-- <li class="nav-item">
          <a class="nav-link" href="results">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>ผลการยื่นเรื่อง</span>
          </a>
      </li> -->
      @endif
      @if (Auth::user()->role==3)
      <div class="sidebar-heading">
        <hr class="sidebar-divider d-none d-md-block">
        dean
          <li class="nav-item">
            <li class="nav-item">
              <a class="nav-link" href="dean">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>หน้าหลักคณบดี</span>
              </a>
          </li>
      @endif
      @endguest
      </ul>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              
              <div class="input-group-append">
                
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

 

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
              @else

              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
              </a>

              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                   <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    {{ __('Logout') }}
                </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
              </form>
              </div>  
            @endguest
            </li>
            </ul>
           </nav>

        <main class="py-4">
           @yield('content')
        </main>

</div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <div class="modal-content">
  <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
  </button>
  </div>
    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
    <div class="modal-footer">
  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="login.html">Logout</a>
  </div>
  </div>
  </div>
  </div>
  
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
  
  
</body>

</html>