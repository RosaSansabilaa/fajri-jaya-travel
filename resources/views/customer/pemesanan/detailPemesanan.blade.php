@extends('layouts.app')

@section('content')
<div class="card detailPemesananPage-card">
    <h4> Isi Detail Pemesanan </h4>

    <div class="detail-pemesanan">
        <div class="detailPerjalanan-section">
            <h5>Detail Perjalanan</h5>
            <div class="detailPemesanan-container detailPerjalanan-container">
                <p class="destination-detail">Mataram <span class="arrow">→</span> Taliwang</p>
                <p class="date-detail">Rabu, 01/01/2001</p>
                <p class="time-detail">07.30 WITA</p>
            </div>
        </div>

        <div class="dataPemesan-section">
            <h5>Data Pemesan</h5>
            <div class="detailPemesanan-container dataPemesan-container">
                <form id="tambahDataPemesanForm" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="namaPemesan" class="form-label">Nama Pemesan</label>
                        <input type="text" name="namaPemesan" class="form-control" id="namaPemesan" autocomplete="off" value="" placeholder="Di sini auto ada nama pengguna" required>
                    </div>
                    <div class="mb-3">
                        <label for="emailPemesan" class="form-label">Email Pemesan</label>
                        <input type="text" name="emailPemesan" class="form-control" id="emailPemesan" autocomplete="off" value="" placeholder="Di sini auto ada email pengguna" required>
                    </div>
                    <div class="mb-3">
                        <label for="noHpPemesan" class="form-label">Nomor Telepon Pemesan</label>
                        <input type="text" name="noTelpPemesan" class="form-control" id="noTelpPemesan" autocomplete="off" value="" placeholder="Di sini auto ada nomor telepon pengguna" required>
                    </div>
                </form>
            </div>
        </div>

        <div class="dataPenumpang-section">
            <h5>Data Penumpang</h5>
            <div class="detailPemesanan-container dataPenumpang-container">
                <form id="tambahDataPenumpangForm" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="namaPenumpang" class="form-label">Nama Penumpang</label>
                        <input type="text" name="namaPenumpang" class="form-control" id="namaPenumpang" autocomplete="off" value="" placeholder="Masukkan nama penumpang" required>
                    </div>
                </form>
            </div>
        </div>

        <div class="detailHarga-section">
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
                <a href="{{ route('customer.pilihMetodePembayaran') }}">
                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="">Pilih Metode Pembayaran</button>
                </a>
            </div>
        </div>
    </div>
        
</div>
@endsection