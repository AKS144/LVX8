@extends('layouts.master')
@section('content')

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Sizes</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Sizes Edit</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Edit Sizes</h5>  <br>
                  <form action="{{ route('sizes.update',$sizes->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                      <div class="form-group">
                        <label for="">Size</label>
                        <input type="text" name="size" class="form-control" id="" value="{{ $sizes->size }}">
                        @if($errors->has('size'))
                             <span class="text-danger">{{ $errors->first('size') }}</span>
                        @endif  
                      </div>         
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Submit</button>
                    </div>
                  </form>
                
                </div>
              </div>
            </div>         
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->

@endsection