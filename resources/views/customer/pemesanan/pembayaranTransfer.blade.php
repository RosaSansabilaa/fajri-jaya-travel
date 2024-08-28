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
                        <span class="right">Transfer Bank</span>
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

    {{-- <div class="detail-pemesanan">
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
                <span class="right">Transfer Bank</span>
            </div>
        </div>
    </div> --}}

    <div class="pilihMetodePembayaran-section">
        <h5>Metode Pembayaran Transfer Bank</h5>

        <div class="pilihMetodePembayaran-container test-section">
            {{-- <div class="icon-container">
                <i class="fa fa-upload"></i>
            </div>
            <h4>Upload Bukti Pembayaran</h4> --}}
            <div class="bank-details">
                <p>Bank: <strong>BNI</strong></p>
                <p>Nomor Rekening: <strong>2672 1537 2617 1126</strong></p>
                <p>Nama Rekening: <strong>Fajri Jaya Travel</strong></p>
            </div>

            <form id="paymentForm" action="/upload" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="paymentProof"><strong>Unggah bukti pembayaran:</strong></label>
                    <input type="file" id="paymentProof" name="paymentProof" accept="image/*, .pdf" required>
                </div>
            </form>
        </div>
    </div>

    <div class="button-container">
        <a href="{{ route('customer.pilihMetodePembayaran') }}" class="btn btn-secondary left-button" type="button">Kembali</a>
        <button class="btn right-button bookTicket-button" type="submit">Pesan Tiket Sekarang</button>
    </div>
        
</div>
@endsection