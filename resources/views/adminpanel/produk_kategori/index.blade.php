@extends('adminpanel.app')

@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Kategori Produk <a href="{{ route('adminpanel.kategori.produk.create') }}" class="btn btn-success btn-xs">Tambah</a></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Kategori Produk</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="card card-info card-outline">
            <div class="card-body">
                <table class="table table-bordered table-striped datatables">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Icon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('.datatables').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('adminpanel.kategori.produk.data') }}",
                columns: [
                    {'data': 'DT_RowIndex'},
                    {'data': 'nama'},
                    {'data': 'icon'},
                    {'data': 'aksi', orderable: false, searchable: false}
                ]
            });
        });
    </script>
@endsection