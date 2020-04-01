@extends('layouts.app')

@section('content')
        <div class="container-fluid">
     

          <!-- Content Row -->
          <div class="row">
          </div>

          <!-- Content Row -->

          <div class="row">

              <!-- Approach -->
             
                  <h4 class="m-0 font-weight-bold text-primary">คำร้อง</h4>
                  <h8>(1/02/2562)</h8>
                </div>
                <div class="card-body">                  
                  <form action="updateproposal" method="post" enctype="multipart/form-data">                   
                  <input type="hidden"name="id_proposal"class="form-control form-control-user" id="withperson" placeholder="ระบุชื่อผู้ร่วมเดินทาง" value = "{{$proposal[0]->id_proposal}}">
                    <p>เรื่อง : ขออนุญาตเดินทางไปราชการภายในประเทศ</p   >                    
                    <p>เรียน : คณบดีคณะวิทยาศาสตร์ประยุกต์และวิศวกกรมศาสตร์</p>
                    
                    <br>
                    <div class="form-group row">
                      <label class="col-sm-6">ด้วยข้าพเจ้า : ธนภัทร วงษ์คำจันทร์</label>
                      <label class="col-sm-6">ตำแหน่ง :อาจารย์ผู้สอน</label>
                    
                 
                    <div class="col-sm-6 mb-3 mb-sm-0">
                    <label class="my-1 mr-2" for="withperson">พร้อมด้วย</label>
                    <input type="text"name="follower_name"class="form-control form-control-user" id="withperson" placeholder="ระบุชื่อผู้ร่วมเดินทาง" value ="{{$proposal[0]->follower_name}}">
                  </div>
                  <div class="col-sm-6 ">
                    <label class="my-1 mr-2" for="withperson">มีความประสงค์ในการขออนุญาตเดินทางไปราชการเพื่อ</label>
                    <input type="text"name="objective" class="form-control form-control-user" id="withperson" placeholder="ระบุความประสงค์"  value = "{{$proposal[0]->objective}}">
                  </div>
                 
                  <div class="col-sm-8">
                    <label class="my-1 mr-2" for="withperson">ชื่อโครงการ</label>
                    <input type="text"name="project_name" class="form-control form-control-user" id="withperson" placeholder="ระบุชื่อโครงการ"  value = "{{$proposal[0]->project_name}}">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label class="my-1 mr-2" for="withperson">ตั้งแต่วันที่</label>
                    <input type="date"name="Start_date" class="form-control form-control-user" id="withperson" placeholder="ระบุวันที่"  value = "{{$proposal[0]->Start_date}}">
                  </div>
                  <div class="col-sm-6">
                    <label class="my-1 mr-2" for="withperson">ถึงวันที่</label>
                    <input type="date"name="end_date" class="form-control form-control-user" id="withperson" placeholder="ระบุวันที่"  value = "{{$proposal[0]->end_date}}">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label class="my-1 mr-2" for="withperson">ณ</label>
                    <input type="text"name="Place" class="form-control form-control-user" id="withperson" placeholder="ระบุสถานที่"  value = "{{$proposal[0]->Place}}">
                  </div>
                  <div class="col-sm-6">
                    <label class="my-1 mr-2" for="withperson">ซึ่งในการเดินทางครั้งนี้จะเดินทางโดย</label>
                    <input type="text"name="vehicle" class="form-control form-control-user" id="withperson" placeholder="ระบุพาหนะ"  value = "{{$proposal[0]->vehicle}}">
                  </div>
                </div>
                <div class="form-group">
                  <div class="mb-3 mb-sm-0">
                        <div class="custom-control custom-radio">
                          <input type="radio"name="Status1" class="custom-control-input" id="no" name="Status1" value="no">
                          <label class="custom-control-label" for="no">ไม่เบิกจ่าย</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input type="radio"name="Status1" class="custom-control-input" id="yes" name="Status1" value="yes">
                          <label class="custom-control-label" for="yes">เบิกจ่ายโครงการวิจัย</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input type="radio" name="Status1"class="custom-control-input" id="go" name="Status1" value="go">
                          <label class="custom-control-label" for="go">ขออนุมัติไปราชการ</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text"name="note" class="form-control form-control-user" id="exampleLastName" placeholder="รหัสกิจกรรม"  value = "{{$proposal[0]->note}}">
                          </div>
                        <div class="custom-control custom-radio">
                          <input type="radio"name="Status1" class="custom-control-input" id="auther" name="Status1" value="auther">
                          <label class="custom-control-label" for="auther">อื่นๆ</label>
                        </div>
                          <div class="col-sm-10">
                            <input type="text"name="note" class="form-control form-control-user" id="exampleLastName" placeholder="(อื่นๆ)หมายเหตุ"  value = "{{$proposal[0]->note}}">
                          </div>
                  </div>                          
                </div>
                <div class="form-group">
                  <div class="mb-3 mb-sm-0">
                  <label class="my-1 mr-2" for="withperson">ต้องใช้งบประมาณทั้งหมด</label>
                    <input type="text"name="Project_cost" class="form-control form-control-user" id="exampleFirstName" placeholder="ต้องใช้งบประมาณทั้งหมด"  value = "{{$proposal[0]->Project_cost}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-6">โดยมีรายละเอียดค่าใช้จ่าย ดังต่อไปนี้</label>
                </div>  
                <div class="form-group">
                <label class="my-1 mr-2" for="withperson">ค่าลงทะเบียน</label>
                      <input type="text"name="registration_fee" class="form-control form-control-user" id="exampleFirstName" placeholder="ค่าลงทะเบียน"  value = "{{$proposal[0]->registration_fee}}">
                      <div class = "container">
                     
                      <form action="/newfile" enctype="multipart/form-data" method="post">
                        <div class = "form-group"><input type="file" class = "form-control" name="fileUpload"></div>
                        {{csrf_field()}}
                        <div class = "form-group"><input type="submit" class = "btn btn-primary" value="Upload new file"></div>
                      </form>
                    </div>

                <div class="form-group">
                <label class="my-1 mr-2" for="withperson">ค่าเบี้ยเลี้ยง</label>
                      <input type="text"name="Allowances_fee"class="form-control form-control-user" id="exampleFirstName" placeholder="ค่าเบี้ยเลี้ยง"  value = "{{$proposal[0]->Allowances_fee}}">
                       <input type="text" name="Allowances_detail" class="form-control form-control-user"  placeholder="รายละเอียด"  value="{{$proposal[0]->Allowances_detail}}">
                      </td></div>
                      <div class = "container">
                     
                      <form action="/newfile" enctype="multipart/form-data" method="post">
                        <div class = "form-group"><input type="file" class = "form-control" name="fileUpload"></div>
                        {{csrf_field()}}
                        <div class = "form-group"><input type="submit" class = "btn btn-primary" value="Upload new file"></div>
                      </form>
                    </div>

                      <div class="form-group">
                      <label class="my-1 mr-2" for="withperson">ค่าที่พัก</label>
                        <input type="text" name="Accommodation_fee"class="form-control form-control-user" id="exampleFirstName" placeholder="ค่าที่พัก"  value = "{{$proposal[0]->Accommodation_fee}}"> 
                        <input type="text" name="	Accommodation_deail" class="form-control form-control-user" placeholder="รายละเอียด"  value="{{$proposal[0]->	Accommodation_deail}}">
                        <div class = "container">
                        
                        <form action="/newfile" enctype="multipart/form-data" method="post">
                          <div class = "form-group"><input type="file" class = "form-control" name="fileUpload"></div>
                          {{csrf_field()}}
                          <div class = "form-group"><input type="submit" class = "btn btn-primary" value="Upload new file"></div>
                        </form>
                      </div>

                        <div class="form-group">
                        <label class="my-1 mr-2" for="withperson">ค่าเดินทาง</label>
                         <input type="text"name="Travel_expenses"class="form-control form-control-user" id="exampleFirstName" placeholder=" ค่าเดินทาง"  value = "{{$proposal[0]->Travel_expenses}}"> 
                         <input type="text" name="Travel_deail" class="form-control form-control-user" placeholder="รายละเอียด"  value="{{$proposal[0]->Travel_deail}}">
                         <div class = "container">
                          
                          <form action="/newfile" enctype="multipart/form-data" method="post">
                            <div class = "form-group"><input type="file" class = "form-control" name="fileUpload"></div>
                            {{csrf_field()}}
                            <div class = "form-group"><input type="submit" class = "btn btn-primary" value="Upload new file"></div>
                          </form>
                        </div>

                         <div class="form-group">
                         <label class="my-1 mr-2" for="withperson">ค่าใช้จ่ายอื่นๆ</label>
                           <input type="text"name="Other_expenses"class="form-control form-control-user" id="exampleFirstName" placeholder="ค่าใช้จ่ายอื่นๆ(ระบุ)"  value = "{{$proposal[0]->Other_expenses}}"> 
                           <input type="text" name="Other_deail" class="form-control form-control-user" placeholder="รายละเอียด" value="{{$proposal[0]->Other_deail}}">
                           <div class = "container">
                         
                          <form action="/newfile" enctype="multipart/form-data" method="post">
                            <div class = "form-group"><input type="file" class = "form-control" name="fileUpload"></div>
                            {{csrf_field()}}
                            <div class = "form-group"><input type="submit" class = "btn btn-primary" value="Upload new file"></div>
                          </form>
                        </div>
                        </div>
                            
                              </select>
                              <div class="card shadow mb-4">
                                <div class="card shadow mb-4">
                                  <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">ใช้งบพัฒนาตนเองจาก</h6>
                                  </div>
                                  <div class="card-body">
                                   
                                    <meta name="viewport" content="width=device-width, initial-scale=1">
                                    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                                    <table class="w3-table w3-striped w3-border">
                                      <tr>
                                        <th>ชื่อ นามสกุล</th>
                                        <th>สถานะ</th>
                                        <th>จำนวนเงิน</th>
                                        <th>วันที่</th>
                                      </tr>
                                      @foreach($proposal as $row)
                                      <tr>
                                       <td>{{$row->follower_name}}</td>
                                      <td>{{$row->Status}}</td>
                                      <td>{{$row->Project_cost}}</td>
                                      <td>{{$row->date}}</td>
                      
                                      </tr>
                                      @endforeach
                                    
                                    </table>
                                   
                                </div> 
                                  <a href="{{ url('/') }}" class="btn btn-primary">
                    <span class="text">
                     ผ่าน
                    </span>
                  </a>
              </div>
              </div>

                        </div><center>  
                        @if(Auth::user()->role==3)
                          <h4><p>อนุมัติการเบิกจ่ายงบประมาณ</p></h4>
                          <button class="btn btn-primary" type="submit" > ผ่าน </button>
                        @endif
                  </div>
                  </div>
                  </div>
                  </form>
                 </div>
                </div>
               </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
           
          </div>
        </div>
      </footer>
    </div>
  </div>
  @endsection

