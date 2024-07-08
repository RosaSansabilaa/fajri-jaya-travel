@extends('layouts.app')

@section('content')
<div class="jumbotron homepage-jumbotron">
    <h1> Lorem, ipsum dolor sit amet consectetur adipisicing elit </h1>
    <a> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque eos nobis perspiciatis, asperiores id fugit, iste at mollitia beatae eligendi ipsa nisi deleniti non. Quibusdam optio vitae sapiente ut laborum?</a>
    <div class="d-flex jumbotron-button">
        <a href="{{ route('auth.login') }}" class="btn btn-secondary">Masuk</a>
        <a href="{{ route('admin.pemesanan') }}" class="btn btn-secondary">Pesan Tiket</a>
    </div>
</div>

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
            <p> jsjsjdnsdnsjd hdsjjs hdsh hsbjs hsdhs hbjjj</p>
        </div>
        <i class="fas fa-chevron-right"></i>
        <div class="homepage-box">
            <p> jsjsjdnsdnsjd hdsjjs hdsh hsbjs hsdhs hbjjj</p>
        </div>
        <i class="fas fa-chevron-right"></i>
        <div class="homepage-box">
            <p> jsjsjdnsdnsjd hdsjjs hdsh hsbjs hsdhs hbjjj</p>
        </div>
        <i class="fas fa-chevron-right"></i>
        <div class="homepage-box">
            <p> jsjsjdnsdnsjd hdsjjs hdsh hsbjs hsdhs hbjjj</p>
        </div>
        <i class="fas fa-chevron-right"></i>
        <div class="homepage-box">
            <p> jsjsjdnsdnsjd hdsjjs hdsh hsbjs hsdhs hbjjj</p>
        </div>
    </div>
</div>

@endsection
