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
                            <th>Tanggal Berangkat</th>
                            <th>Jam Berangkat</th>
                            <th>Asal</th>
                            <th>Tujuan</th>
                            <th>Nama Pemesan</th>
                            <th>Jumlah Kursi</th>
                            <th>Total Harga</th>
                            <th>Status Pembayaran</th>
                            <th style="min-width: 100px">Aksi</th>
                        </tr>
                    </thead>
                    <tfoot class="text-center">
                        <tr>
                            <th>Tanggal Berangkat</th>
                            <th>Jam Berangkat</th>
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
                        @foreach ($data_pemesanan as $item_pemesanan)
                        <tr class="text-center">
                            <td>{{ date('d/m/Y', strtotime($item_pemesanan["tanggal_berangkat"])) }}</td>
                            <td>{{ $item_pemesanan["jam_berangkat"] }}</td>
                            <td>{{ $item_pemesanan["asal"] }}</td>
                            <td>{{ $item_pemesanan["tujuan"] }}</td>
                            <td>{{ $item_pemesanan["nama_pemesan"] }}</td>
                            <td>{{ $item_pemesanan["jumlah_kursi"] }}</td>
                            <td>{{ $item_pemesanan["total_harga"] }}</td>
                            <td>{{ $item_pemesanan["status_bayar"] }}</td>
                            <td>
                                <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-placement="top" title="Konfirmasi Pemesanan" data-target="#konfirmasiPemesananModal{{ $item_pemesanan["pemesanan_id"] }}"><i class="fas fa-check fa-sm"></i></a>
                                <a href="{{ route('admin.detailPemesanan', $item_pemesanan["pemesanan_id"]) }}" class="btn btn-secondary btn-sm" data-placement="top" title="Lihat Detail Pemesanan"><i class="fas fa-search fa-sm"></i></a>
                                {{-- <a href="/kelola-pemesanan/{{ $item_pemesanan["slug"] }}" class="btn btn-secondary btn-sm" data-placement="top" title="Lihat Detail Pemesanan"><i class="fas fa-search fa-sm"></i></a> --}}
                                <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-placement="top" title="Hapus Pemesanan"  data-target="#hapusPemesananModal{{ $item_pemesanan["pemesanan_id"] }}"><i class="fas fa-trash fa-sm"></i></a>
                            </td>
                        </tr>
                        @endforeach
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