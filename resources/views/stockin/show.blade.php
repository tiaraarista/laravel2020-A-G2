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
<h1 class="h3 mb-2 text-gray-800">Stock In</h1><br>
    @if ($message = Session::get('success'))
    <div class="alert alert-success" role="alert"><b>{{ $message }}</b></div>
    @elseif($message = Session::get('error'))
    <div class="alert alert-danger" role="alert"><b>{{ $message }}</b></div>
    @endif

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
    <a href="{{route('stockin.create')}}" class="btn btn-primary"><i class="fas fa-fw fa-plus"></i> Add Stock In</a><br>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table  id="dataTable" class="table table-bordered" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Qty</th>
            <th>Created At</th>
            <th><center>Action</center></th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Kategori</th>
            <th>Qty</th>
            <th>Created At</th>
            <th><center>Action</center></th>
          </tr>
        </tfoot>
        <tbody>
          @foreach ($stockin as $stc)
            <tr>
                <td>{{ $stc->id_stockin }}</td>
                <td>{{ $stc->product->nama_barang }}</td>
                <td>{{ $stc->product->category->nama_kategori }}</td>
                <td>{{ $stc->qty }}</td>
                <td>{{ $stc->created_at }}</td>
                <td> 
                <form action="{{action('StockinController@destroy', $stc['id_stockin'])}}" method="post">
                <center><a href="{{action('StockinController@show', $stc['id_stockin'])}}" class="btn btn-primary"><i class="fas fa-eye"></i> Lihat</a>
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" value="{{$stc->nama_barang}}" name="nama_barang">
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