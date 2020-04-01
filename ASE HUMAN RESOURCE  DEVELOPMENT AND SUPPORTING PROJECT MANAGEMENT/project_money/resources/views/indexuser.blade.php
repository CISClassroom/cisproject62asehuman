@extends('layouts.app')

@section('content')
        <div class="container-fluid">
          
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ Auth::user()->name }}</h1>
          </div>

            <div class="col-xl-12 col-md-12 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">ยอดเงินคงเหลือ (Money)</div>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                    @foreach($budget as $row)
                    <h2><td>{{$row->amount}}</td></h2>
                      </tr>
                    @endforeach 
                          </div>
                          <div class="col">
                            <div class="progress progress-sm mr-2">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row no-gutters align-items-center">
                    <img style="width: 80rem;">
                    <h6 class="m-0 font-weight-bold text-primary">การแจ้งเตือนใหม่</h6>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th>ชื่อ</th>
                            <th>จำนวนเงิน</th>
                            <th>ชื่อโครงการ</th>
                            <th>สถานะ</th> 
                      </thead>
                      <tbody>
                      @foreach($user_spend as $row)
                        <tr>
                        <td>{{$row->name}}</td>
                        <td>{{$row->amount}}</td>
                        <td>{{$row->project_name}}</td>
                      
                        @if($row->status =="รออนุมัติ")
                       <td><a href="request.{{$row->id}}"><input type="submit" class="btn btn-primary" value="อนุมัติ"></td>
                        @else
                      <td>{{$row->status}}</td>
                      @endif
                        </tr>
                      @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
           

            </div>
            


            <!-- DataTales Example -->
          <div class="card shadow mb-3">
             <div class="card-header py-3">
                <div class="row no-gutters align-items-center">
                <img style="width: 80rem;">
                <h6 class="m-0 font-weight-bold text-primary">โครงการของฉัน</h6>
            </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ชื่อโครงการ</th>
                      <th>งบประมาณ</th>
                      <th>วันที่</th>
                      <th>สถานะ</th>
                  </thead>    
                  <tbody>
                 @foreach($proposal as $row)
                        <tr>
                        <td><a href="proposaluser.{{$row->id_proposal}}">{{$row->project_name}}</td>
                        <td>{{$row->Project_cost}}</td>
                        <td>{{$row->date}}</a></td>
                        <td>{{ $row->Status }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
              </div>
            </div>
          </div>     
            </div>        
 @endsection