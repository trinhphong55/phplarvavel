@extends('layout')
@section('main-content')
<h1>Thêm Câu Hỏi</h1>
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
Alert("thêm thanh cong"); 
?>
@endif

<div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{route('creditthemcredit')}}" method="POST">
                                      @csrf


                                            
                                

                                       <div class="form-group">
                                        <label for="exampleInputEmail1">Tên Gói</label>
                                        <input type="text" class="form-control" id="tengoi" name="tengoi"placeholder="tengoi">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>

                                       <div class="form-group">
                                        <label for="exampleInputEmail1">Credit</label>
                                        <input type="number" class="form-control" id="themCredit" name="themCredit"placeholder=" credit">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>

                                         <div class="form-group">
                                        <label for="exampleInputEmail1">Số Tiền</label>
                                        <input type="number" class="form-control" id="sotien" name="sotien"placeholder="sotien ">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>

                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Thêm</button>
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                    
@endsection
