@extends('layouts.app')

@section('content')
<div class="card pilihMetodePembayaranPage-card">
    <h4> Metode Pembayaran </h4>

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
        <h5>Pilih Metode Pembayaran</h5>
        <div class="pilihMetodePembayaran-container">
            <div class="transferMethod-container btn">
                <div class="transferBank-content">
                    <span class="transferBank-title">Transfer Bank</span><br>
                    <span>BNI</span>
                </div>
                <div class="chevron">
                    <i class="fas fa-chevron-right"></i>
                </div>
            </div>

            <div class="transferMethod-container btn">
                <div class="transferBank-content">
                    <span class="transferBank-title">Tunai/Cash</span><br>
                    <span>Bayar langsung ke agen terdekat</span>
                </div>
                <div class="chevron">
                    <i class="fas fa-chevron-right"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="button-container">
        <a href="{{ route('customer.isiDetailPemesanan') }}" class="btn btn-secondary left-button" type="button">Kembali</a>
    </div>
        
</div>
@endsection