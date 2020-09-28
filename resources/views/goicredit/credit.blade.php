
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

@if(session('trung'))
<?php
Alert("tên gói đã tồn tại"); 
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



<h1>Danh sach cau hoi </h1>

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <h4 class="header-title">Credit</h4>
        <a href="{{route('creditthemcreditt')}}" class="btn btn-outline-primary btn-rounded waves-effect waves-light">Thêm credit</a> 
      </p>
<style>
  
  
</style>
      <table id="basic-datatable" class="table dt-responsive nowrap">
        <thead>
          <tr>
            <th>ID</th>
            <th>Tên Gói</th>
            <th>credit</th>
            <th>Số Tiền</th>
            <th></th>
             <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach($credit as $credit)

          <td>{{$credit->id}}</td>
          <td>{{$credit->tengoi}}</td>
          <td>{{$credit->credit}}</td>
          <td>{{$credit->sotien}}</td>
                    
       <form action="{{route('creditxoacredit',$credit->id)}}" method="POST"  onsubmit="return ConfirmDelete( this )"> 
                       
                       <td> <a href="{{route('creditsuacredit',$credit->id)}}"  type="button" class="btn btn-purple waves-effect waves-light" ><i class="fe-edit-1" ></i></a>
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
  