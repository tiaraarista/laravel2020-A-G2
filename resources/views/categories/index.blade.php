@extends('layouts.master')

@section('top')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('template/vendor/datatables/dataTables.bootstrap4.min.css') }}">

    <!-- Custom styles for this page -->
    <link href="{{ asset('template/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('template/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('template/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('template/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('template/js/demo/datatables-demo.js') }}"></script>
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Categories</h1><br>
    @if ($message = Session::get('success'))
    <div class="alert alert-success" role="alert"><b>{{ $message }}</b></div>
    @elseif($message = Session::get('error'))
    <div class="alert alert-danger" role="alert"><b>{{ $message }}</b></div>
    @endif
<!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
    <a href="{{route('categories.create')}}" class="btn btn-primary"><i class="fas fa-fw fa-plus"></i> Add Category</a><br>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table  id="dataTable" class="table table-bordered" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Kategori</th>
            <th><center>Action</center></th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>ID</th>
            <th>Kategori</th>
            <th><center>Action</center></th>
          </tr>
        </tfoot>
        <tbody>
          @foreach ($categories as $ctg)
            <tr>
                <td>{{ $ctg->id_kategori }}</td>
                <td>{{ $ctg->nama_kategori }}</td>
                <td><center><a href="{{action('CategoryController@show', $ctg['id_kategori'])}}" class="btn btn-primary"><i class="fas fa-eye"></i> Lihat</a> 
                            <a href="{{action('CategoryController@edit', $ctg['id_kategori'])}}" class="btn btn-primary"><i class="fas fa-user-edit"></i> Edit</a><br>
                <!-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus"><i class="fas fa-trash-alt"></i>  
                Hapus</button> -->
                <form action="{{action('CategoryController@destroy', $ctg['id_kategori'])}}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" value="{{$ctg->id_kategori}}" name="name">
                    <input type="submit" value="Hapus" onclick="return alert('Apakah anda yakin?')">
                </form>
                </center>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->
@endsection