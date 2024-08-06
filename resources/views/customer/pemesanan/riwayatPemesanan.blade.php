@extends('layouts.app')

@section('content')
<div class="card riwayatPemesananPage-card">
    <h4> Riwayat Pemesanan </h4>

    <div class="card-body">
        <div class="mb-3">
            <a href="{{ route('customer.cariJadwal') }}" type="button" class="btn btn-primary">Pesan Tiket</a>
        </div>
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
                            <th>Tiket</th>
                            <th>Aksi</th>
                    </tr>
                </thead>
                {{-- <tfoot class="text-center">
                    <tr>
                        <th>Tanggal Keberangkatan</th>
                        <th>Asal</th>
                        <th>Tujuan</th>
                        <th>Nama Pemesan</th>
                        <th>Jumlah Kursi</th>
                        <th>Total Harga</th>
                        <th>Status Pembayaran</th>
                        <th>Tiket</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot> --}}
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td> Pak Budi</td>
                        <td> 250.000</td>
                        <td><a href="#" class="btn btn-primary ticket">Lihat Tiket</a></td>
                        <td class="text-center">
                            <a href="{{ route('customer.detailRiwayatPemesanan') }}" class="btn btn-secondary details"><i class="fas fa-search fa-sm"></i></a>
                            {{-- <a href="{{ route('admin.detailPemesanan') }}" class="btn btn-secondary btn-sm" data-placement="top" title="Lihat Detail Pemesanan"><i class="fas fa-search fa-sm"></i></a>
                            <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-placement="top" title="Hapus Pemesanan"  data-target="#hapusPemesananModal"><i class="fas fa-trash fa-sm"></i></a> --}}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="detail-pemesanan">
        <h5>Detail Perjalanan</h5>
        <div class="detailPemesanan-section detailPerjalanan-section">
            
        </div>
    </div>

    <div class="pilihMetodePembayaran-section">
        <h5>Metode Pembayaran Transfer Bank</h5>

        <div class="pilihMetodePembayaran-container">
            
        </div>
    </div>

    <div class="button-container">
        <a href="{{ route('customer.pilihMetodePembayaran') }}" class="btn btn-secondary left-button" type="button">Kembali</a>
        <button class="btn btn-primary right-button" type="submit">Pesan Tiket</button>
    </div>
        
</div>

@endsection