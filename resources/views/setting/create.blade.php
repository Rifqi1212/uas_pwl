@extends('back.dashboard')
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Settings</h3>
    </div>

    <!-- /.card-header -->
    <div class="card-body">
        <form action="{{ url('setting/add') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="">Nama Kategori</label>
                <input type="text" name="nama_kategori" required class="form-control" />
            </div>
            <div class="mb-3">
                <label for="">User Id</label>
                <input type="text" name="user_id" required class="form-control" />
            </div>
            <div class="mb-3">
                <label for="">Status</label><br>
                <input type="radio" name="status" value="Y" />
                <label for="">Aktif</label><br>
                <input type="radio" name="status" value="N" />
                <label for="">Tidak Aktif</label>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection