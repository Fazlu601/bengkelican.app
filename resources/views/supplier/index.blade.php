@extends('layout.main')

@section('container')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Barang Terima</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Pemesanan Barang</li>
        </ol>
        
        <div class="card mb-4">
            <div class="card-header">
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tanggal</th>
                            <th>Supplier</th>
                            <th>Total</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $data as $pb )
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $pb->created_at }}</td>
                                <td>{{ $pb->supplier }}</td>
                                <td>{{ $pb->total}}</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-success">
                                        <span class="fas fa-whatsapp"></span>
                                    </a>
                                    <a href="" class="btn btn-sm btn-warning">
                                        <span class="fas fa-brands fa-whatsapp"></span>
                                    </a>
                                    <a href="" class="btn btn-sm btn-danger">
                                        <span class="fas fa-brands fa-whatsapp"></span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection