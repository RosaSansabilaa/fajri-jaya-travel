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
            <div class="mb-3">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahPemesananPage">Tambah Data</button>
            </div>
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
                        @foreach ($pemesanans as $pemesanan)
                        <tr class="text-center">
                            {{-- <td>{{ date('d/m/Y', strtotime($pemesanan->tanggal_berangkat)) }}</td>
                            <td>{{ $pemesanan->jam_berangkat }}</td>
                            <td>{{ $pemesanan->asal }}</td>
                            <td>{{ $pemesanan->tujuan }}</td> --}}
                            <td>{{ optional($pemesanan->jadwal)->tanggal_berangkat }}</td>
                            <td>{{ optional($pemesanan->jadwal)->jam_berangkat }}</td>
                            <td>{{ optional($pemesanan->jadwal)->asal }}</td>
                            <td>{{ optional($pemesanan->jadwal)->tujuan }}</td>
                            <td>{{ optional($pemesanan->pengguna)->nama }}</td>
                            <td>{{ $pemesanan->jumlah_kursi }}</td>
                            <td>{{ $pemesanan->total_harga }}</td>
                            {{-- <td>{{ $pemesanan->status_pemesanan }}</td> --}}
                            <td>
                                @if($pemesanan->status_pemesanan == 'Menunggu konfirmasi')
                                    <span class="badge badge-pill badge-warning">Menunggu konfirmasi</span>
                                @elseif($pemesanan->status_pemesanan == 'Terkonfirmasi')
                                    <span class="badge badge-pill badge-success">Terkonfirmasi</span>
                                @elseif($pemesanan->status_pemesanan == 'Dibatalkan')
                                    <span class="badge badge-pill badge-danger">Dibatalkan</span>
                                @endif
                            </td>
                            <td>
                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-placement="top" title="Konfirmasi Pemesanan" data-target="#konfirmasiPemesananModal{{ $pemesanan->id }}">
                                    <i class="fas fa-check fa-sm"></i>
                                </button>
                                {{-- <a href="{{ route('admin.detailPemesanan', $pemesanan->pemesanan_id) }}" class="btn btn-secondary btn-sm" data-placement="top" title="Lihat Detail Pemesanan"><i class="fas fa-search fa-sm"></i></a> --}}
                                <a href="/admin/kelola-pemesanan/{{ $pemesanan->slug }}" class="btn btn-secondary btn-sm" data-placement="top" title="Lihat Detail Pemesanan">
                                    <i class="fas fa-search fa-sm"></i>
                                </a>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-placement="top" title="Hapus Pemesanan"  data-target="#hapusPemesananModal{{ $pemesanan->id }}">
                                    <i class="fas fa-trash fa-sm"></i>
                                </button>
                            </td>
                        </tr>

                        <!-- Modal Konfirmasi Pemesanan Tiket -->
                        <div class="modal fade" id="konfirmasiPemesananModal{{ $pemesanan->id }}" tabindex="-1" role="dialog" aria-labelledby="konfirmasiPemesananLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="konfirmasiPemesananLabel">Konfirmasi Pemesanan Tiket</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah Anda yakin ingin mengonfirmasi pemesanan tiket ini?
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                        <form action="{{ route('pemesanan.konfirmasi', $pemesanan->id) }}"  method="POST">
                                            @csrf   <!-- Menyertakan token CSRF untuk keamanan -->
                                            {{-- @method('POST') --}}
                                            <button class="btn btn-primary" type="submit">Konfirmasi</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Akhir Modal Konfirmasi Pemesanan Tiket -->

                        <!-- Modal Hapus Pemesanan Tiket -->
                        <div class="modal fade" id="hapusPemesananModal{{ $pemesanan->id }}" tabindex="-1" role="dialog" aria-labelledby="hapusPemesananLabel" aria-hidden="true">
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
                                        <form action="{{ route('pemesanan.batal', $pemesanan->id) }}" method="POST">
                                            @csrf   <!-- Menyertakan token CSRF untuk keamanan -->
                                            {{-- @method('DELETE') --}}
                                            <button class="btn btn-danger" type="submit">Hapus</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
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