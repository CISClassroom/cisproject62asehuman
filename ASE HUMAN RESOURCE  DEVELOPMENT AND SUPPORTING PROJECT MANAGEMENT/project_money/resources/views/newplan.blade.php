@extends('layouts.app')

@section('content')
<body id="page-top">
            <div class="topbar-divider d-none d-sm-block"></div>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          
          <div class="row">

            <div class="col-lg-12">

              <!-- Circle Buttons -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                <h1 class="h3 mb-4 text-gray-800">สร้างแผนพัฒนาบุคลากร</h1>
          
                </div>
                <div class="card-body">                  
                  <form action="postform" method="post" enctype="multipart/form-data">                   
                    
                    <p>เรื่อง : ขออนุญาตเดินทางไปราชการภายในประเทศ</p   >                    
                    <p>เรียน : คณบดีคณะวิทยาศาสตร์ประยุกต์และวิศวกกรมศาสตร์</p>
                    
                    <br>
                    <div class="form-group row">
                      <label class="col-sm-6">ด้วยข้าพเจ้า :{{ Auth::user()->name }}</label>
                      <label class="col-sm-6">ตำแหน่ง :อาจารย์ผู้สอน</label>
                    
                 
                    <div class="col-sm-6 mb-3 mb-sm-0">
                    <label class="my-1 mr-2" for="withperson">พร้อมด้วย</label>
                    <input type="text"name="follower_name"class="form-control form-control-user" id="withperson"id="withperson" placeholder="ระบุชื่อผู้ร่วมเดินทาง">
                  </div>
                  <div class="col-sm-6 ">
                    <label class="my-1 mr-2" for="withperson">มีความประสงค์ในการขออนุญาตเดินทางไปราชการเพื่อ *</label>
                    <input type="text"name="objective" class="form-control form-control-user" id="withperson" placeholder="ระบุความประสงค์">
                  </div>
                 
                  <div class="col-sm-6">
                    <label class="my-1 mr-2" for="withperson">ชื่อโครงการ *</label>
                    <input type="text"name="project_name" class="form-control form-control-user" id="withperson" placeholder="ระบุชื่อโครงการ">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label class="my-1 mr-2" for="withperson">ตั้งแต่วันที่ *</label>
                    <input type="date"name="Start_date" class="form-control form-control-user" id="withperson" placeholder="ระบุวันที่">
                  </div>
                  <div class="col-sm-6">
                    <label class="my-1 mr-2" for="withperson">ถึงวันที่ *</label>
                    <input type="date"name="end_date" class="form-control form-control-user" id="withperson" placeholder="ระบุวันที่">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label class="my-1 mr-2" for="withperson">ณ *</label>
                    <input type="text"name="Place" class="form-control form-control-user" id="withperson" placeholder="ระบุสถานที่">
                  </div>
                  <div class="col-sm-6">
                    <label class="my-1 mr-2" for="withperson">ซึ่งในการเดินทางครั้งนี้จะเดินทางโดย *</label>
                    <input type="text"name="vehicle" class="form-control form-control-user" id="withperson" placeholder="ระบุพาหนะ">
                  </div>
                </div>
                <div class="form-group">
                  <div class="mb-3 mb-sm-0">
                        <label class="my-1 mr-2" for="withperson">ระบุประเภท *</label>
                        <div class="custom-control custom-radio">
                          <input type="radio"name="Status1" class="custom-control-input" id="no" name="Status1" value="1">
                          <label class="custom-control-label" for="no">ไม่เบิกจ่าย</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input type="radio"name="Status1" class="custom-control-input" id="yes" name="Status1" value="2">
                          <label class="custom-control-label" for="yes">เบิกจ่ายโครงการวิจัย</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input type="radio" name="Status1"class="custom-control-input" id="go" name="Status1" value="3">
                          <label class="custom-control-label" for="go">ขออนุมัติไปราชการ</label>
                        </div><div class="custom-control custom-radio">
                          <input type="radio"name="Status1" class="custom-control-input" id="auther" name="Status1" value="4">
                          <label class="custom-control-label" for="auther">อื่นๆ</label>
                        </div>
                          <div class="col-sm-12">
                            <input type="text"name="note" class="form-control form-control-user" id="exampleLastName" placeholder="(อื่นๆ)หมายเหตุ">
                          </div>
                  </div>                          
                </div>
                <div class="form-group">
                  <div class="mb-3 mb-sm-0">
                  <label class="my-1 mr-2" for="withperson">ต้องใช้งบประมาณทั้งหมด</label>
                    <input type="text"name="Project_cost" class="form-control form-control-user" id="exampleFirstName" placeholder="ระบุงบประมาณทั้งหมด">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-6">โดยมีรายละเอียดค่าใช้จ่าย ดังต่อไปนี้</label>
                </div>  
                <div class="form-group">
                <label class="my-1 mr-2" for="withperson">ค่าลงทะเบียน</label>
                      <input type="number"name="registration_fee" class="form-control form-control-user" id="exampleFirstName" placeholder="ค่าลงทะเบียน"><br>
                      
                      <div class = "container">
                        <div class = "form-group"><input type="file" class = "form-control" name="file"></div>
                   
                    </div>

                <div class="form-group">
                <label class="my-1 mr-2" for="withperson">ค่าเบี้ยเลี้ยง</label>
                      <input type="number" name="Allowances_fee"class="form-control form-control-user" id="exampleFirstName" placeholder="ค่าเบี้ยเลี้ยง"> 
                      <textarea type="text" name="Allowances_detail" class="form-control form-control-user"  placeholder="รายละเอียด"  value="{{old('Allowances_detail')}}"></textarea>
                      </td></div>
                      <div class = "container">

                        <div class = "form-group"><input type="file" class = "form-control" name="file_Allowances"></div>
                
                    </div>

                      <div class="form-group">
                      <label class="my-1 mr-2" for="withperson">ค่าที่พัก</label>
                        <input type="number" name="Accommodation_fee"class="form-control form-control-user" id="exampleFirstName" placeholder="ค่าที่พัก"> 
                        <textarea type="text" name="Accommodation_deail" class="form-control form-control-user" placeholder="รายละเอียด"  value="{{old('Accommodation_detail')}}"></textarea><br> 
                        <div class = "container">
 
                        
                          <div class = "form-group"><input type="file" class = "form-control" name="file_Accommodation"></div>
                         
                      </div>

                        <div class="form-group">
                        <label class="my-1 mr-2" for="withperson">ค่าเดินทาง</label>
                         <input type="number" name="Travel_expenses"class="form-control form-control-user" id="exampleFirstName" placeholder=" ค่าเดินทาง"> 
                         <textarea type="text" name="Travel_deail" class="form-control form-control-user" placeholder="รายละเอียด"  value="{{old('Travel_deail')}}"></textarea><br>
                         <div class = "container">
    
                            <div class = "form-group"><input type="file" class = "form-control" name="file_Travel"></div>
               
                        </div>

                         <div class="form-group">
                         <label class="my-1 mr-2" for="withperson">ค่าใช้จ่ายอื่นๆ</label>
                           <input type="number" name="Other_expenses"class="form-control form-control-user" id="exampleFirstName" placeholder="ค่าใช้จ่ายอื่นๆ(ระบุ)"> 
                           <textarea type="text" name="Other_deail" class="form-control form-control-user" placeholder="รายละเอียด" value="{{ old('Other_detail') }}"></textarea><br>
                           <div class = "container">

                            <div class = "form-group"><input type="file" class = "form-control" name="file_Other"></div>
                 
                        </div>
                             
                    </div>
                  
              
                  <center>
                  <div class="my-2">
                  <a href="#" class="btn btn-success btn-icon-split">
                    <a href="borrow"><button>ยืมเงิน</button></a>                  
                  </div></center> 
              </div>
            </div>
          </div>      
          </div>  
          </div>
          </form>
          </div>

        </div>
@endsection
