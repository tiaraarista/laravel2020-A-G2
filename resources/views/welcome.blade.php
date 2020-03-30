
@extends('layouts.app')

@section('top')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('template/vendor/datatables/dataTables.bootstrap4.min.css') }}">

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('template/js/sb-admin-2.min.js') }}"></script>
@endsection

@section('content')
    <body class="bg-gradient-primary">
        <div class="container" style="margin-top: 150px">
            <div class="text-center">
                <h1 class="text-white">{{ __('TIVIA') }}<sup>Cell</sup></h1><br>
                <h2 class="text-white">{{ __('Sistem Inventory Management') }}</h2>
            </div>
        </div>
    </body>

@endsection