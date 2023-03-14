@extends('layout.main')

@section('container')
<div class="container-fluid px-4">
    <h1 class="mt-4">Barang</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Barang</li>
    </ol>
    
    <div class="card mb-4">
        <div class="card-header">
            <button class="btn btn-sm btn-success"><i class="fas fa-plus me-1"></i> Tambah Barang</button>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="datatablesSimple">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $data as $b )
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $b->name }}</td>
                            <td>{{ $b->price }}</td>
                            <td>{{ $b->stock }}</td>
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