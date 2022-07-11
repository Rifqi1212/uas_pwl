@extends('back.dashboard')
@section('title', 'Application | Users')
@section('title-breadcrumb', 'Users')
@section('breadcrumb-item', 'Home')
@section('breadcrumb-active', 'Tambah Users')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Users</h3>
            </div>
            <form action="{{ url('pengguna/tambah') }}" method="POST">

                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <label for="" class="col-sm-2">User Name</label>
                        <div class="col-sm-4">
                            <input type="text" name="name" required class="form-control" placeholder="Nama Pengguna" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2">Email Pengguna</label>
                        <div class="col-sm-4">
                            <input type="email" name="email" required class="form-control"
                                placeholder="name@example.com" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2">Password</label>
                        <div class="col-sm-4">
                            <input type="password" name="password" required class="form-control"
                                placeholder="Password Pengguna" />
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-sm btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    @endsection