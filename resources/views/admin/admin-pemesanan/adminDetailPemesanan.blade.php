@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Detail Pemesanan</h1>
</div>

<!-- Content -->
<div class="row justify-content-center pb-5 pt-2">
    <div class="card shadow-lg bg-white">
        <div class="form-group row">
            <label for="kodePemesanan" class="col-sm-3 col-form-label">Kode Pemesanan</label>
            <div class="col-sm-9">
                <div class="form-control" id="kodePemesanan">000123</div>
            </div>
        </div>
        <div class="form-group row">
            <label for="tanggalKeberangkatan" class="col-sm-3 col-form-label">Tanggal Keberangkatan</label>
            <div class="col-sm-9">
                <div class="form-control" id="tanggalKeberangkatan">22/06/2024</div>
            </div>
        </div>
        <div class="form-group row">
            <label for="asal" class="col-sm-3 col-form-label">Asal</label>
            <div class="col-sm-9">
                <div class="form-control" id="asal">Mataram</div>
            </div>
        </div>
        <div class="form-group row">
            <label for="tujuan" class="col-sm-3 col-form-label">Tujuan</label>
            <div class="col-sm-9">
                <div class="form-control" id="tujuan">Taliwang</div>
            </div>
        </div>
        <div class="form-group row">
            <label for="namaPemesan" class="col-sm-3 col-form-label">Nama Pemesan</label>
            <div class="col-sm-9">
                <div class="form-control" id="namaPemesan">Putri Aprilia</div>
            </div>
        </div>
        <div class="form-group row">
            <label for="nomorTelepon" class="col-sm-3 col-form-label">Nomor Telepon</label>
            <div class="col-sm-9">
                <div class="form-control" id="nomorTelepon">082123456789</div>
            </div>
        </div>
        <div class="form-group row">
            <label for="emailPemesan" class="col-sm-3 col-form-label">Email Pemesan</label>
            <div class="col-sm-9">
                <div class="form-control" id="emailPemesan">putriaprilia@gmail.com</div>
            </div>
        </div>
        <div class="form-group row">
            <label for="nomorKursi" class="col-sm-3 col-form-label">Nomor Kursi</label>
            <div class="col-sm-9">
                <div class="form-control" id="nomorKursi">1, 2</div>
            </div>
        </div>
        <div class="form-group row">
            <label for="namaPenumpang" class="col-sm-3 col-form-label">Nama Penumpang</label>
            <div class="col-sm-9">
                <div class="form-control" id="namaPenumpang">Lily, Lulu</div>
            </div>
        </div>
        <div class="form-group row">
            <label for="tanggalPemesanan" class="col-sm-3 col-form-label">Tanggal Pemesanan</label>
            <div class="col-sm-9">
                <div class="form-control" id="tanggalPemesanan">22/06/2024</div>
            </div>
        </div>
        <div class="form-group row">
            <label for="metodePembayaran" class="col-sm-3 col-form-label">Metode Pembayaran</label>
            <div class="col-sm-9">
                <div class="form-control" id="metodePembayaran">Transfer Bank</div>
            </div>
        </div>
        <div class="form-group row">
            <label for="buktiPembayaran" class="col-sm-3 col-form-label">Bukti Pembayaran</label>
            <div class="col-sm-9">
                <div class="form-control lihat-bukti-pembayaran" data-toggle="modal" data-placement="top" title="Bukti Pembayaran" data-target="#lihatBuktiPembayaranModal">Lihat bukti pembayaran</div>
            </div>
        </div>
        <div class="form-group row">
            <label for="statusPembayaran" class="col-sm-3 col-form-label">Status Pembayaran</label>
            <div class="col-sm-3">
                <div class="form-control badge badge-pill badge-warning px-3 py-2" id="statusPembayaran">Menunggu Konfirmasi</div>
            </div>
        </div>
        <div class="d-flex justify-content-between mt-4">
            <a href="{{ route('admin.pemesanan') }}" class="btn btn-secondary" >Keluar</a>
            <button class="btn btn-primary" type="submit">Konfirmasi Pemesanan</button>
        </div>

    </div>

</div>

<!-- Modal Lihat Bukti Pembayaran -->
<div class="modal fade" id="lihatBuktiPembayaranModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Bukti Pembayaran</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span> 
        </button>
        </div>
        <div class="modal-body">
            <img src="" class="img-thumbnail">
        </div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
        </div>
    </div>
    </div>
</div>
<!-- Akhir Modal Lihat Bukti Pembayaran -->

@endsection