@extends('layouts.master')

@section('top')

@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Stock Out</h1><br>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
  </div>
  <div class="card-body">
    <div class="table-responsive">
    <form action="{{route('stockout.store')}}" method="post">
		{{ csrf_field() }}
        <input type="hidden" id="id" name="id">
        <div class="box-body">
          <div class="form-group">
              <label >Barang</label>
              <select name="id_barang" class="form-control" required>
                  <option value="" disabled selected>Select a Product</option>
                  @foreach($products as $brg)
                  <option value="{{ $brg->id_barang }}">{{ $brg->nama_barang }}</option>
                  @endforeach
              </select>
              <span class="help-block with-errors"></span>
          </div>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label >Qty</label>
                <input type="text" class="form-control" id="qty" name="qty"  autofocus required>
                <span class="help-block with-errors"></span>
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Tambah Data">
        <a href="/stockout" class="btn btn-outline-primary">Kembali</a>
	</form>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<!-- JS Validasi -->
<script>
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>


@endsection