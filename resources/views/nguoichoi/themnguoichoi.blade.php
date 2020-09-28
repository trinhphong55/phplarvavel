@extends('layout')
@section('main-content')
<h1>Thêm Người Chơi</h1>
@if (session('success'))
<div class="alert alert-success">
      <p>{{ session('success') }}</p>
</div>
@endif


<div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{route('nguoichoithemnguoichoi')}}" method="POST">
                                      @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên NGười Chơi</label>
                                        <input type="text" class="form-control" id="tennguoichoi" name="tennguoichoi"placeholder="tennguoichoi">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>

                                       <div class="form-group">
                                        <label for="exampleInputEmail1">mât Khẩu</label>
                                        <input type="text" class="form-control" id="matkhau" name="matkhau"placeholder="matkhau">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>

                                       <div class="form-group">
                                        <label for="exampleInputEmail1">email</label>
                                        <input type="text" class="form-control" id="emaill" name="emaill"placeholder=" email">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>

                                         <div class="form-group">
                                        <label for="exampleInputEmail1">Hình Đại Diện</label>
                                        <input type="text" class="form-control" id="hinhdaidien" name="hinhdaidien"placeholder="hinhdaidien ">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>

                                         <div class="form-group">
                                        <label for="exampleInputEmail1">Điểm Cao nhất</label>
                                        <input type="number" class="form-control" id="diemcaonhat" name="diemcaonhat"placeholder="diemcaonhat ">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Thêm</button>
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
@endsection
