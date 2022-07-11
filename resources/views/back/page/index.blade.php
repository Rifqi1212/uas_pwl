@extends('back.dashboard')
@section('title', 'Application | Users')
@section('custom_css')
<!-- DataTables -->

<link rel="stylesheet" href="{{ asset('back_asset/plugins/datatables-
bs4/css/dataTables.bootstrap4.min.css') }}">

<link rel="stylesheet" href="{{ asset('back_asset/plugins/datatables-
responsive/css/responsive.bootstrap4.min.css') }}">

<link rel="stylesheet" href="{{ asset('back_asset/plugins/datatables-

buttons/css/buttons.bootstrap4.min.css') }}">
@endsection
@section('title-breadcrumb', 'Users')
@section('breadcrumb-item', 'Home')
@section('breadcrumb-active', 'Users')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Users</h3>
            </div>
            <!-- /.card-header -->
            <div class="row ml-3 mt-3">
                <div class="col-4">
                    <a href="/pengguna/tambah" type="button" class="btn btn-sm btn-success"><i class="fa fa-plus-circle"
                            style='color: white' aria-hidden="true"></i> Tambah
                        User</a>
                </div>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-sm table-bordered table-striped
table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 0;
                        @endphp
                        @foreach ($pengguna as $useritem)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $useritem->name }}</td>
                            <td>{{ $useritem->email }}</td>
                            <td>
                                <a href="{{ url('pengguna/edit/' . $useritem->id) }}"
                                    class="btn btn-sm btn-success">Edit</a>
                                <a href="{{ url('pengguna/hapus/' . $useritem->id) }}"
                                    class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>
@endsection
@section('custom_js')
<script src="{{ asset('back_asset/plugins/datatables/jquery.dataTables.min.js')
}}"></script>

<script src="{{ asset('back_asset/plugins/datatables-
bs4/js/dataTables.bootstrap4.min.js') }}"></script>

<script src="{{ asset('back_asset/plugins/datatables-
responsive/js/dataTables.responsive.min.js') }}"></script>

<script src="{{ asset('back_asset/plugins/datatables-
responsive/js/responsive.bootstrap4.min.js') }}"></script>

<script src="{{ asset('back_asset/plugins/datatables-
buttons/js/dataTables.buttons.min.js') }}"></script>

<script src="{{ asset('back_asset/plugins/datatables-
buttons/js/buttons.bootstrap4.min.js') }}"></script>

<script>
$(function() {
    $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
    });
});
</script>
@endsection