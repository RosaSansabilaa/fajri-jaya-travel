@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Kelola Data Supir</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Supir</h6>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahDataSupirModal">Tambah Data</button>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>Kode Supir</th>
                            <th>Nama</th>
                            <th>Nomor Telepon</th>
                            <th>Alamat</th>
                            <th>Nama Pengguna</th>
                            <th>Kata Sandi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot class="text-center">
                        <tr>
                            <th>Kode Supir</th>
                            <th>Nama</th>
                            <th>Nomor Telepon</th>
                            <th>Alamat</th>
                            <th>Nama Pengguna</th>
                            <th>Kata Sandi</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($supirs as $supir)
                            <tr class="text-center">
                                <td>{{ $supir->id }}</td>
                                <td>{{ $supir->nama }}</td>
                                <td>{{ $supir->no_hp }}</td>
                                <td>{{ $supir->alamat }}</td>
                                <td>{{ $supir->username }}</td>
                                <td>{{ $supir->password }}</td>
                                <td>
                                    <a href="#" class="btn btn-secondary btn-sm" data-toggle="modal" data-placement="top" title="Edit Data Kendaraan" data-target="#ubahDataSupirModal{{ $supir->id }}"><i class="fas fa-edit fa-sm"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-placement="top" title="Hapus Data Kendaraan"  data-target="#hapusDataSupirModal{{ $supir->id }}"><i class="fas fa-trash fa-sm"></i></a>
                                </td>
                            </tr>

                            <!-- Modal Ubah Data Supir -->
                            <div class="modal fade " id="ubahDataSupirModal{{ $supir->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog " role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Ubah Data Supir</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span> 
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="ubahDataSupirForm" method="post" enctype="multipart/form-data"> 
                                                <div class="mb-3">
                                                    <label for="kodeSupir" class="form-label">Kode Supir</label>
                                                    <input type="text" name="kodeSupir" class="form-control" id="kodeSupir" autocomplete="off" value="{{ $supir->id }}" placeholder="" readonly>
                                                </div>                          
                                                <div class="mb-3">
                                                    <label for="namaSupir" class="form-label">Nama</label>
                                                    <input type="text" name="namaSupir" class="form-control" id="namaSupir" autocomplete="off" value="{{ $supir->nama }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nomorTelepon" class="form-label">Nomor Telepon</label>
                                                    <input type="text" name="nomorTelepon" class="form-control" id="nomorTelepon" autocomplete="off" value="{{ $supir->no_hp }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="alamatSupir" class="form-label">Alamat</label>
                                                    <textarea class="form-control" name="alamatSupir" id="alamatSupir" aria-label="With textarea" value="{{ $supir->alamat }}" placeholder=""></textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="namaPenggunaSupir" class="form-label">Nama Pengguna</label>
                                                    <input type="text" name="namaPenggunaSupir" class="form-control" id="namaPenggunaSupir" autocomplete="off" value="{{ $supir->username }}" placeholder="">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="kataSandiSupir" class="form-label">Kata Sandi</label>
                                                    <input type="text" name="kataSandiSupir" class="form-control" id="kataSandiSupir" autocomplete="off" value="{{ $supir->password }}" placeholder="">
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Modal Ubah Data Supir -->

                            <!-- Modal Hapus Data Supir -->
                            <div class="modal fade" id="hapusDataSupirModal{{ $supir->id }}" tabindex="-1" role="dialog" aria-labelledby="hapusDataSupirLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="hapusDataSupirLabel">Konfirmasi Hapus Data Supir</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda yakin ingin menghapus data supir <span id="namaSupirHapus"></span>?
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                            <form id="formHapusDataSupir" method="post" action="">
                                                @csrf   <!-- Menyertakan token CSRF untuk keamanan -->
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Akhir Modal Hapus Data Supir -->

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<!-- Modal Tambah Data Supir -->
<div class="modal fade " id="tambahDataSupirModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Supir</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span> 
                </button>
            </div>
            <div class="modal-body">
                <form id="tambahDataSupirForm" method="post" enctype="multipart/form-data"> 
                    <div class="mb-3">
                        <label for="kodeSupir" class="form-label">Kode Supir</label>
                        <input type="text" name="kodeSupir" class="form-control" id="kodeSupir" autocomplete="off" value="" placeholder="" readonly>
                    </div>                          
                    <div class="mb-3">
                        <label for="namaSupir" class="form-label">Nama</label>
                        <input type="text" name="namaSupir" class="form-control" id="namaSupir" autocomplete="off" value="" placeholder="Masukkan nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="nomorTelepon" class="form-label">Nomor Telepon</label>
                        <input type="text" name="nomorTelepon" class="form-control" id="nomorTelepon" autocomplete="off" value="" placeholder="08xxxxxxxxxx" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamatSupir" class="form-label">Alamat</label>
                        <textarea class="form-control" name="alamatSupir" id="alamatSupir" aria-label="With textarea" placeholder="Masukkan alamat"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="namaPenggunaSupir" class="form-label">Nama Pengguna</label>
                        <input type="text" name="namaPenggunaSupir" class="form-control" id="namaPenggunaSupir" autocomplete="off" value="" placeholder="Masukkan nama pengguna">
                    </div>
                    <div class="mb-3">
                        <label for="kataSandiSupir" class="form-label">Kata Sandi</label>
                        <input type="text" name="kataSandiSupir" class="form-control" id="kataSandiSupir" autocomplete="off" value="" placeholder="Masukkan kata sandi">
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</div>
<!-- Akhir Modal Tambah Data Supir -->

@endsection