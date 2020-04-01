
@extends('layouts.app')

@section('content')
<body id="page-top">
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">งบประมาณพัฒนาบุคลากร</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">ตารางปีงบประมาณพัฒนาบุคลากร</h6>
            </div>
          <div class="card-body">
          <div class="table-responsive">
              
              @if(\Session::has('success'))
          <div class="alert alert-success">
              <p>{{ \Session::get('success') }}</p>
          </div>
              @endif
          <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" >
              <thead>
              <tr>
                  <th>ปีงบประมาณ</th>
                  <th>งบประมาณ</th>
              </tr>
              </thead>
              <tbody>
              @foreach($budget as $row)
              <tr>
                      <td>{{$row->year}}</td>
                      <td>{{$row->amount}}</td>
                      </tr>
                    @endforeach
              </tbody>
              </table>
          </div>
          </div>
          </div>
      
      </div>
      </div>


      <form action="addbudget" method="post" enctype="multipart/form-data">            
       <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">การจัดการงบประมาณพัฒนาบุคลากร</h6>
          </div>
        
            <div class="card-body">
                <div class="form-group row">   
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label class="my-1 mr-2" for="withperson">งบประมาณ</label>
                    <input type="text"name="amount" class="form-control form-control-user" id="withperson" placeholder="ระบุงบประมาณ"  value ="{{$budget[0]->amount}}" >
                  </div>

                  <div class="col-sm-6">
                    <label class="my-1 mr-2" for="withperson">ปีงบประมาณ</label>                                                                                     
                    <input type="text"name="year" class="form-control form-control-user" id="withperson" placeholder="ระบุปีงบประมาณ" value ="{{$budget[0]->year}}" >
                   
                  </div>
                </div>
                <h6 align="right"><input type="submit" value=" บันทึกงบประมาณ"></h6>
          </div>
          </div>
          </div>
          </form>

</script>
  </div>
@endsection