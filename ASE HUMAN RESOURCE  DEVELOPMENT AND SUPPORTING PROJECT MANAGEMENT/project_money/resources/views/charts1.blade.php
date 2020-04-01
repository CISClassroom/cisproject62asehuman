@extends('layouts.app')

@section('content')
 <h1 class="h3 mb-2 text-gray-800">สถิติงบประมาณข้อมูลรายจ่ายประจำปี 2562</h1> 

            <div class="col-xl-8 col-lg-7">
              <!-- Area Chart -->
              <div class="card shadow mb-4">
                
                <div class="card-body">
                  
                  <hr>
               
                </div>
                 <!-- Page Heading -->
          <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ปี</th>
                      <th>งบประมาณที่ใช้</th>
                      <th>จำนวนโครงการ</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    <tr>
                      <td>ปี 2562</td>
                          <td>100,000</td>
                          <td>20,000</td>
                          
                  </tbody>
                </table>
               
              </div>
            </div>
              </div>
            </div>
              <!-- Pie Chart -->
              <div class="col-xl-4 col-lg-5">
                  <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                   
                      
                    </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
        </div>
      </footer>
      <!-- End of Footer -->

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
  <script src="js/demo/chart-bar-demo.js"></script>

</body>

</html>
@endsection