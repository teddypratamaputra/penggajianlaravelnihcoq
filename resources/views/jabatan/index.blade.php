@extends('adminlte::page')

@section('title', 'Penggajian || Jabatan')
@section('plugins.Datatables', true)

@section('content_header')
    <h1 class="m-0 text-dark">Data Jabatan</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><strong>Data Jabatan</strong></h3>
                    <a href="{{ route('jabatan.create') }}" class="btn btn-success btn-md float-right">Tambah Jabatan</a>
                </div>

                <div class="card-body">
                    <table class="table table-bordered" id="tableJabatan">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Jabatan</th>
                            <th>Gaji Pokok</th>
                            <th>Tunjangan Jabatan</th>
                            <th>Uang Makan</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
@push('js')
    <script type="text/javascript">
        $(document).ready(function(){
            var dataTable = $("#tableJabatan").DataTable({
                processing: true,
                serverSide: true,
                autoWidth: true,
                stateSave: true,

                "order": [
                    [0, 'desc']
                ],
                ajax: '{{ route('get.jabatan') }}',
                columns: [
                    {
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false,
                    },
                    {
                        data: 'nama_jabatan',
                        name: 'nama_jabatan',
                    },
                    {
                        data: 'gapok_jabatan',
                        name: 'gapok_jabatan',
                    },
                    {
                        data: 'tunjangan_jabatan',
                        name: 'tunjangan_jabatan',
                    },
                    {
                        data: 'uang_makan',
                        name: 'uangan_makan'
                    },
                    {
                        data: 'aksi',
                        name: 'aksi',
                        orderable: false,
                        searchable: false,
                        'sClass' : 'text-center'
                    }
                ]
            });
        });
    </script>
@endpush
