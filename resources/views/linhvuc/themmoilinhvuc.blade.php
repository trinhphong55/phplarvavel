@extends('layout')
@section('main-content')
<h1>Thêm Lĩnh Vực</h1>
<?php
use App\Http\Controllers\Controller;
function Alert($phong){
    echo "<script>alert('".$phong."')</script>";
}
?>
@if(session('chong'))
<?php
Alert("Tên Lĩnh Vực Không được để Chống"); 
?>
@endif
@if(session('trung'))
<?php
Alert("Tên Lĩnh Vực Đã Có"); 
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
                                <form action="{{route('linhvucthemmoi')}}" method="POST">
                                      @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ten Linh Vuc</label>
                                        <input type="ten linh vuc" class="form-control" id="themlinhvuc" name="tenlinhvuc"placeholder="ten linh vuc">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                 
                                  
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Thêm</button>
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                  
@endsection
