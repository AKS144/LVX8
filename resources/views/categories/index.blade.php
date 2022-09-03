@extends('layouts.master')
@section('content')

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Categories</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Categories create</li>
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
                  <h5 class="card-title">Categories List</h5>  <br><br>
                 <a href="{{ route('categories.create') }}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add Category</a> <br><br>
                 {{-- <example-component></example-component> --}}
                 <category-component></category-component>category
                  <table class="table table-bordered datatables">
                    <thead>
                        <tr>
                            <td>#SL</td>
                            <td>Name</td>
                            <td>Action</td>
                        </tr>
                        <tbody>
                            @if($categories)
                                @foreach($categories as $key =>$category)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>
                                            <a class="btn btn-sm btn-info" href="{{ route('categories.edit',$category->id) }}"><i class="fa fa-edit"></i>Edit</a>
                                            <a class="btn btn-sm btn-danger sa-delete" data-form-id="category-delete-{{ $category->id }}" href="javascript:;"><i class="fa fa-trash"></i>Delete</a>
                                            <form id="category-delete-{{ $category->id }}" action="{{ route('categories.destroy',$category->id) }}" method="post">
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