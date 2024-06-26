@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Kelola Jadwal Perjalanan</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Jadwal Perjalanan</h6>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahJadwalPerjalananModal">Tambah Data</button>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>Tanggal Keberangkatan</th>
                            <th>Jam Keberangkatan</th>
                            <th>Asal</th>
                            <th>Tujuan</th>
                            <th>Kendaraan</th>
                            <th>Supir</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot class="text-center">
                        <tr>
                            <th>Tanggal Keberangkatan</th>
                            <th>Jam Keberangkatan</th>
                            <th>Asal</th>
                            <th>Tujuan</th>
                            <th>Kendaraan</th>
                            <th>Supir</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td> Pak Bambang</td>
                            <td> 250.000</td>
                            <td class="text-center">
                                <a href="#" class="btn btn-secondary btn-sm" data-toggle="modal" data-placement="top" title="Edit Jadwal Perjalanan" data-target="#ubahJadwalPerjalananModal"><i class="fas fa-edit fa-sm"></i></a>
                                <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-placement="top" title="Hapus Jadwal Perjalanan"  data-target="#hapusJadwalPerjalananModal"><i class="fas fa-trash fa-sm"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<!-- Modal Tambah Jadwal Perjalanan -->
<div class="modal fade " id="tambahJadwalPerjalananModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Jadwal Perjalanan</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span> 
                </button>
            </div>
            <div class="modal-body">
                <form id="tambahJadwalPerjalananForm" method="post" enctype="multipart/form-data">                           
                    <div class="mb-3">
                        <label for="tanggalKeberangkatan" class="form-label">Tanggal Keberangkatan</label>
                        <input type="date" name="tanggalKeberangkatan" class="form-control" id="tanggalKeberangkatan" autocomplete="off" value="" placeholder="Pilih tanggal keberangkatan" required>
                    </div>
                    <div class="mb-3">
                        <label for="jamKeberangkatan" class="form-label">Jam Keberangkatan</label>
                        <input type="time" name="jamKeberangkatan" class="form-control" id="jamKeberangkatan" autocomplete="off" value="" placeholder="Masukkan jam keberangkatan" required>
                    </div>
                    <div class="mb-3">
                        <label for="asal" class="form-label">Asal</label>
                        <select class="form-control" name="asal" id="asal" required>
                            <option value="">Pilih asal keberangkatan</option>
                            <option value="mataram">Mataram</option>
                            <option value="taliwang">Taliwang</option>
                            <option value="sumbawa-besar">Sumbawa Besar</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tujuan" class="form-label">Tujuan</label>
                        <select class="form-control" name="tujuan" id="tujuan" required>
                            <option value="">Pilih tujuan perjalanan</option>
                            <option value="mataram">Mataram</option>
                            <option value="taliwang">Taliwang</option>
                            <option value="sumbawa-besar">Sumbawa Besar</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nomorPlat" class="form-label">Nomor Plat Kendaraan</label>
                        <select class="form-control" name="nomorPlat" id="nomorPlat" required>
                            <option value="">Pilih kendaraan yang akan digunakan</option>
                            <option value="diisi data plat">diisi data plat</option>
                            <option value="diisi data plat">diisi data plat</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="namaSupir" class="form-label">Nama Supir</label>
                        <select class="form-control" name="namaSupir" id="namaSupir">
                            <option value="">Pilih nama supir</option>
                            <option value="diisi nama supir">diisi nama supir</option>
                            <option value="diisi nama supir">diisi nama supir</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="kapasitasPenumpang" class="form-label">Jumlah Kursi</label>
                        <input type="text" name="jumlahKursi" class="form-control" id="jumlahKursi" autocomplete="off" value="" placeholder="di sini auto ada jumlah kursi" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="hargaTiket" class="form-label">Harga</label>
                        <input type="number" name="hargaTiket" class="form-control" id="hargaTiket" autocomplete="off" value="" step="10000" min="0" placeholder="Masukkan harga tiket" required>
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
<!-- Akhir Modal Tambah Jadwal Perjalanan -->

<!-- Modal Ubah Jadwal Perjalanan -->
<div class="modal fade " id="ubahJadwalPerjalananModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubah Jadwal Perjalanan</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span> 
                </button>
            </div>
            <div class="modal-body">
                <form id="ubahJadwalPerjalananForm" method="post" enctype="multipart/form-data">                           
                    <div class="mb-3">
                        <label for="tanggalKeberangkatan" class="form-label">Tanggal Keberangkatan</label>
                        <input type="date" name="tanggalKeberangkatan" class="form-control" id="tanggalKeberangkatan" autocomplete="off" value="" placeholder="Pilih tanggal keberangkatan" required>
                    </div>
                    <div class="mb-3">
                        <label for="jamKeberangkatan" class="form-label">Jam Keberangkatan</label>
                        <input type="time" name="jamKeberangkatan" class="form-control" id="jamKeberangkatan" autocomplete="off" value="" placeholder="Masukkan jam keberangkatan" required>
                    </div>
                    <div class="mb-3">
                        <label for="asal" class="form-label">Asal</label>
                        <select class="form-control" name="asal" id="asal" required>
                            <option value="">Pilih asal keberangkatan</option>
                            <option value="mataram">Mataram</option>
                            <option value="taliwang">Taliwang</option>
                            <option value="sumbawa-besar">Sumbawa Besar</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tujuan" class="form-label">Tujuan</label>
                        <select class="form-control" name="tujuan" id="tujuan" required>
                            <option value="">Pilih tujuan perjalanan</option>
                            <option value="mataram">Mataram</option>
                            <option value="taliwang">Taliwang</option>
                            <option value="sumbawa-besar">Sumbawa Besar</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nomorPlat" class="form-label">Nomor Plat Kendaraan</label>
                        <select class="form-control" name="nomorPlat" id="nomorPlat" required>
                            <option value="">Pilih kendaraan yang akan digunakan</option>
                            <option value="diisi data plat">diisi data plat</option>
                            <option value="diisi data plat">diisi data plat</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="namaSupir" class="form-label">Nama Supir</label>
                        <select class="form-control" name="namaSupir" id="namaSupir">
                            <option value="">Pilih nama supir</option>
                            <option value="diisi nama supir">diisi nama supir</option>
                            <option value="diisi nama supir">diisi nama supir</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="kapasitasPenumpang" class="form-label">Jumlah Kursi</label>
                        <input type="text" name="jumlahKursi" class="form-control" id="jumlahKursi" autocomplete="off" value="" placeholder="di sini auto ada jumlah kursi" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="hargaTiket" class="form-label">Harga</label>
                        <input type="number" name="hargaTiket" class="form-control" id="hargaTiket" autocomplete="off" value="" step="10000" min="0" placeholder="Masukkan harga tiket" required>
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
<!-- Akhir Modal Ubah Jadwal Perjalanan -->

<!-- Modal Hapus Jadwal Perjalanan -->
<div class="modal fade" id="hapusJadwalPerjalananModal" tabindex="-1" role="dialog" aria-labelledby="hapusJadwalPerjalananLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hapusJadwalPerjalananLabel">Konfirmasi Hapus Jadwal Perjalanan</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus jadwal perjalanan?
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <form id="formHapusJadwalPerjalanan" method="post" action="">
                    @csrf   <!-- Menyertakan token CSRF untuk keamanan -->
                    @method('DELETE')
                    <button class="btn btn-danger" type="">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Akhir Modal Hapus JAdwal Perjalanan -->


@endsection