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
        <h1 class="mt-4">Pemesanan Barang</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Pemesanan Barang</li>
        </ol>
        
        <div class="card mb-4">
            <div class="card-header">
                <!-- Button trigger modal -->
                <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-check me-1"></i> Verifikasi Barang</button>
            </div>
            <div class="card-body">
                <table>
                    <tr>
                        <th colspan="4">Kondisi </th>
                        <td> : {{ $data->kondisi }}</td>
                    </tr>
                    <tr>
                        <th colspan="4">Nama supplier </th>
                        <td> : {{ $data->supplier }}</td>
                    </tr>
                    <tr>
                        <th colspan="3">Plat </th>
                        <td> : {{ $data->plat }}</td>
                    </tr>
                    <tr>
                        <th colspan="3">Total </th>
                        <td> : {{ $data->total }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Verifikai Pemesanan Barang</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/transaksi/pemesanan_barang/verifikasi/{{ $data->id }}" method="POST">
            @method('put')
            @csrf
            <div class="form-floating mb-3">
                <select class="form-select" name="kondisi" id="floatingSelect" aria-label="Floating label select example">
                  <option selected>--pilih tipe--</option>
                    <option value="sedang diproses">Sedang Diproses</option>
                    <option value="sudah sampai">Sudah Sampai</option>
                </select>
                <label for="floatingSelect">Supplier</label>
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