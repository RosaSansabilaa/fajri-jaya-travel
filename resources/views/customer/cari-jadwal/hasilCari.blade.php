@extends('layouts.app')

@section('content')
<div class="card hasilCariPage-card">
    <h4> Jadwal Perjalanan </h4>

    <div class="destination-container">
        <p class="destination-text">Mataram <span class="arrow">→</span> Taliwang</p>
        <p class="date-text">Rabu, 01/01/2001</p>
    </div>

    <div class="listJadwal-container">
        <div class="listJadwal-header">
            <div class="listJadwal-item">Asal</div>
            <div class="listJadwal-item">Tujuan</div>
            <div class="listJadwal-item">Jam<br>Keberangkatan</div>
            <div class="listJadwal-item">Harga Tiket</div>
        </div>
    </div>

    <div class="result-section">
        <div class="jadwalItem-container">
            <div class="jadwal-content">
                <div class="listJadwal-item">Mataram</div>
                <div class="listJadwal-item">Taliwang</div>
                <div class="listJadwal-item">07.30 WITA</div>
                <div class="listJadwal-item">Rp. 120.000</div>
            </div>
            <button type="button" class="btn btn-primary showSeats-button">Lihat Kursi</button>
            <div class="showSeats-container">
                <div class="showSeats-content">
                    <p> Pilih kursi yang tersedia </p>
                </div>
            </div>
        </div>
    </div>
        
</div>
@endsection