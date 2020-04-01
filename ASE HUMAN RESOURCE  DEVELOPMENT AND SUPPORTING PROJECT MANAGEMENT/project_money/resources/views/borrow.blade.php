@extends('layouts.app')

@section('content')
        <div class="container-fluid">

         

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">รายชื่อผู้มียอดเงินคงเหลือ</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ชื่อ</th>
                      <th>เงินคงเหลือ</th>
                      <th>ดำเนินการ</th>
                    </tr>
                  </thead>
                    @foreach($users as $user)
                          <tr>
                          <td>{{$user->name}}</a></td>
                          <td>{{$amount}}</a></td>
                            <td><a href="inbox&u={{$user->id}}&p={{$id_proposal}}"> ขอยืม</a></td>                    
                          </tr>
                    @endforeach
                  </tbody>
                    </table>                   
                 
                </table>
                <a href="{{ url('/indexuser') }}" class="btn btn-primary">
                    <span class="text">
                      เสร็จสิ้น
                    </span>
                  </a> 
              </div>
            </div>
          </div>

        </div>
@endsection