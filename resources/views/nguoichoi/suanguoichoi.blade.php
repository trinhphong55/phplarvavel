@extends('layout')
@section('main-content')
<h1>Sữa Người chơi</h1>
<div class="col-lg-6">
    <div class="card">
        <div class="card-body">
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
        <form action="{{route('nguoichoixulisuanguoichoi',$nguoichoi->id)}}" method="post">
            @method('PATCH')
           @csrf 


           <div class="form-group">
            <label for="exampleInputEmail1">Tên NGười Chơi</label>
            <input type="text" class="form-control" id="tennguoichoi" name="tennguoichoi"placeholder="tennguoichoi" value="{{$nguoichoi->tendangnhap }}" disabled="" >
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">mât Khẩu</label>
            <input type="text" class="form-control" id="matkhau" name="matkhau" placeholder="matkhau"value="{{$nguoichoi->matkhau}}" disabled="" >
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">email</label>
            <input type="text" class="form-control" id="emaill" name="emaill"placeholder=" email" value="{{$nguoichoi->email}}" disabled="">
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Hình Đại Diện</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="hinhdaidien" name="hinhdaidien" value="{{$nguoichoi->hinhdaidien}}">
                    <label class="custom-file-label" for="inputGroupFile04">{{$nguoichoi->hinhdaidien}}</label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Điểm Cao nhất</label>
            <input type="number" class="form-control" id="diemcaonhat" name="diemcaonhat"placeholder="diemcaonhat "value="{{$nguoichoi->diemcaonhat}}" disabled="">
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>



        <button type="submit" class="btn btn-primary waves-effect waves-light">Sửa Người Chơi</button>
    </form>

</div> <!-- end card-body-->
</div> <!-- end card-->
</div>
@endsection
