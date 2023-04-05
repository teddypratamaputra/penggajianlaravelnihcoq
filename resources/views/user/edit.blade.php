@extends('adminlte::page')

@section('title', 'Penggajian || User')

@section('content_header')
    <h1 class="m-0 text-dark">Data User</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><strong>Edit Pengguna</strong></h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('user.update',$user->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-group row">
                            <label class="form-label col-sm-2">Nama Lengkap</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" placeholder="Isikan Nama" required class="form-control" value="{{ $user->name }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="form-label col-sm-2">Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" placeholder="Isikan Email" required class="form-control" value="{{ $user->email }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="form-label col-sm-2">Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="password" placeholder="Isikan Password" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="form-label col-sm-2">Level</label>
                            <div class="col-sm-10">
                                <select name="level" class="form-control">
                                    <option value="" selected disabled>-- Pilih Level --</option>
                                    <option value="ADMIN" {{ $user->level == 'ADMIN' ? 'selected' : '' }}>ADMIN</option>
                                    <option value="PEGAWAI" {{ $user->level == 'ADMIN' ? 'selected' : '' }}>PEGAWAI</option>
                                </select>
                            </div>
                        </div>

                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-info">Submit</button>
                            <a href="{{ route('user.index') }}" class="btn btn-danger">Batal</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@stop
