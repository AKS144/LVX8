@extends('layouts.master')
@section('content')

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Products</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Products create</li>
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
                  <h5 class="card-title">Products List</h5>  <br><br>
                 <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add Products</a> <br><br>
              
                  <table class="table table-bordered datatables">
                    <thead>
                        <tr>
                            <td>#SL</td>
                            <td>Name</td>
                            <td>Action</td>
                        </tr>
                        <tbody>
                            @if($products)
                                @foreach($products as $key =>$products)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $products->name }}</td>
                                        <td>
                                            <a class="btn btn-sm btn-info" href="{{ route('products.edit',$products->id) }}"><i class="fa fa-edit"></i>Edit</a>
                                            <a class="btn btn-sm btn-danger sa-delete" data-form-id="product-delete-{{ $products->id }}" href="javascript:;"><i class="fa fa-trash"></i>Delete</a>
                                            <form id="product-delete-{{ $products->id }}" action="{{ route('products.destroy',$products->id) }}" method="post">
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