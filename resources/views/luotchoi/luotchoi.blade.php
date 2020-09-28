
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



<h1>Lượt chơi</h1>

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <h4 class="header-title">Lượt Chơi</h4>
      
      </p>
<style>
  
  
</style>
      <table id="basic-datatable" class="table dt-responsive nowrap">
        <thead>
          <tr>
            <th>ID</th>
            <th>Người Chơi ID</th>
            <th>Số Câu</th>
            <th>Điểm</th>
            <th></th>
          
            
          </tr>
        </thead>


        <tbody>
@foreach($luotchoii as $luotchoi)
       
          <td>{{$luotchoi->id}}</td>
          <td>{{$luotchoi->nguoichoiid}}</td>
          <td>{{$luotchoi->socau}}</td>
          <td>{{$luotchoi->diem}}</td>
          
           
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
  