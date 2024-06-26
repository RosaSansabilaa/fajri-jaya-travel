@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Kelola Pemesanan</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pemesanan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>Tanggal Keberangkatan</th>
                            <th>Asal</th>
                            <th>Tujuan</th>
                            <th>Nama Pemesan</th>
                            <th>Jumlah Kursi</th>
                            <th>Total Harga</th>
                            <th>Status Pembayaran</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot class="text-center">
                        <tr>
                            <th>Tanggal Keberangkatan</th>
                            <th>Asal</th>
                            <th>Tujuan</th>
                            <th>Nama Pemesan</th>
                            <th>Jumlah Kursi</th>
                            <th>Total Harga</th>
                            <th>Status Pembayaran</th>
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
                            <td> Pak Budi</td>
                            <td> 250.000</td>
                            <td class="text-center">
                                <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-placement="top" title="Konfirmasi Pemesanan" data-target="#konfirmasiPemesananModal"><i class="fas fa-check fa-sm"></i></a>
                                <a href="{{ route('admin.detailPemesanan') }}" class="btn btn-secondary btn-sm" data-placement="top" title="Lihat Detail Pemesanan"><i class="fas fa-search fa-sm"></i></a>
                                <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-placement="top" title="Hapus Pemesanan"  data-target="#hapusPemesananModal"><i class="fas fa-trash fa-sm"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->


<!-- Modal Hapus Pemesanan Tiket -->
<div class="modal fade" id="hapusPemesananModal" tabindex="-1" role="dialog" aria-labelledby="hapusPemesananLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hapusPemesananLabel">Konfirmasi Hapus Pemesanan Tiket</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus data pemesanan tiket?
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <form id="formHapusPemesanan" method="post" action="">
                    @csrf   <!-- Menyertakan token CSRF untuk keamanan -->
                    @method('DELETE')
                    <button class="btn btn-danger" type="">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Akhir Modal Hapus Pemesanan Tiket -->


@endsection