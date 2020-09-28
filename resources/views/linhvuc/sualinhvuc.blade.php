@extends('layout')
@section('main-content')
<h1>Sữa Lĩnh Vực</h1>
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
    <form action="{{ route('linhvucxulisua',$linhvuc->id) }}" method="POST">
     @method('PATCH')
     @csrf
     
     
     <div class="form-group">
        <label for="exampleInputEmail1">Ten Linh Vuc moi</label>
        <input type="ten linh vuc" class="form-control" id="themlinhvuc" name="tenlinhvuc"placeholder="ten linh vuc" value="{{$linhvuc->tenlinhvuc}}">
        <small id="emailHelp" class="form-text text-muted"></small>
    </div>

    
    
    <button type="submit" class="btn btn-primary waves-effect waves-light">Sửa Lĩnh Vực</button>
</form>

</div> <!-- end card-body-->
</div> <!-- end card-->
</div>
@endsection
