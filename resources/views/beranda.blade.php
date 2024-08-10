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
            <a href="{{ route('auth.login') }}" class="btn btn-secondary">Masuk</a>
            <a href="{{ route('admin.pemesanan') }}" class="btn btn-secondary">Pesan Tiket</a>
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
            <p> 1 jsjsjdnsdnsjd hdsjjs hdsh hsbjs hsdhs hbjjj</p>
        </div>
        <i class="fas fa-chevron-right"></i>
        <i class="fas fa-chevron-down"></i>
        <div class="homepage-box">
            <p> 2 jsjsjdnsdnsjd hdsjjs hdsh hsbjs hsdhs hbjjj</p>
        </div>
        <i class="fas fa-chevron-right"></i>
        <i class="fas fa-chevron-down"></i>
        <div class="homepage-box">
            <p> 3 jsjsjdnsdnsjd hdsjjs hdsh hsbjs hsdhs hbjjj</p>
        </div>
        <i class="fas fa-chevron-right"></i>
        <i class="fas fa-chevron-down"></i>
        <div class="homepage-box">
            <p> 4 jsjsjdnsdnsjd hdsjjs hdsh hsbjs hsdhs hbjjj</p>
        </div>
        <i class="fas fa-chevron-right"></i>
        <i class="fas fa-chevron-down"></i>
        <div class="homepage-box">
            <p> 5 jsjsjdnsdnsjd hdsjjs hdsh hsbjs hsdhs hbjjj</p>
        </div>
    </div>
</div>

@endsection
