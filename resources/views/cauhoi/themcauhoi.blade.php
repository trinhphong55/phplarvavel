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

  @if($errors->any())

<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
    <ul>

        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        
        @endforeach
        
    </ul>

</div>
@endif
<div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{route('cauhoithemcauhoi')}}" method="POST">
                                      @csrf


                                            
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">ID Lĩnh Vực</label>
                                        <select class="custom-select " name="idcauhoi">
                                   @foreach($wcauhoi as $wcauhoi)         <option selected=""><font style="vertical-align: inherit;">{{ $wcauhoi->tenlinhvuc }}<font style="vertical-align: inherit;"></font></font></option> @endforeach      
                                        </select>    
                                    </div>

                                       <div class="form-group">
                                        <label for="exampleInputEmail1">Câu Hỏi</label>
                                        <input type="text" class="form-control" id="cauhoi" name="cauhoi"placeholder="cauhoi">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>

                                       <div class="form-group">
                                        <label for="exampleInputEmail1">Đáp Án A</label>
                                        <input type="text" class="form-control" id="dapana" name="dapana"placeholder=" Đáp Án A">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>

                                         <div class="form-group">
                                        <label for="exampleInputEmail1">Đáp Án B</label>
                                        <input type="text" class="form-control" id="dapanb" name="dapanb"placeholder="Đáp Án B ">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>

                                         <div class="form-group">
                                        <label for="exampleInputEmail1">Đáp Án C</label>
                                        <input type="text" class="form-control" id="dapanc" name="dapanc"placeholder="Đáp Án C ">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Đáp Án D</label>
                                        <input type="text" class="form-control" id="dapand" name="dapand"placeholder="Đáp Án D ">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                       <div class="form-group">
                                        <label for="exampleInputEmail1">Đáp Án </label>
                                        <input type="dapan" class="form-control" id="dapan" name="dapan"placeholder="Đáp Án  ">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                 
                                  
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Thêm</button>
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                    
@endsection
