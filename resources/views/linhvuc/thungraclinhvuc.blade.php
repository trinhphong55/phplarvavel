
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
function confirm($phong){
    echo "<script>confirm('".$phong."')</script>";

}
?>
@if(session('hoiphuc'))
<?php
Alert("Phục Hồi thanh cong"); 
?>
@endif

@if(session('xoa'))
<?php
confirm("Bạn Có Chắc Chắn Xóa"); 
?>
@endif

<h1>Danh sach linh vuc </h1>


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Danh Sách Lĩnh Vực Rác</h4>
              
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
                       @foreach($linhvuctg as $linhvuc)
                       <td>{{ $linhvuc->id }}</td>
                       <td>{{ $linhvuc->tenlinhvuc }}</td>
                    

                      
                     


                     <td> <form action="{{route('linhvuckhoiphuc',$linhvuc->id)}}" method="POST"  onsubmit="return ConfirmDelete( this )" style="float: left; padding-right:2%;"> 
                         @method('DELETE')
                         @csrf 
                        <button type="submit" name=""  class="btn btn-purple waves-effect waves-light"  ><i class="fe-edit-1" >Khôi Phục</i></button>
                       </form>
                            <form action="{{route('linhvucxoathunggiac',$linhvuc->id)}}" method="POST"  onsubmit="return ConfirmDelete( this )" style="float: left;margin-left:2%;"> 
                           @method('DELETE')
                           @csrf 
                        <button type="submit" name="" class="btn btn-danger waves-effect waves-light"><i class="fe-trash">Xóa Vĩnh Viễn</i></button></td>
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