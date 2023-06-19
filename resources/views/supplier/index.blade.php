@extends('layout.main')

@section('container')
@if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: '{{ session('success') }}',
        });
    </script>
@endif
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard Supplier</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        
        <div class="card mb-4">
            <div class="card-header">
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tanggal</th>
                            <th>Plat</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $data as $pb )
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $pb->created_at }}</td>
                                <td>{{ $pb->plat }}</td>
                                <td>{{ $pb->total}}</td>
                                <td>{{ $pb->kondisi}}</td>
                                <td>
                                    <a href="/transaksi/pemesanan_barang/{{ Crypt::encrypt($pb->id) }}/show" class="btn btn-sm btn-success">
                                        <span class="fas fa-info"></span>
                                    </a>
                                        <!-- Button trigger modal -->
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