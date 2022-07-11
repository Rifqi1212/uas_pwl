@extends('back.dashboard')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Settings</h3>
    </div>
    <!-- /.card-header -->
    <div class="row ml-3 mt-3">
        <div class="col-4">
            <a href="/setting/create" type="button" class="btn btn-sm btn-success"><i class="fa fa-plus-circle"
                    style='color: white' aria-hidden="true"></i> Tambah Setting</a>
        </div>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>User id</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no = 0;
                @endphp
                @foreach ($settings as $itemsetting)
                @php
                $no = $no + 1;
                @endphp
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $itemsetting->nama_kategori }}</td>
                    <td>{{ $itemsetting->user_id }}</td>
                    <td>{{ $itemsetting->status }}</td>
                    <td>
                        <a href="{{ url('setting/edit/' . $itemsetting->id) }}" class="btn btn-sm btn-success">Edit</a>
                        <a href="{{ url('setting/hapus/' . $itemsetting->id) }}" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
@endsection