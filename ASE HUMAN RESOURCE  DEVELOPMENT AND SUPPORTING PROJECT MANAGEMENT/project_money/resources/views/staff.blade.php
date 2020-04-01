@extends('layouts.app')

@section('content')
        <div class="container-fluid">

          <!-- Content Row -->
          <div class="row">
          </div>

          <!-- Content Row -->

          <div class="row">

              <!-- Approach -->
              <div class="text-center">
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 70rem;">
              
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">หน้าหลัก</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                      <th>ชื่อ นามสกุล</th>
                      <th>เงินคนเหลือ</th>
                      <th>ชื่อโครงการ</th>
                      <th>วันที่</th>
                      <th>สถานะ</th>
                     
                    </tr>
                    @foreach($proposal as $row)
                    <tr>
                      <td>{{$row->name}}</td>
                      <td>{{$row->Project_cost}}</td>
                      <td><a href="proposal.{{$row->id_proposal}}">{{$row->project_name}}</td>
                      <td>{{$row->date}}</a></td>
                      <td>{{$row->dean_aproval_result}}</td>
                      
                    </tr>
                    @endforeach
                    
                  </table>
                </div>
              </div>

            </div>
          </div>

        </div>
@endsection
