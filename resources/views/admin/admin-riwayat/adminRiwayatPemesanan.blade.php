@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Riwayat Pemesanan</h1>

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
                            <th>Status Pemesanan</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($riwayat_pemesanans as $riwayat)
                        <tr class="text-center">
                            <td>{{ date('d/m/Y', strtotime(optional($riwayat->pemesanan)->tanggal_berangkat)) }}</td>
                            <td>{{ optional($riwayat->pemesanan)->jam_berangkat }}</td>
                            <td>{{ optional($riwayat->pemesanan)->asal }}</td>
                            <td>{{ optional($riwayat->pemesanan)->tujuan }}</td>
                            <td>{{ optional($riwayat->pemesanan)->nama_pemesan }}</td>
                            <td>{{ $riwayat->jumlah_kursi }}</td>
                            <td>{{ $riwayat->total_harga }}</td>
                            {{-- <td>{{ $riwayat->status_pemesanan }}</td> --}}
                            <td>
                                @if($riwayat->status_pemesanan == 'Terkonfirmasi')
                                    <span class="badge badge-pill badge-success">Terkonfirmasi</span>
                                @elseif($riwayat->status_pemesanan == 'Dibatalkan')
                                    <span class="badge badge-pill badge-danger">Dibatalkan</span>
                                @endif
                            </td>
                            <td>
                                {{-- <a href="/admin/kelola-pemesanan/{{ $riwayat->slug }}" class="btn btn-secondary btn-sm" data-placement="top" title="Lihat Detail Pemesanan"><i class="fas fa-search fa-sm"></i></a> --}}
                                {{-- <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-placement="top" title="Hapus Pemesanan"  data-target="#hapusPemesananModal{{ $pemesanan->pemesanan_id }}"><i class="fas fa-trash fa-sm"></i></a> --}}
                            </td>
                        </tr>

                        <!-- Modal Hapus Pemesanan Tiket -->
                        {{-- <div class="modal fade" id="hapusPemesananModal{{ $riwayat->pemesanan_id }}" tabindex="-1" role="dialog" aria-labelledby="hapusPemesananLabel" aria-hidden="true">
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
                        </div> --}}
                        <!-- Akhir Modal Hapus Pemesanan Tiket -->
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

@endsection