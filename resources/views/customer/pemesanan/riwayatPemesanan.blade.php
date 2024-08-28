@extends('layouts.app')

@section('content')

<section class="jumbotron">
    <div class="overlay"></div>
    <div class="jumbotron-content">
        <p class="jumbotron-heading"> Lorem, ipsum dolor sit amet consectetur adipisicing elit </p>
        <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque eos nobis perspiciatis, asperiores id fugit, iste at mollitia beatae eligendi ipsa nisi deleniti non. Quibusdam optio vitae sapiente ut laborum?</p>
    </div>
</section>
<div class="card riwayatPemesananPage-card">
    <h4> Riwayat Pemesanan </h4>

    <div class="card-body riwayatPemesanan-section">
        <div class="mb-3">
            <a href="{{ route('customer.cariJadwal') }}" type="button" class="btn bookTicket-button" title="Pesan tiket">Pesan Tiket</a>
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
                <tbody class="text-center">
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td> Pak Budi</td>
                        <td><div class="status-pembayaran confirmed-status">Terkonfirmasi</div></td>
                        <td><a href="#" class="btn btn-primary ticket-button" title="Lihat tiket">Lihat Tiket</a></td>
                        <td class="text-center">
                            <a href="{{ route('customer.detailRiwayatPemesanan') }}" class="btn btn-secondary detail-button" name="detail_pemesanan" title="Lihat detail pemesanan"><i class="fas fa-search fa-sm"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td> Pak Budi</td>
                        <td><div class="status-pembayaran pending-status">Menunggu konfirmasi</div></td>
                        <td><a href="#" class="btn btn-primary ticket-button">Lihat Tiket</a></td>
                        <td class="text-center">
                            <a href="{{ route('customer.detailRiwayatPemesanan') }}" class="btn btn-secondary detail-button" name="Lihat detail pemesanan"><i class="fas fa-search fa-sm"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td> Pak Budi</td>
                        <td><div class="status-pembayaran cancel-status">Dibatalkan</div></td>
                        <td><a href="#" class="btn btn-primary ticket-button">Lihat Tiket</a></td>
                        <td class="text-center">
                            <a href="{{ route('customer.detailRiwayatPemesanan') }}" class="btn btn-secondary detail-button" name="Lihat detail pemesanan"><i class="fas fa-search fa-sm"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
        
</div>

@endsection