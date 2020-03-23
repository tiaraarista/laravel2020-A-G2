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

    <!-- CKEDITOR -->
    <script src="{{ asset('assets/js/ckeditor/ckeditor.js') }}"></script>
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Product</h1><br>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
  </div>
  <div class="card-body">
    <div class="table-responsive">
    @foreach ($product as $pdc)
    <form action="{{action('ProductController@update', $pdc->id_barang)}}" method="POST" class="needs-validation" novalidate>
        @method('PATCH')
        {{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $pdc->id_barang }}">
        <input type="hidden" placeholder="nama" name="old_name" value="{{ $pdc->nama_barang }}">
        <div class="box-body">
            <div class="form-group">
                <label >Name</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $pdc->nama_barang }}" autofocus required>
                <span class="help-block with-errors"></span>
            </div>
        </div>
        <div class="box-body">
          <div class="form-group">
              <label >Category</label>
              <select name="id_kategori" class="form-control">
                  <option value="" disabled selected>Select a Category</option>
                  @foreach($categories as $ctg)
                  <option value="{{ $ctg->id_kategori }}">{{ $ctg->nama_kategori }}</option>
                  @endforeach
              </select>
              <span class="help-block with-errors"></span>
          </div>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label >Harga</label>
                <input type="text" class="form-control" id="harga" name="harga" value="{{ $pdc->harga }}" autofocus required>
                <span class="help-block with-errors"></span>
            </div>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label >Spesifikasi</label>
                <textarea type="text" class="form-control" id="editor" name="spesifikasi" value=<?php echo "$pdc->spesifikasi";?> required></textarea>
                <span class="help-block with-errors"></span>
            </div>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label >Qty</label>
                <input type="text" class="form-control" id="qty" name="qty" value="{{ $pdc->qty }}"  autofocus required>
                <span class="help-block with-errors"></span>
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Edit Data">
        <a href="/product" class="btn btn-outline-primary">Kembali</a>
	</form>
    @endforeach
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

@endsection