@extends('layouts.master')


@section('top')

@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">User</h1><br>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
  </div>
  <div class="card-body">
    <div class="table-responsive">
    <form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
        <input type="hidden" id="id" name="id">
        <div class="box-body">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" id="nama" name="nama"  autofocus required>
                <span class="help-block with-errors"></span>
            </div>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email"  autofocus required>
                <span class="help-block with-errors"></span>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" id="password" name="password"  autofocus required>
                <span class="help-block with-errors"></span>
            </div>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label >Role</label>
                <select name="id_role" class="form-control" required>
                    <option value="" disabled selected>Select a Role</option>
                    @foreach($roles as $role)
                    <option value="{{ $role->id_role }}">{{ $role->role }}</option>
                    @endforeach
                </select>
                <span class="help-block with-errors"></span>
            </div>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label >Image</label>
                <input type="file" class="form-control  @error('avatar') is-invalid @enderror" id="avatar" name="avatar" autofocus required>
                <span class="help-block with-errors"></span>
                @error('avatar')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label >Documet File</label><br>
                <input type="file" class="form-control @error('document') is-invalid @enderror" id="document" name="document" autofocus required>
                <span class="help-block with-errors"></span>
                @error('document')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Simpan">
        <a href="/user" class="btn btn-outline-primary">Kembali</a>
  </form>
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