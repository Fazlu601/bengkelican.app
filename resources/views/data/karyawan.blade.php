@extends('layout.main')

@section('container')
<div class="container-fluid px-4">
    <h1 class="mt-4">Karyawan</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">
            <a href="/" class="text-decoration-none text-dark">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Karyawan</li>
    </ol>
    
    <div class="card mb-4">
        <div class="card-header">
            <button class="btn btn-sm btn-success"><i class="fas fa-plus me-1"></i> Tambah Karyawan</button>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No. Telp</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $data as $k )
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $k->name }}</td>
                            <td>{{ $k->address }}</td>
                            <td>{{ $k->telephone }}</td>
                            <td>
                                <a href="" class="btn btn-sm btn-success">
                                    <span class="fas fa-info"></span>
                                </a>
                                <a href="" class="btn btn-sm btn-warning">
                                    <span class="fas fa-edit"></span>
                                </a>
                                <a href="" class="btn btn-sm btn-danger">
                                    <span class="fas fa-trash"></span>
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