@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Kelola Data Kendaraan</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Kendaraan</h6>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahDataKendaraanModal">Tambah Data</button>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>Kode Kendaraan</th>
                            <th>Nomor Plat</th>
                            <th>Tipe</th>
                            <th>Kapasitas Penumpang</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot class="text-center">
                        <tr>
                            <th>Kode Kendaraan</th>
                            <th>Nomor Plat</th>
                            <th>Tipe</th>
                            <th>Kapasitas Penumpang</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($data_kendaraan as $item_kendaraan)
                            <tr class="text-center">
                                <td>{{ $item_kendaraan["kendaraan_id"] }}</td>
                                <td>{{ $item_kendaraan["nomor_plat"] }}</td>
                                <td>{{ $item_kendaraan["tipe"] }}</td>
                                <td>{{ $item_kendaraan["kapasitas"] }}</td>
                                <td>{{ $item_kendaraan["keterangan"] }}</td>
                                <td>
                                    <a href="#" class="btn btn-secondary btn-sm" data-toggle="modal" data-placement="top" title="Edit Data Kendaraan" data-target="#ubahDataKendaraanModal{{ $item_kendaraan["kendaraan_id"] }}"><i class="fas fa-edit fa-sm"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-placement="top" title="Hapus Data Kendaraan"  data-target="#hapusDataKendaraanModal{{ $item_kendaraan["kendaraan_id"] }}"><i class="fas fa-trash fa-sm"></i></a>
                                </td>
                            </tr>

                            <!-- Modal Ubah Data Kendaraan -->
                            <div class="modal fade " id="ubahDataKendaraanModal{{ $item_kendaraan["kendaraan_id"] }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog " role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Ubah Data Kendaraan</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span> 
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="ubahDataKendaraanForm" method="post" enctype="multipart/form-data">                           
                                                <div class="mb-3">
                                                    <label for="kodeKendaraan" class="form-label">Kode Kendaraan</label>
                                                    <input type="text" name="kodeKendaraan" class="form-control" id="kodeKendaraan" autocomplete="off" value="{{ $item_kendaraan["kendaraan_id"] }}" placeholder="" readonly>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nomorPlat" class="form-label">Nomor Plat</label>
                                                    <input type="text" name="nomorPlat" class="form-control" id="nomorPlat" autocomplete="off" value="{{ $item_kendaraan["nomor_plat"] }}" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="tipeKendaraan" class="form-label">Tipe</label>
                                                    <input type="text" class="form-control" name="tipeKendaraan" id="tipeKendaraan" autocomplete="off" value="{{ $item_kendaraan["tipe"] }}" placeholder="">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="kapasitasPenumpang" class="form-label">Kapasitas Penumpang</label>
                                                    <input type="number" name="kapasitasPenumpang" class="form-control" id="kapasitasPenumpang" autocomplete="off" value="{{ $item_kendaraan["kapasitas"] }}" placeholder="">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="keterangan" class="form-label">Keterangan</label>
                                                    <input type="text" name="keterangan" class="form-control" id="keterangan" autocomplete="off" value="{{ $item_kendaraan["keterangan"] }}" placeholder="">
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
                            <!-- Akhir Modal Ubah Data Kendaraan -->

                            <!-- Modal Hapus Data Kendaraan -->
                            <div class="modal fade" id="hapusDataKendaraanModal{{ $item_kendaraan["kendaraan_id"] }}" tabindex="-1" role="dialog" aria-labelledby="hapusDataKendaraanLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="hapusDataKendaraanLabel">Konfirmasi Hapus Data Kendaraan</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda yakin ingin menghapus data kendaraan <span id="kodeKendaraanHapus"></span>?
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                            <form id="formHapusDataKendaraan" method="post" action="">
                                                @csrf   <!-- Menyertakan token CSRF untuk keamanan -->
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Modal Hapus Data Kendaraan -->

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<!-- Modal Tambah Data Kendaraan -->
<div class="modal fade " id="tambahDataKendaraanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kendaraan</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span> 
                </button>
            </div>
            <div class="modal-body">
                <form id="tambahDataKendaraanForm" method="post" enctype="multipart/form-data">                           
                    <div class="mb-3">
                        <label for="kodeKendaraan" class="form-label">Kode Kendaraan</label>
                        <input type="text" name="kodeKendaraan" class="form-control" id="kodeKendaraan" autocomplete="off" value="{{ $item_kendaraan["kendaraan_id"] +1 }}" placeholder="" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="nomorPlat" class="form-label">Nomor Plat</label>
                        <input type="text" name="nomorPlat" class="form-control" id="nomorPlat" autocomplete="off" value="" placeholder="Masukkan nomor plat kendaraan" required>
                    </div>
                    <div class="mb-3">
                        <label for="tipeKendaraan" class="form-label">Tipe</label>
                        <input class="form-control" name="tipeKendaraan" id="tipeKendaraan" aria-label="With textarea" placeholder="Masukkan tipe kendaraan">
                    </div>
                    <div class="mb-3">
                        <label for="kapasitasPenumpang" class="form-label">Kapasitas Penumpang</label>
                        <input type="number" name="kapasitasPenumpang" class="form-control" id="kapasitasPenumpang" autocomplete="off" value="" placeholder="Masukkan kapasitas penumpang">
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" id="keterangan" autocomplete="off" value="" placeholder="Masukkan keterangan">
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
<!-- Akhir Modal Tambah Data Kendaraan -->

@endsection