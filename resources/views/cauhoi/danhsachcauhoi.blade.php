
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


<h1>Danh sach cau hoi </h1>

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <h4 class="header-title">Danh Sách câu hỏi</h4>
        <a href="{{route('cauhoithemmoicauhoi')}}" class="btn btn-outline-primary btn-rounded waves-effect waves-light">Thêm Câu Hỏi</a> 
      </p>
<style>
  
  
</style>
      <table id="basic-datatable" class="table dt-responsive nowrap">
        <thead>
          <tr>
            <th>ID</th>
            <th>IDLĩnhVực</th>
            <th>Nội Dung</th>
            <th>Đáp Án A</th>
            <th>Đáp Án B</th>
            <th>Đáp Án C</th>
            <th>Đáp Án D</th>
            <th>Đáp Án </th>
            <th></th>
            <th></th>
             <th></th>
          </tr>
        </thead>


        <tbody>

          <tr>
           @foreach($cauhoi as $cauhoi)

           <td>{{ $cauhoi->id }}</td>
           <td>ID Linh vuc{{$cauhoi->linh_vuc_id}}</td>
           <td><span style="display:block;text-overflow: ellipsis;width: 200px;overflow: hidden; white-space: nowrap;">{{$cauhoi->noidung}}</span></td>
           <td><span style="display:block;text-overflow: ellipsis;width: 100px;overflow: hidden; white-space: nowrap;">{{$cauhoi->phuongan_a}}</span></td>
           <td><span style="display:block;text-overflow: ellipsis;width: 100px;overflow: hidden; white-space: nowrap;">{{$cauhoi->phuongan_b}}</span></td>
           <td><span style="display:block;text-overflow: ellipsis;width: 100px;overflow: hidden; white-space: nowrap;">{{$cauhoi->phuongan_c}}</span></td>
           <td><span style="display:block;text-overflow: ellipsis;width: 100px;overflow: hidden; white-space: nowrap;">{{$cauhoi->phuongan_d}}</span></td>
           <td><span style="display:block;text-overflow: ellipsis;width: 100px;overflow: hidden; white-space: nowrap;">{{$cauhoi->dapan}}</span></td>


                     <form action="{{route('cauhoixoacauhoi',$cauhoi->id)}}" method="POST"  onsubmit="return ConfirmDelete( this )"> 
                       
                       <td> <a href="{{route('cauhoisuacauhoi',$cauhoi->id )}}"  type="button" class="btn btn-purple waves-effect waves-light" ><i class="fe-edit-1" ></i></a></td>
                          @method('DELETE')
                         @csrf
                    
                        <td><button type="submit" name="" class="btn btn-danger waves-effect waves-light"><i class="fe-trash"></i></button></td>
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
  