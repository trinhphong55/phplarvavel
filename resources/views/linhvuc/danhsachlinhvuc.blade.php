
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

@if(session('khoiphuc'))
<?php
Alert("Khôi Phục Thành Công "); 
?>
@endif

@if(session('xoa'))
<?php
Alert("Xóa thành công"); 
?>
@endif

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

<h1>Danh sach linh vuc </h1>


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Danh Sách Lĩnh Vực</h4>
               <a href="{{route('linhvucthemmoi')}}" class="btn btn-outline-primary btn-rounded waves-effect waves-light">Thêm Lĩnh Vực</a> 
                </p>

                <table id="basic-datatable" class="table dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên Lĩnh Vực</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>


                    <tbody>

                      <tr>
                       @foreach($linhvucsl as $linhvuc)
                       <td>{{ $linhvuc->id }}</td>
                       <td>{{ $linhvuc->tenlinhvuc }}</td>
                    

                      


                     <form action="{{route('linhvucxoa',$linhvuc->id)}}" method="POST"  onsubmit="return ConfirmDelete( this )"> 
                       
                       <td> <a href="{{route('linhvucsua',$linhvuc->id)}}"  type="button" class="btn btn-purple waves-effect waves-light" ><i class="fe-edit-1" ></i></a>
                          @method('DELETE')
                         @csrf
                    
                         <button type="submit" name="" class="btn btn-danger waves-effect waves-light"><i class="fe-trash"></i></button></td>
                          </form> 
                         <td></td>
                       </form>
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