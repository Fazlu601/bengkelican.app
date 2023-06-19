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
        <h1 class="mt-4">Detail Pemesanan</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">
                <a href="/" class="text-decoration-none text-dark">Home</a>
            </li>
            <li class="breadcrumb-item active">Detail Pemesanan</li>
        </ol>
        
        <div class="card mb-4">
            <div class="card-header">
                <!-- Button trigger modal -->
                <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-plus me-1"></i> Tambah</button>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Tipe</th>
                            <th>Plat</th>
                            <th>Nama Supplier</th>
                            <th>Kondisi</th>
                            <th>Waktu dipesan</th>
                            <th>Total Biaya</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $data as $pb )
                            <tr>
                                <td>{{ $loop->type }}</td>
                                <td>{{ $pb->plat }}</td>
                                <td>{{ $pb->kondisi }}</td>
                                <td>{{ $pb->created_at}}</td>
                                <td>{{ $pb->total}}</td>
                                <td>
                                    <div  class="d-flex w-100 justify-content-between">
                                        <a href="" class="btn btn-sm btn-success">
                                            <span class="fas fa-brand fa-whatsapp"></span>
                                        </a>
                                        <a href="" class="btn btn-sm btn-warning">
                                            <span class="fas fa-edit"></span>
                                        </a>
                                        <form action="/transaksi/pemesanan_barang/{{ $pb->id }}" id="delete-transaction" method="POST" >
                                            @method('delete')
                                            @csrf
                                            <button type="button" onClick="confirmDelete()" class="btn btn-sm btn-danger">
                                                <span class="fas fa-trash"></span>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


{{-- <!-- Modal -->
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
                  @foreach ($supplier as $s)
                    <option value="{{ $s->name }}">{{ $s->name }}</option>
                  @endforeach
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
  </div> --}}
@endsection