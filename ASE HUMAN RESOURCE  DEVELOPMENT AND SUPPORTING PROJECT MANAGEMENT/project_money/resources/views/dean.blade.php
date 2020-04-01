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
                 
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                  <table class="w3-table-all">
                    <tr>
                      <th>ชื่อ นามสกุล</th>
                      <th>ชื่อโครงการ</th>
                      <th>วันที่</th>
                    </tr>
                    @foreach($proposal as $row)
                    <tr>
                      <td>{{$row->name}}</td>
                      <td><a href="proposaluser.{{$row->id_proposal}}">{{$row->project_name}}</td>
                      <td>{{$row->date}}</a></td>
                    </tr>
                    @endforeach
                  </table>
                </div>
              </div>

            </div>
          </div>
@endsection
