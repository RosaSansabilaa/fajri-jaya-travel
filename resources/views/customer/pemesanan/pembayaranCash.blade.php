@extends('layouts.app')

@section('content')
<div class="card pilihMetodePembayaranPage-card konfirmasiPembayaranPage-card">
    <h4> Konfirmasi Pembayaran </h4>

    <div class="detail-pemesanan">
        <h5>Detail Pemesanan</h5>
        <div class="detailPemesanan-section detailPerjalanan-section">
            <div class="detailPemesanan-container detailPerjalanan-container">
                <p class="destination-detail">Mataram <span class="arrow">→</span> Taliwang</p>
                <p class="date-detail">Rabu, 01/01/2001</p>
                <p class="time-detail">07.30 WITA</p>
            </div>

            <div class="detailPemesanan-container">
                <span>Data Pemesan</span>
                <div class="">
                    <div class="justify-content detailPemesan-content">
                        <span class="left">Nama pemesan</span>
                        <span class="right">Putra</span>
                    </div>
                    <div class="justify-content detailPemesan-content">
                        <span class="left">Email pemesan</span>
                        <span class="right">Putra@gmail.com</span>
                    </div>
                    {{-- <p class="namaPemesan">Putra</p>
                    <p class="emailPemesan">putra@gmail.com</p>
                    <p class="noHpPemesan">081234567890</p> --}}
                </div>
            </div>

            <div class="detailPemesanan-container">
                <span>Data Penumpang</span>
                <div class="detailPemesanan-container dataPenumpang-container">
                    <div class="justify-content detailPenumpang-content">
                        <span class="left">Nama penumpang</span>
                        <span class="right">Putra</span>
                    </div>
                    <div class="justify-content detailPenumpang-content">
                        <span class="left">Nomor kursi</span>
                        <span class="right">12</span>
                    </div>
                    {{-- <p class="namaPenumpang">Putra</p> --}}
                </div>
            </div>

            <div class="detailPemesanan-container">
                {{-- <span>Metode Pembayaran</span> --}}
                <div class="detailPemesanan-container metodePembayaran-container">
                    <div class="justify-content metodePembayaran-content">
                        <span class="left" style="font-weight: 700; font-size: 17px;">Metode Pembayaran</span>
                        {{-- <span class="left">Transfer Bank</span> --}}
                        <span class="right">Tunai/cash</span>
                    </div>
                </div>
            </div>

            <div class="detailPemesanan-container">
                <span>Detail Harga</span>
                <div class="detailPemesanan-container detailHarga-container">
                    <div class="justify-content detailHarga-content">
                        <span class="left">Harga</span>
                        <span class="right">Rp. 120.000</span>
                    </div>
                    <div class="justify-content detailHarga-content">
                        <span class="left">Jumlah kursi</span>
                        <span class="right">1</span>
                    </div>
                    <div class="justify-content detailHarga-content total-harga">
                        <span class="left">Total</span>
                        <span class="right">Rp. 120.000</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pilihMetodePembayaran-section">
        <h5>Metode Pembayaran Tunai/Cash</h5>
        <div class="pilihMetodePembayaran-container">
            <p><strong> Silahkan mendatangi agen Fajri Jaya Travel terdekat untuk melakukan pembayaran tiket secara tunai/cash. </strong></p>
            <p> Untuk mengetahui lokasi agen, <a href="aboutUs">klik di sini</a>. </p>
        </div>
    </div>

    <div class="button-container">
        <a href="{{ route('customer.pilihMetodePembayaran') }}" class="btn btn-secondary left-button" type="button">Kembali</a>
        <button class="btn right-button bookTicket-button" type="submit">Pesan Tiket Sekarang</button>
    </div>
        
</div>
@endsection