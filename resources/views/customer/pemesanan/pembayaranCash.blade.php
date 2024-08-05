@extends('layouts.app')

@section('content')
<div class="card pilihMetodePembayaranPage-card">
    <h4> Konfirmasi Pembayaran </h4>

    <div class="detail-pemesanan">
        <h5>Detail Perjalanan</h5>
        <div class="detailPemesanan-section detailPerjalanan-section">
            <div class="detailPemesanan-container detailPerjalanan-container">
                <p class="destination-detail">Mataram <span class="arrow">→</span> Taliwang</p>
                <p class="date-detail">Rabu, 01/01/2001</p>
                <p class="time-detail">07.30 WITA</p>
            </div>

            <div class="detailPemesanan-section dataPemesan-section">
                <h5>Data Pemesan</h5>
                <div class="detailPemesanan-container dataPemesan-container">
                    <p class="namaPemesan">Putra</p>
                    <p class="emailPemesan">putra@gmail.com</p>
                    <p class="noHpPemesan">081234567890</p>
                </div>
            </div>

            <div class="detailPemesanan-section dataPenumpang-section">
                <h5>Data Penumpang</h5>
                <div class="detailPemesanan-container dataPenumpang-container">
                    <p class="namaPenumpang">Putra</p>
                </div>
            </div>

            <div class="detailPemesanan-section detailHarga-section">
                <h5>Detail Harga</h5>
                <div class="detailPemesanan-container detailHarga-container">
                    <div class="detailHarga-content">
                        <span class="left">Harga</span>
                        <span class="right">Rp. 120.000</span>
                    </div>
                    <div class="detailHarga-content">
                        <span class="left">Jumlah Kursi</span>
                        <span class="right">1</span>
                    </div>
                    <div class="detailHarga-content total-harga">
                        <span class="left">Total</span>
                        <span class="right">Rp. 120.000</span>
                    </div>
                </div>
            </div>

            <div class="detailPemesanan-section detailHarga-section">
                <h5>Metode Pembayaran</h5>
                <span class="right">Tunai/Cash</span>
            </div>
        </div>
    </div>

    <div class="pilihMetodePembayaran-section">
        <h5>Metode Pembayaran Tunai/Cash</h5>
        <div class="pilihMetodePembayaran-container">
            <p> Silahkan mendatangi agen Fajri Jaya Travel terdekat untuk melakukan pembayaran tiket secara tunai/cash. </p>
            <p> Untuk mengetahui lokasi agen, <a href="aboutUs">klik di sini</a>. </p>
        </div>
    </div>

    <div class="button-container">
        <button class="btn btn-secondary left-button" type="button">Kembali</button>
        <button class="btn btn-primary right-button" type="submit">Pesan Tiket</button>
    </div>
        
</div>
@endsection