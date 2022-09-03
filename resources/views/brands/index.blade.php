@extends('layouts.master')
@section('content')

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Brands</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Brands </li>
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
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Brands List</h5>  <br><br>
                 <a href="{{ route('brands.create') }}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add Brands</a> <br><br>
                  <table class="table table-bordered datatables">
                    <thead>
                        <tr>
                            <td>#SL</td>
                            <td>Name</td>
                            <td>Action</td>
                        </tr>
                        <tbody>
                            @if($brands)
                                @foreach($brands as $key =>$brands)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $brands->name }}</td>
                                        <td>
                                            <a class="btn btn-sm btn-info" href="{{ route('brands.edit',$brands->id) }}"><i class="fa fa-edit"></i>Edit</a>
                                            <a class="btn btn-sm btn-danger sa-delete" data-form-id="brand-delete-{{ $brands->id }}" href="javascript:;"><i class="fa fa-trash"></i>Delete</a>
                                            <form id="brand-delete-{{ $brands->id }}" action="{{ route('brands.destroy',$brands->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </thead>
                  </table>
                
                </div>
              </div>
            </div>         
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->

@endsection