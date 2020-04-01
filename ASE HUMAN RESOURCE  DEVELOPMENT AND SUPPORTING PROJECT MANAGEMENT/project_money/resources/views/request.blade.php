@extends('layouts.app')

@section('content')

          <div class="card shadow mb-4">
          <div class="card-header py-3">
          <div class="row no-gutters align-items-center">
              <h4 class="m-0 font-weight-bold text-primary">จาก  :{{$users[0]->name}}</h4><h1>
          </div>
          </div>
          <div class="card-body">    
          <div class="table-responsive">     
                  <h2><P ALIGN=CENTER >ขอยืมเงินจำนวน</h2> 
                  <center>
                  <thead>
                    <tr>
                    <h2><th>จำนวนเงิน</th></h2>
                  </thead>  
                  @foreach($user_spend as $row)
                    <tr>
                    <h2><td>{{$row->amount}}</td></h2>
                      </tr>
                  @endforeach  
                  <form action="getapprove" method="post">
                  <div class="custom-control custom-radio">
                          <input type="radio" name="status"class="custom-control-input" id="g" value="ไม่อนุมัติ">
                          <label class="custom-control-label" for="g">ไม่อนุมัติ</label>
                        </div><div class="custom-control custom-radio">
                          <input type="radio" name="status" class="custom-control-input" id="a" value="อนุมัติ">
                          <label class="custom-control-label" for="a">อนุมัติ </label>
                        </div>
                  <h6><P ALIGN=CENTER >จำนวน</h6> 
                    <P ALIGN=CENTER ><input type="text" name="amount"> บาท</h6><br>
                    <br>
                    <input type="hidden" name="id"class="custom-control-input" value="{{$id}}">
                            <input type="submit" class="btn btn-primary" value="ส่ง">
                            </form>
                  </center>
            </div>
            </div>
            </div>
            
            <div class="card shadow mb-4">
              <div class="card-header py-3">
              <div class="row no-gutters align-items-center">
              <h4 class="m-0 font-weight-bold text-primary">คำร้อง</h4>
                  
                </div>
                </div>

                <div class="card-body">    
                <div class="table-responsive">              
                  <form action="upteproposal" method="post" enctype="multipart/form-data">                   
                  <input type="hidden"name="id_proposal"class="form-control form-control-user" id="withperson" placeholder="ระบุชื่อผู้ร่วมเดินทาง" value = "{{$proposal[0]->id_proposal}}">
                    <p>เรื่อง : ขออนุญาตเดินทางไปราชการภายในประเทศ</p   >                    
                    <p>เรียน : คณบดีคณะวิทยาศาสตร์ประยุกต์และวิศวกกรมศาสตร์</p>
                    
                    <br>
                    <div class="form-group row">
                      <label class="col-sm-6">ด้วยข้าพเจ้า : {{$users[0]->name}}</label>
                      <label class="col-sm-6">ตำแหน่ง :อาจารย์ผู้สอน</label>
                    
                 
                    <div class="col-sm-6 mb-3 mb-sm-0">
                    <label class="my-1 mr-2" for="withperson">พร้อมด้วย</label>
                    <input readonly type="text"name="follower_name"class="form-control form-control-user" id="withperson" placeholder="ระบุชื่อผู้ร่วมเดินทาง" value ="{{$proposal[0]->follower_name}}">
                  </div>
                  <div class="col-sm-6 ">
                    <label class="my-1 mr-2" for="withperson">มีความประสงค์ในการขออนุญาตเดินทางไปราชการเพื่อ</label>
                    <input readonly type="text"name="objective" class="form-control form-control-user" id="withperson" placeholder="ระบุความประสงค์"  value = "{{$proposal[0]->objective}}">
                  </div>
                 
                  <div class="col-sm-8">
                    <label class="my-1 mr-2" for="withperson">ชื่อโครงการ</label>
                    <input readonly type="text"name="project_name" class="form-control form-control-user" id="withperson" placeholder="ระบุชื่อโครงการ"  value = "{{$proposal[0]->project_name}}">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label class="my-1 mr-2" for="withperson">ตั้งแต่วันที่</label>
                    <input readonly type="date"name="Start_date" class="form-control form-control-user" id="withperson" placeholder="ระบุวันที่"  value = "{{$proposal[0]->Start_date}}">
                  </div>
                  <div class="col-sm-6">
                    <label class="my-1 mr-2" for="withperson">ถึงวันที่</label>
                    <input readonly type="date"name="end_date" class="form-control form-control-user" id="withperson" placeholder="ระบุวันที่"  value = "{{$proposal[0]->end_date}}">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label class="my-1 mr-2" for="withperson">ณ</label>
                    <input readonly type="text"name="Place" class="form-control form-control-user" id="withperson" placeholder="ระบุสถานที่"  value = "{{$proposal[0]->Place}}">
                  </div>
                  <div class="col-sm-6">
                    <label class="my-1 mr-2" for="withperson">ซึ่งในการเดินทางครั้งนี้จะเดินทางโดย</label>
                    <input readonly type="text"name="vehicle" class="form-control form-control-user" id="withperson" placeholder="ระบุพาหนะ"  value = "{{$proposal[0]->vehicle}}">
                  </div>
                </div>
                <form>
                @if($proposal[0]->type == 1)
                        <div class="custom-control custom-radio">
                          <input type="radio"name="Status1" class="custom-control-input" id="no" name="Status1" value="1" checked>
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
                    
                  @elseif($proposal[0]->type == 2)
                          <div class="custom-control custom-radio">
                          <input type="radio"name="Status1" class="custom-control-input" id="no" name="Status1" value="1">
                          <label class="custom-control-label" for="no">ไม่เบิกจ่าย</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input type="radio"name="Status1" class="custom-control-input" id="yes" name="Status1" value="2" checked>
                          <label class="custom-control-label" for="yes">เบิกจ่ายโครงการวิจัย</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input type="radio" name="Status1"class="custom-control-input" id="go" name="Status1" value="3">
                          <label class="custom-control-label" for="go">ขออนุมัติไปราชการ</label>
                        </div><div class="custom-control custom-radio">
                          <input type="radio"name="Status1" class="custom-control-input" id="auther" name="Status1" value="4">
                          <label class="custom-control-label" for="auther">อื่นๆ</label>
                        </div>

                  @elseif($proposal[0]->type == 3)
                          <div class="custom-control custom-radio">
                          <input type="radio"name="Status1" class="custom-control-input" id="no" name="Status1" value="1">
                          <label class="custom-control-label" for="no">ไม่เบิกจ่าย</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input type="radio"name="Status1" class="custom-control-input" id="yes" name="Status1" value="2">
                          <label class="custom-control-label" for="yes">เบิกจ่ายโครงการวิจัย</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input type="radio" name="Status1"class="custom-control-input" id="go" name="Status1" value="3" checked>
                          <label class="custom-control-label" for="go">ขออนุมัติไปราชการ</label>
                        </div><div class="custom-control custom-radio">
                          <input type="radio"name="Status1" class="custom-control-input" id="auther" name="Status1" value="4">
                          <label class="custom-control-label" for="auther">อื่นๆ</label>
                        </div> 

                 <!-- @endif ($proposal[0]->type == 4)
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
                          <input type="radio"name="Status1" class="custom-control-input" id="auther" name="Status1" value="4" checked>
                          <label class="custom-control-label" for="auther">อื่นๆ</label>
                        </div>-->
                </form>
                <div class="form-group">
                  <div class="mb-3 mb-sm-0">
                  <label class="my-1 mr-2" for="withperson">ต้องใช้งบประมาณทั้งหมด</label>
                    <input readonly type="text"name="Project_cost" class="form-control form-control-user" id="exampleFirstName" placeholder="ต้องใช้งบประมาณทั้งหมด"  value = "{{$proposal[0]->Project_cost}}">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-6">โดยมีรายละเอียดค่าใช้จ่าย ดังต่อไปนี้</label>
                </div>  
                <div class="form-group">
                <label class="my-1 mr-2" for="withperson">ค่าลงทะเบียน</label>
                      <input readonly type="text"name="registration_fee" class="form-control form-control-user" id="exampleFirstName" placeholder="ค่าลงทะเบียน"  value = "{{$proposal[0]->registration_fee}}">

                <div class="form-group">
                <label class="my-1 mr-2" for="withperson">ค่าเบี้ยเลี้ยง</label>
                      <input readonly type="text"name="Allowances_fee"class="form-control form-control-user" id="exampleFirstName" placeholder="ค่าเบี้ยเลี้ยง"  value = "{{$proposal[0]->Allowances_fee}}">
                       <input readonly type="text" name="Allowances_detail" class="form-control form-control-user"  placeholder="รายละเอียด"  value="{{$proposal[0]->Allowances_detail}}">
                      </td></div>
                  
                      <div class="form-group">
                      <label class="my-1 mr-2" for="withperson">ค่าที่พัก</label>
                        <input readonly type="text" name="Accommodation_fee"class="form-control form-control-user" id="exampleFirstName" placeholder="ค่าที่พัก"  value = "{{$proposal[0]->Accommodation_fee}}"> 
                        <input readonly type="text" name="	Accommodation_deail" class="form-control form-control-user" placeholder="รายละเอียด"  value="{{$proposal[0]->	Accommodation_deail}}">
                
                        <div class="form-group">
                        <label class="my-1 mr-2" for="withperson">ค่าเดินทาง</label>
                         <input readonly type="text"name="Travel_expenses"class="form-control form-control-user" id="exampleFirstName" placeholder=" ค่าเดินทาง"  value = "{{$proposal[0]->Travel_expenses}}"> 
                         <input readonly type="text" name="Travel_deail" class="form-control form-control-user" placeholder="รายละเอียด"  value="{{$proposal[0]->Travel_deail}}">
                        
                         <div class="form-group">
                         <label class="my-1 mr-2" for="withperson">ค่าใช้จ่ายอื่นๆ</label>
                           <input readonly type="text"name="Other_expenses"class="form-control form-control-user" id="exampleFirstName" placeholder="ค่าใช้จ่ายอื่นๆ(ระบุ)"  value = "{{$proposal[0]->Other_expenses}}"> 
                           <input readonly type="text" name="Other_deail" class="form-control form-control-user" placeholder="รายละเอียด" value="{{$proposal[0]->Other_deail}}">
                              </select>
                        </div>
                        </div>
                        </div>
@endsection  
