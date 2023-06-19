@extends('layout.main')

@section('container')
<div class="container-fluid px-4">
    <h1 class="mt-4">Service</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">
            <a href="/" class="text-decoration-none text-dark">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Service</li>
    </ol>
    
    <div class="card mb-4">
        <div class="card-header">
            <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-plus me-1"></i> Tambah Service</button>
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
                            <td>{{ $b->price }}</td>
                            <td>{{ $b->stock }}</td>
                            <td style="width: 150px">
                                <div class="d-flex justify-content-between w-100">
                                    <a href="/{{ $b->id }}" class="btn px-3 btn-sm btn-success">
                                        <span class="fas fa-info"></span>
                                    </a>
                                    <a href="" class="btn px-3 btn-sm btn-warning ms-3">
                                        <span class="fas fa-edit"></span>
                                    </a>
                                    <form action="/data/barang/{{ $b->id }}" id="delete-product" method="POST" >
                                        @method('delete')
                                        @csrf
                                        <button type="button" onClick="confirmDelete()" class="btn btn-sm btn-danger px-3 ms-3">
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


<script>
function confirmDelete() {
    swal.fire({
    title: "Apakah Anda yakin ingin menghapus data ini?",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Ya, hapus!",
    cancelButtonText: "Batal",
    closeOnConfirm: false
    }).then( (result) => {
        if(result.isConfirmed)
        document.getElementById('delete-product').submit();
    })
}
</script>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Tambah Data Barang</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <form action="/data/service" method="POST">
        @csrf
        <div class="form-floating mb-3">
            <select class="form-select" disabled required name="type" id="floatingSelect" aria-label="Floating label select example">
                <option value="service">Service</option>
            </select>
            <label for="floatingSelect">Tipe</label>
          </div>
        <div class="form-floating mb-3">
            <input type="text" required name="name" class="form-control" id="floatingInput" placeholder="Nama Barang">
            <label for="floatingInput">Nama Barang</label>
          </div>
        <div class="form-floating mb-3">
            <input type="number" required name="stock" min="0" class="form-control" id="floatingInput" placeholder="Stock Barang">
            <label for="floatingInput">Stock</label>
          </div>
        <div class="form-floating mb-3">
            <input type="number" required name="price" min="0" class="form-control" id="floatingInput" placeholder="Harga Barang">
            <label for="floatingInput">Harga Barang</label>
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