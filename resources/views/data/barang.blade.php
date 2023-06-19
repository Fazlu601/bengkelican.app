@extends('layout.main')

@section('container')
<div class="container-fluid px-4">
    <h1 class="mt-4">Barang</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">
            <a href="/" class="text-decoration-none text-dark">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Barang</li>
    </ol>
    
    <div class="card mb-4">
        <div class="card-header">
            <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-plus me-1"></i> Tambah Barang</button>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
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
                            <td>{{ "Rp. " . number_format($b->price);  }}</td>
                            <td>{{ $b->stock }}</td>
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



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pemesanan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/transaksi/pemesanan_barang" method="POST">
            @csrf
            <div class="form-floating mb-3">
                <select class="form-select" name="supplier" id="floatingSelect" aria-label="Floating label select example">
                  <option selected>--pilih supplier--</option>
               
                </select>
                <label for="floatingSelect">Supplier</label>
              </div>
            <div class="form-floating mb-3">
                <select class="form-select" name="type" id="floatingSelect" aria-label="Floating label select example">
                  <option selected>--pilih tipe--</option>
                    <option value="service">service</option>
                    <option value="sparepart">spare part</option>
                </select>
                <label for="floatingSelect">Supplier</label>
              </div>
            <div class="form-floating mb-3">
                <input type="name" name="plat" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Plat</label>
              </div>
            <div class="form-floating mb-3">
                <input type="number" name="total" min="0" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Total Harga</label>
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
      </div>
    </div>
  </div>
@endsection