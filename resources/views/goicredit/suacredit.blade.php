@extends('layout')
@section('main-content')
<h1>Sửa credit</h1>
@if (session('success'))
<div class="alert alert-success">
  <p>{{ session('success') }}</p>
</div>
@endif


<?php
use App\Http\Controllers\Controller;
function Alert($phong){
    echo "<script>alert('".$phong."')</script>";
}
?>
@if(session('erro'))
<?php
Alert("có lỗi xảy ra"); 
?>
@endif

@if(session('them'))
<?php
Alert("thêm thành công"); 
?>
@endif

@if(session('trung'))
<?php
Alert("tên gói đã tồn tại"); 
?>
@endif
@if(session('chong'))
<?php
Alert("không được để chống"); 
?>
@endif

<div class="col-lg-6">
    <div class="card">
        <div class="card-body">
            <form action="{{route('creditupdatecredit',$goicredit->id)}}" method="POST">
              @method('PATCH')
              @csrf 

              <div class="form-group">
                <label for="exampleInputEmail1">Tên Gói</label>
                <input type="text" class="form-control" id="tengoi" name="tengoi"placeholder="tengoi" value="{{$goicredit->tengoi}}">
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Credit</label>
                <input type="number" class="form-control" id="themCredit" name="themCredit"placeholder=" credit" value="{{$goicredit->credit}}">
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Số Tiền</label>
                <input type="number" class="form-control" id="sotien" name="sotien"placeholder="sotien " value="{{$goicredit->sotien}}">
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>

            <button type="submit" class="btn btn-primary waves-effect waves-light">Sửa</button>
        </form>

    </div> <!-- end card-body-->
</div> <!-- end card-->
</div>

@endsection
