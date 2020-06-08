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
<h1 class="h3 mb-2 text-gray-800">Users</h1><br>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
  </div>
  <div class="card-body">
    <div class="table-responsive">
    @foreach ($user as $usr)
    <form action="{{route('user.update', $usr->id)}}" method="POST" class="needs-validation" novalidate>
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" placeholder="nama" name="old_name" value="{{ $usr->name }}">
        <div class="box-body">
            <div class="form-group">
                <label >Name</label>
                <input type="text" class="form-control" name="name" value="{{ $usr->name }}" autofocus required>
                <span class="help-block with-errors"></span>
            </div>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label >Email</label>
                <input type="text" class="form-control" name="email" value="{{ $usr->email }}" autofocus required>
                <span class="help-block with-errors"></span>
            </div>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label >Role</label>
                <select name="id_role" class="form-control" required>
                    <option value="" disabled selected>Select a Role</option>
                    @foreach ($roles as $role)
                        <option value="{{$role->id_role}}"
                            @if ($usr->id_role == $role->id_role)
                                selected
                            @endif
                            >{{$role->role}}</option>
                      @endforeach
                </select>
                <span class="help-block with-errors"></span>
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Edit Data">
        <a href="/user" class="btn btn-outline-primary">Kembali</a>
    </form>
    @endforeach
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->
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