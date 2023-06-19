@extends('layout.main')

@section('container')
<div class="container-fluid px-4">
    <h1 class="mt-4">Pengguna</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Pengguna</li>
    </ol>
    
    <div class="card mb-4">
        <div class="card-header">
            <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-plus me-1"></i> Tambah Pengguna</button>
        </div>
        <div class="card-body">
            <table class="table table-bordered" >
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $users as $s )
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $s->name }}</td>
                            <td>{{ $s->username }}</td>
                            <td>
                                @if ($s->is_admin === 0)
                                    Karyawan
                                @endif
                            </td>
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











<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Pengguna</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/access" method="POST">
            @csrf
            <div class="form-floating mb-3">
                <select class="form-select" name="role_access" id="floatingSelect" aria-label="Floating label select example">
                  <option selected>--pilih role--</option>
                    <option value="0">Karyawan</option>
                    <option value="1">Supplier</option>
                </select>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="username" id="FloatingText" class="form-control">
                <label for="floatingText">Username</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="name" id="FloatingText" class="form-control">
                <label for="floatingText">Nama Lengkap</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="address" id="FloatingText" class="form-control">
                <label for="floatingText">Alamat</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="password" id="FloatingText" class="form-control">
                <label for="floatingText">Password</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="password2" id="FloatingText" class="form-control">
                <label for="floatingText">Konfirmasi Password</label>
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