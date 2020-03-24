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
<h1 class="h3 mb-2 text-gray-800">Products</h1><br>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
    <a href="{{route('product.create')}}" class="btn btn-primary"><i class="fas fa-fw fa-plus"></i> Add Product</a><br>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table  id="dataTable" class="table table-bordered" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Name</th>
            <th>Kategori</th>
            <!-- <th></th> -->
            <!-- <th>Spek</th> -->
            <th>Harga</th>
            <th>Qty</th>
            <th><center>Action</center></th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Name</th>
            <th>Kategori</th>
            <!-- <th></th> -->
            <!-- <th>Spek</th> -->
            <th>Harga</th>
            <th>Qty</th>
            <th><center>Action</center></th>
          </tr>
        </tfoot>
        <tbody>
          @foreach ($products as $brg)
            <tr>
                <td>{{ $brg->nama_barang }}</td>
                <td>{{ $brg->category->nama_kategori }}</td>
                <td>{{ $brg->harga }}</td>
                <!-- <td>{{ $brg->spesifikasi }}</td> -->
                <td>{{ $brg->qty }}</td>
                <td><center><a href="{{action('ProductController@show', $brg['id_barang'])}}" class="btn btn-primary"><i class="fas fa-eye"></i> Lihat</a> 
                <a href="{{action('ProductController@edit', $brg['id_barang'])}}" class="btn btn-primary"><i class="fas fa-user-edit"></i> Edit</a><br>
                <form action="{{action('CategoryController@destroy', $brg['id_barang'])}}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" value="{{$brg->id}}" name="name">
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