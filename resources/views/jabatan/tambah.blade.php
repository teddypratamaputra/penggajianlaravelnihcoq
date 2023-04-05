@extends('adminlte::page')

@section('title', 'Penggajian || Jabatan')

@section('content_header')
    <h1 class="m-0 text-dark">Data Jabatan</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><strong>Tambah Pengguna</strong></h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('jabatan.store') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label class="form-label col-sm-2">Nama Jabatan</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama_jabatan" placeholder="Nama Jabatan" required class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="form-label col-sm-2">Gaji Pokok</label>
                            <div class="col-sm-10">
                                <input type="number" name="gapok_jabatan" placeholder="Rp.0" required class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="form-label col-sm-2">Tunjangan Jabatan</label>
                            <div class="col-sm-10">
                                <input type="number" name="tunjangan_jabatan" placeholder="Rp.0" required class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="form-label col-sm-2">Uang Makan / Insentif</label>
                            <div class="col-sm-10">
                                <input type="number" name="uang_makan" placeholder="Rp.0" required class="form-control">
                            </div>
                        </div>


                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-info">Submit</button>
                            <a href="{{ route('jabatan.index') }}" class="btn btn-danger">Batal</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@stop
