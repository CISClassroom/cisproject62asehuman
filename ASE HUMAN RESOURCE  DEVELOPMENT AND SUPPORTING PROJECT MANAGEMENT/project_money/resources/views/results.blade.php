@extends('layouts.app')

@section('content')
        <div class="container-fluid">
       
            <div class="card shadow mb-4">
                <div class="card-body">
                  <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 70rem;">
               
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-primary">ความเห็นจากผู้บังคับบัญชา ผศ.ดร.นงราม เหมือนฤทธฺ์</h6>
                    </div>
                    <div class="card-body">
                     
                      <meta name="viewport" content="width=device-width, initial-scale=1">
                      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                      <table class="w3-table w3-striped w3-border">
                        <tr>
                          <th>ชื่อ สกุล</th>
                          <th>สถานะการเบิกจ่ายงบประมาณ</th>
                          <th>จำนวนเงิน</th>
                          <th>โครงการ</th>
                          <th>วันที่อนุมัติ</th>
                        </tr>
                        <tr>
                            <td>อ.ธนภัทร วงษ์คำจันทร์</td>
                            <td>อนุมัติ</td>
                            <td>10,000</td>
                            <td>โครงการอบรมปฏิบัติเพื่อการพัฒนาบุคลากรด้านเทคโนโลยีสารสนเทศ</td>
                            <td>1/2/62</td>
                          </tr>
                       
                      </table><br>
                      
                    </div>
                  </div>
              </div>

      </div>
    </div>
    <h4 class="m-0 font-weight-bold text-primary">คำร้อง</h4>
                  <h8>(1/02/2562)</h8>
                </div>
                <div class="card-body">                  
                  <form action="updatestaff" method="post" enctype="multipart/form-data">                   
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
                          <input type="radio"name="Status1" class="custom-control-input" id="no" name="Status1"  value="no">
                          <label class="custom-control-label" for="no">ไม่เบิกจ่าย</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input type="radio"name="Status1" class="custom-control-input" id="yes" name="Status1"  value="yes">
                          <label class="custom-control-label" for="yes">เบิกจ่ายโครงการวิจัย</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input type="radio" name="Status1"class="custom-control-input" id="go" name="Status1"  value="go">
                          <label class="custom-control-label" for="go">ขออนุมัติไปราชการ</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text"name="note" class="form-control form-control-user" id="exampleLastName" placeholder="รหัสกิจกรรม"  value = "{{$proposal[0]->note}}">
                          </div>
                        <div class="custom-control custom-radio">
                          <input type="radio"name="Status1" class="custom-control-input" id="auther" name="Status1"  value="auther">
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
      
                          <label for="fname">โดยมีรายละเอียดค่าใช้จ่าย ดังต่อไปนี้</label><br>
                          <div class="card-body">
                       
                              <meta name="viewport" content="width=device-width, initial-scale=1">
                              <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                            <table class="w3-table-all">
                         
                              <tr>
                                <td>1.ค่าลงทะเบียน</td>
                                <td>1750 บาท</td>
                            
                              </tr>
                              <tr>
                                <td>2. ค่าเบี้ยเลี้ยง</td>
                                <td>1 คน 5 วัน 250 บาท</td>
                              </tr>
                              <tr>
                                  <td> 3. ค่าที่พัก</td>
                                  <td>1 คน 5 วัน 1000 บาท</td>
                                </tr>
                                <tr>
                                    <td> 4. ค่าเดินทาง</td>
                                    <td>1 คัน 5 วัน 400 บาท</td>
                                  </tr>
                                  <tr>
                                      <td> 5. ค่าใช้จ่ายอื่นๆ(ระบุ)</td>
                                      <td></td>
                                    </tr>
                                    <table class="w3-table-all">
                                        <tr>
                                          <th>รวม : 10,000 บาท</th>
                                        </tr>
                            </table>
                          </div>
                          
                          </select>
                          
                        <!-- Brand Buttons -->
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
                                <tr>
                                    <td>อ.ธนภัทร วงษ์คำจันทร์</td>
                                    <td>งบตนเอง</td>
                                    <td>7,000</td>
                                    <td>1/2/62</td>
                                  </tr>
                                <tr>
                                  <td>อ.ดร. กานดา ศรอินทร์</td>
                                  <td>รอการอนุมัติเงินยืม</td>
                                  <td>3,000</td>
                                  <td>1/2/62</td>
                                </tr>
                               
                              </table><br>
                              
                            </div>
                          </div>
            
                     
                        <!-- Circle Buttons (Default) -->
                       
                       
                     
                    </div>
                    <!--<center>  <h4><p>อนุมัติในการขอยืมเงิน</p></h4>
                        <input type="radio" name="sex" value="male"> อนุมัติ
                        <input type="radio" name="sex" value="female"> ไม่อนุมัติ<br>--> 
                        <center><a href="{{ url('/staff') }}" class="btn btn-primary">
                    <span class="text">
                    ผ่าน
                    </span>
                  </a></center>
                </div> 
              </div>
          </div>

        </div>
      </div>

    </div>
  </div>



      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  @endif

  @endsection
