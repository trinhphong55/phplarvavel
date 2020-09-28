
@extends('layout')
@section('js')
<script  src="{{asset('assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
<script  src="{{asset('assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
<script  src="{{asset('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
<script  src="{{asset('assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
<script  src="{{asset('assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
<script  src="{{asset('assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
<script  src="{{asset('assets/libs/datatables/buttons.html5.min.js') }}"></script>
<script  src="{{asset('assets/libs/datatables/buttons.flash.min.js') }}"></script>
<script  src="{{asset('assets/libs/datatables/buttons.print.min.js') }}"></script>
<script  src="{{asset('assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
<script  src="{{asset('assets/libs/datatables/dataTables.select.min.js') }}"></script>
<script  src="{{asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<script  src="{{asset('assets/libs/pdfmake/vfs_fonts.js') }}"></script>
@endsection
@section('css')
@endsection
@section('main-content')

<h1>Danh sach người Chơi </h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Danh Sách Nguoi choi</h4>
              
                </p>

                <table id="basic-datatable" class="table dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên Đăng nhập</th>
                            <th>Mật Khẩu</th>
                            <th>Email</th>
                            <th>Hình Đại Diện</th>
                            <th>Diểm Cao Nhất</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>


                    <tbody>

                      <tr>
                        
                       @foreach($nguoichoi as $nguoichoi)
                       <td>{{$nguoichoi->id}}</td>
                       <td>{{$nguoichoi->tendangnhap}}</td>
                       <td><span style="display:block;text-overflow: ellipsis;width: 100px;overflow: hidden; white-space: nowrap;">{{$nguoichoi->matkhau}}</span></td>
                       <td>{{$nguoichoi->email}}</td>
                       <td><a class="nav-link dropdown-toggle nav-user mr-0 waves-effect"><img src="{{asset('img')}}/{{$nguoichoi->hinhdaidien}} " alt="user-image" class="rounded-circle"></a></td>
                       <td>{{$nguoichoi->diemcaonhat}}</td>
                     
 


                  
                       <form action="{{route('nguoichoixoanguoichoi',$nguoichoi->id)}}" method="post">
                       <td> <a href="{{route('nguoichoisuanguoichoi',$nguoichoi->id)}}"  type="button" class="btn btn-purple waves-effect waves-light" ><i class="fe-edit-1" ></i></a></td>
                        @method('DELETE')
                         @csrf
                    
                         <td><button type="submit" name="" class="btn btn-danger waves-effect waves-light"><i class="fe-lock"></i></button></td>
                          </form> 
                       
                 <td></td>
                       </tr>

                       @endforeach

                     </tbody>
                   </table>

               </div> <!-- end card body-->
           </div> <!-- end card -->
       </div><!-- end col-->
   </div>

   <!-- end row-->
   @endsection