@extends('layouts.app')

@section('content')
{{-- <div class="jumbotron homepage-jumbotron">
    <div class="jumbotron-content">
        <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit </p>
        <a> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque eos nobis perspiciatis, asperiores id fugit, iste at mollitia beatae eligendi ipsa nisi deleniti non. Quibusdam optio vitae sapiente ut laborum?</a>
        <div class="d-flex jumbotron-button">
            <a href="{{ route('auth.login') }}" class="btn btn-secondary">Masuk</a>
            <a href="{{ route('admin.pemesanan') }}" class="btn btn-secondary">Pesan Tiket</a>
        </div>
    </div>
</div> --}}


<section class="jumbotron cariJadwal-jumbotron">
    <div class="overlay"></div>
    <div class="jumbotron-content">
        <p class="jumbotron-heading"> Lorem, ipsum dolor sit amet consectetur adipisicing elit </p>
        <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque eos nobis perspiciatis, asperiores id fugit, iste at mollitia beatae eligendi ipsa nisi deleniti non. Quibusdam optio vitae sapiente ut laborum?</p>
        <div class="d-flex jumbotron-button">
            <a href="{{ route('auth.login') }}" class="btn">Masuk</a>
            <a href="{{ route('customer.cariJadwal') }}" class="btn">Pesan Tiket</a>
        </div>
    </div>
</section>


<div class="card homepage-card">
    <h4> Kenapa harus memilih Fajri Jaya Travel? </h4>
    <div class="section section-top">
        <div class="homepage-box">
            <img src="" alt="Icon">
            <p> Ini adalah text ywehwehsklk dshgasu dsakd hsgdis jshdka hhgj </p>
        </div>
        <div class="homepage-box">
            <img src="" alt="Icon">
            <p> Ini adalah text shjdsehwuesheiw </p>
        </div>
        <div class="homepage-box">
            <img src="" alt="Icon">
            <p> Ini adalah text wwwwwq whdjshiw jwjwhsjijhjjhjj</p>
        </div>
    </div>

    <div id="divider"></div>
    
    <h4> Cara pemesanan </h4>
    <div class="section section-bottom">
        <div class="homepage-box">
            <p>Masuk atau daftar akun</p>
        </div>
        <i class="fas fa-chevron-right"></i>
        <i class="fas fa-chevron-down"></i>
        <div class="homepage-box">
            <p>Memilih jadwal perjalanan yang diinginkan</p>
        </div>
        <i class="fas fa-chevron-right"></i>
        <i class="fas fa-chevron-down"></i>
        <div class="homepage-box">
            <p>Mengisi detail pemesanan</p>
        </div>
        <i class="fas fa-chevron-right"></i>
        <i class="fas fa-chevron-down"></i>
        <div class="homepage-box">
            <p>Memilih metode pembayaran dan mengunggah bukti pembayaran</p>
        </div>
        <i class="fas fa-chevron-right"></i>
        <i class="fas fa-chevron-down"></i>
        <div class="homepage-box">
            <p>Cetak tiket</p>
        </div>
    </div>
</div>

@endsection
