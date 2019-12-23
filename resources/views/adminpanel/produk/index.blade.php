@extends('adminpanel.app')

@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Produk <a href="{{ route('adminpanel.produk.create') }}" class="btn btn-success btn-xs">Tambah</a></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Produk</li>
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
                        <th>No</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        {{-- @foreach ($produk as $index => $item)
                            <tr>
                                <td>{{ $index+1 }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>
                                    <label class="badge badge-info">Beli</label> : Rp {{ number_format($item->harga_beli,0, ',', '.') }} <br>
                                    <label class="badge badge-success">Jual</label> : Rp {{ number_format($item->harga_jual,0, ',', '.') }}
                                </td>
                                <td>{{ $item->stok }}</td>
                            </tr>
                        @endforeach --}}
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
                ajax: "{{ route('adminpanel.produk.data') }}",
                columns: [
                    {'data': 'DT_RowIndex'},
                    {'data': 'nama'},
                    {'data': 'harga'},
                    {'data': 'stok'},
                    {'data': 'aksi', orderable: false, searchable: false}
                ]
            });
        });
    </script>
@endsection