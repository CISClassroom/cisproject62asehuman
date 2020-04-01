@extends('layouts.app')

@section('content')
       
        <form action="adduserspend" method="post">
          <h1><P ALIGN=CENTER>ขอยืมเงิน</h1>
          <CENTER>จำนวนเงิน <input type="text" name="amount">บาท<br><br><CENTER>
            <input type="hidden" value="{{$id}}" name="user_id">
            <input type="hidden" value="{{$pid}}" name="id_proposal">
            <input type="hidden" value="รออนุมัติ" name="status">
          <center><input type="submit" class="btn btn-primary" value="ส่ง"><center>
        </form>

  @endsection






