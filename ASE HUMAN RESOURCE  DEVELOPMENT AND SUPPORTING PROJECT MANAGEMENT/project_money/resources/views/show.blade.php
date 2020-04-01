@extends('layouts.app')

@section('content')
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">สร้างแผนพัฒนาบุคลากร</h1>
          <h8>(1/02/2562)</h8>
          <div class="row">

            <div class="col-lg-12">

              <!-- Circle Buttons -->
              
                <div class="card-body">
                    <div class="card-body">

                        <p>ส่วนงาน คณะวิทยาศาสตร์ประยุกต์และวิศวกรรมศาสตร์ วิทยาเขตหนองคาย โทร 49123</p>
                        <form>
                                <label for="lname">ชื่อโครงการ : โครงการอบรมความรู้วิชาเฉพาะทางคอมพิวเตอร์หลักสูตรการออกแบบ</label><br>
                                <label for="lname">เรื่อง : ขออนุญาตเดินทางไปราชการภายในประเทศ</label><br>
                          
                          <label for="fname">เรียน : คณบดีคณะวิทยาศาสตร์ประยุกต์และวิศวกกรมศาสตร์</label><br>
      
                          <label for="lname">ด้วยข้าพเจ้า : ธนภัทร วงษ์คำจันทร์</label><br>
      
                          <label for="fname">ตำแหน่ง :อาจารย์ผู้สอน</label><br>
                          <label for="fname">พร้อมด้วย</label><br>
                         
                          <label for="fname">มีความประสงค์ในการขออนุญาตเดินทางไปราชการเพื่อ : ศึกษาหาความรู้และการสื้อสารอย่างสร้างสรรค์ในองค์กร</label><br>
                         
                          <label for="fname">ตั้งแต่วันที่ 15 กุมภาพันธุ์ พ.ศ. 2562</label><br>
              
                          <label for="fname">ถึงวันที่ 20 กุมภาพันธุ์ พ.ศ. 2562</label><br>
                       
                          <label for="fname">ณ โรงเรียนสาธิต</label><br>
                            
                          <label for="fname">ซึ่งในการเดินทางครั้งนี้จะเดินทางโดย : รถยนต์</label><br>

                          <label for="fname">งบประมาณรายได้คณะ กิจกรรม/โครงการ : งบพัฒนาบุคลากร</label> 
                <label for="fname">รหัสกิจกรรม : 120863</label>
      
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
                          </div>

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
                  <a href="{{ url('/borrow') }}" class="btn btn-primary">
                    <span class="icon text-white-50">
                      <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">
                      เพิ่ม
                    </span>
                  </a>
                </div>
              </div>

            </div>
          </div>
        
        </div>
              </div>
            </div>


              <div class="card shadow mb-4">
                
                <div class="card-body">
                  <div class="my-2"></div>
                  <a href="{{ url('/indexuser') }}" class="btn btn-primary">
                    <span class="text">
                    บันทึกและยื่นคำร้อง
                    </span>
                  </a>

              </div>
            </div>
        </div>
@endsection