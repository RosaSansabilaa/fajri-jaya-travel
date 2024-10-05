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
                            <th>Tanggal Berangkat</th>
                            <th>Jam Berangkat</th>
                            <th>Asal</th>
                            <th>Tujuan</th>
                            <th>Kendaraan</th>
                            <th>Supir</th>
                            <th>Jumlah Kursi</th>
                            <th>Kursi dipesan</th>
                            <th>Harga</th>
                            <th style="min-width: 50px">Aksi</th>
                        </tr>
                    </thead>
                    <tfoot class="text-center">
                        <tr>
                            <th>Tanggal Berangkat</th>
                            <th>Jam Berangkat</th>
                            <th>Asal</th>
                            <th>Tujuan</th>
                            <th>Kendaraan</th>
                            <th>Supir</th>
                            <th>Jumlah Kursi</th>
                            <th>Kursi dipesan</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($data_jadwal as $item_jadwal)
                        <tr class="text-center">
                            <td>{{ date('d/m/Y', strtotime($item_jadwal->tanggal_berangkat)) }}</td>
                            <td>{{ $item_jadwal->jam_berangkat }}</td>
                            <td>{{ $item_jadwal->asal }}</td>
                            <td>{{ $item_jadwal->tujuan }}</td>
                            <td>{{ $item_jadwal->kendaraan }}</td>
                            <td>{{ $item_jadwal->supir }}</td>
                            <td>{{ $item_jadwal->kapasitas }}</td>
                            <td>{{ $item_jadwal->kursi_dipesan }}</td>
                            <td>{{ $item_jadwal->harga }}</td>
                            <td>
                                <a href="#" class="btn btn-secondary btn-sm" data-toggle="modal" data-placement="top" title="Edit Jadwal Perjalanan" data-target="#ubahJadwalPerjalananModal{{ $item_jadwal->jadwal_id }}"><i class="fas fa-edit fa-sm"></i></a>
                                <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-placement="top" title="Hapus Jadwal Perjalanan"  data-target="#hapusJadwalPerjalananModal{{ $item_jadwal->jadwal_id }}"><i class="fas fa-trash fa-sm"></i></a>
                            </td>
                        </tr>
                        
                        <!-- Modal Ubah Jadwal Perjalanan -->
                        <div class="modal fade " id="ubahJadwalPerjalananModal{{ $item_jadwal->jadwal_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                <input type="date" name="tanggalKeberangkatan" class="form-control" id="tanggalKeberangkatan" autocomplete="off" value="{{ $item_jadwal->tanggal_berangkat }}" placeholder="" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="jamKeberangkatan" class="form-label">Jam Keberangkatan</label>
                                                <input type="time" name="jamKeberangkatan" class="form-control" id="jamKeberangkatan" autocomplete="off" value="{{ $item_jadwal->jam_berangkat }}" placeholder="" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="asal" class="form-label">Asal</label>
                                                <select class="form-control" name="asal" id="asal" required>
                                                    <option value="mataram" {{ $item_jadwal->asal == 'Mataram' ? 'selected' : '' }}>Mataram</option>
                                                    <option value="taliwang" {{ $item_jadwal->asal == 'Taliwang' ? 'selected' : '' }}>Taliwang</option>
                                                    <option value="sumbawa-besar" {{ $item_jadwal->asal == 'Sumbawa Besar' ? 'selected' : '' }}>Sumbawa Besar</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="tujuan" class="form-label">Tujuan</label>
                                                <select class="form-control" name="tujuan" id="tujuan" required>
                                                    <option value="mataram" {{ $item_jadwal->tujuan == 'Mataram' ? 'selected' : '' }}>Mataram</option>
                                                    <option value="taliwang" {{ $item_jadwal->tujuan == 'Taliwang' ? 'selected' : '' }}>Taliwang</option>
                                                    <option value="sumbawa-besar" {{ $item_jadwal->tujuan == 'Sumbawa Besar' ? 'selected' : '' }}>Sumbawa Besar</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="nomorPlat" class="form-label">Nomor Plat Kendaraan</label>
                                                <select class="form-control" name="nomorPlat" id="nomorPlat" required>
                                                    {{-- <option value="{{ $item_jadwal->kendaraan }}">{{ $item_jadwal->kendaraan }}</option> --}}
                                                    @foreach ($data_jadwal as $item_jadwal)
                                                        <option value="{{ $item_jadwal->kendaraan }}">{{ $item_jadwal->kendaraan }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="namaSupir" class="form-label">Nama Supir</label>
                                                <select class="form-control" name="namaSupir" id="namaSupir">
                                                    {{-- <option value="">{{ $item_jadwal->supir }}</option> --}}
                                                    @foreach ($data_jadwal as $item_jadwal)
                                                        <option value="{{ $item_jadwal->supir }}">{{ $item_jadwal->supir }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="kapasitasPenumpang" class="form-label">Jumlah Kursi</label>
                                                <input type="text" name="jumlahKursi" class="form-control" id="jumlahKursi" autocomplete="off" value="{{ $item_jadwal->kapasitas }}" placeholder="" readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="kursiDipesan" class="form-label">Jumlah Kursi Dipesan</label>
                                                <input type="text" name="kursiDipesan" class="form-control" id="kursiDipesan" autocomplete="off" value="{{ $item_jadwal->kursi_dipesan }}" placeholder="" readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="hargaTiket" class="form-label">Harga</label>
                                                <input type="number" name="hargaTiket" class="form-control" id="hargaTiket" autocomplete="off" value="{{ $item_jadwal->harga }}" step="10000" min="0" placeholder="" required>
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
                        <div class="modal fade" id="hapusJadwalPerjalananModal{{ $item_jadwal->jadwal_id }}" tabindex="-1" role="dialog" aria-labelledby="hapusJadwalPerjalananLabel" aria-hidden="true">
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
                        @endforeach
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
                            <option selected disabled hidden>Pilih asal keberangkatan</option>
                            <option value="mataram">Mataram</option>
                            <option value="taliwang">Taliwang</option>
                            <option value="sumbawa-besar">Sumbawa Besar</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tujuan" class="form-label">Tujuan</label>
                        <select class="form-control" name="tujuan" id="tujuan" required>
                            <option selected disabled hidden>Pilih tujuan perjalanan</option>
                            <option value="mataram">Mataram</option>
                            <option value="taliwang">Taliwang</option>
                            <option value="sumbawa-besar">Sumbawa Besar</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nomorPlat" class="form-label">Nomor Plat Kendaraan</label>
                        <select class="form-control" name="nomorPlat" id="nomorPlat" required>
                            <option selected disabled hidden>Pilih kendaraan yang akan digunakan</option>
                            <option value="diisi data plat">diisi data plat</option>
                            <option value="diisi data plat">diisi data plat</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="namaSupir" class="form-label">Nama Supir</label>
                        <select class="form-control" name="namaSupir" id="namaSupir">
                            <option selected disabled hidden>Pilih nama supir</option>
                            <option value="diisi nama supir">diisi nama supir</option>
                            <option value="diisi nama supir">diisi nama supir</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="kapasitasPenumpang" class="form-label">Jumlah Ketersediaan Kursi</label>
                        <input type="text" name="jumlahKursi" class="form-control" id="jumlahKursi" autocomplete="off" value="" placeholder="di sini auto ada jumlah kursi" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="kursiDipesan" class="form-label">Jumlah Kursi yang telah dipesan</label>
                        <input type="number" name="kursiDipesan" class="form-control" id="kursiDipesan" autocomplete="off" value="" placeholder="di sini auto ada jumlah kursi">
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

@endsection