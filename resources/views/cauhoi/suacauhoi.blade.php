@extends('layout')
@section('main-content')
<h1>Sữa Câu Hỏi</h1>
<div class="col-lg-6">
    <div class="card">
        <div class="card-body">
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

@if(session('drop'))
<?php
Alert("xoa thanh cong"); 
?>
@endif

@if(session('sua'))
<?php
Alert("sua thanh cong"); 
?>
@endif
@if(session('xoa'))
<?php
Alert("xoa thanh cong"); 
?>
@endif


          @if ($errors->any())
          <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif


        
        <form action="{{route('cauhoixulisuacauhoi',$cauhoi->id)}}" method="post">
           @method('PATCH')
           @csrf 

           <div class="form-group">
            <label for="exampleInputEmail1">ID Lĩnh Vực</label>
            <select class="custom-select " name="idcauhoi">
                    @foreach($cauhoii as $cauhoii) <option selected=""><font style="vertical-align: inherit;">{{$cauhoii->tenlinhvuc}}<font style="vertical-align: inherit;"></font></font></option>     @endforeach
         </select>    
     </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Câu Hỏi</label>
            <input type="text" class="form-control" id="cauhoi" name="cauhoi"placeholder="cauhoi" value="{{$cauhoi->noidung}}">
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Đáp Án A</label>
            <input type="text" class="form-control" id="dapana" name="dapana"placeholder=" Đáp Án A" value="{{$cauhoi->phuongan_a}}">
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Đáp Án B</label>
            <input type="text" class="form-control" id="dapanb" name="dapanb"placeholder="Đáp Án B " value="{{$cauhoi->phuongan_b}}">
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Đáp Án C</label>
            <input type="text" class="form-control" id="dapanc" name="dapanc"placeholder="Đáp Án C " value="{{$cauhoi->phuongan_c}}">
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Đáp Án D</label>
            <input type="text" class="form-control" id="dapand" name="dapand"placeholder="Đáp Án D " value="{{$cauhoi->phuongan_c}}">
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Đáp Án </label>
            <select type="dapan" class="form-control" id="dapan" name="dapan"placeholder="Đáp Án  "  value="{{$cauhoi->dapan}}">
             <option selected=""><font style="vertical-align: inherit;">A<font style="vertical-align: inherit;"></font></font></option>     
              <option selected=""><font style="vertical-align: inherit;">B<font style="vertical-align: inherit;"></font></font></option>     
               <option selected=""><font style="vertical-align: inherit;">C<font style="vertical-align: inherit;"></font></font></option>     
                <option selected=""><font style="vertical-align: inherit;">D<font style="vertical-align: inherit;"></font></font></option>     
            </select>  
        </div>
  

        <button type="submit" class="btn btn-primary waves-effect waves-light">Sửa cau hoi</button>
    </form>

</div> <!-- end card-body-->
</div> <!-- end card-->
</div>
@endsection
