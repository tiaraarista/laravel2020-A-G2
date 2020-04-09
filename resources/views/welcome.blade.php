
@extends('layouts.app')

@section('top')
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('template/js/sb-admin-2.min.js') }}"></script>
@endsection

@section('content')
    <body class="bg-gradient-primary">
        <div class="container" style="margin-top: 150px">
            <div class="text-center"  style="margin-bottom: 210px">
                <h1 class="text-white">{{ __('TIVIA') }}<sup>Cell</sup></h1><br>
                <h2 class="text-white">{{ __('Sistem Inventory Management') }}</h2>
            </div>
        </div>
    </body>
    <!-- Footer -->
    <footer class="sticky-footer">
        <div class="container">
          <div class="copyright text-center">
            <h6 class="m-0 font-weight-bold text-white">Tivia<sup>Cell</sup> - Inventory Management</h6>
            <?php $date = date('Y')?>
            <strong class="m-0 font-weight-bold text-white">Copyright &copy; {{$date}} 
            <a href="https://github.com/tiaraarista" class="m-0 font-weight-bold text-light">Tivia</a>.</strong> 
            <a class="m-0 font-weight-bold text-white">All rights reserved.</a>
        </div>
      </div>
    </footer>
    <!-- End of Footer -->
@endsection