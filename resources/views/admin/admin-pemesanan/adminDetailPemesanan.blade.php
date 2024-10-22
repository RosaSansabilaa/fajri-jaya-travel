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
                <div class="form-control" id="kodePemesanan">{{ $pemesanan->id }}</div>
            </div>
        </div>
        <div class="form-group row">
            <label for="tanggalKeberangkatan" class="col-sm-3 col-form-label">Tanggal Keberangkatan</label>
            <div class="col-sm-9">
                <div class="form-control" id="tanggalKeberangkatan">{{ date('d/m/Y', strtotime(optional($pemesanan->jadwal)->tanggal_berangkat)) }}</div>
                {{-- <div class="form-control" id="tanggalKeberangkatan">{{ date('d/m/Y', strtotime($pemesanan->tanggal_berangkat)) }}</div> --}}
            </div>
        </div>
        <div class="form-group row">
            <label for="tanggalKeberangkatan" class="col-sm-3 col-form-label">Jam Keberangkatan</label>
            <div class="col-sm-9">
                <div class="form-control" id="jamKeberangkatan">{{ optional($pemesanan->jadwal)->jam_berangkat }}</div>
            </div>
        </div>
        <div class="form-group row">
            <label for="asal" class="col-sm-3 col-form-label">Asal</label>
            <div class="col-sm-9">
                <div class="form-control" id="asal">{{ optional($pemesanan->jadwal)->asal }}</div>
            </div>
        </div>
        <div class="form-group row">
            <label for="tujuan" class="col-sm-3 col-form-label">Tujuan</label>
            <div class="col-sm-9">
                <div class="form-control" id="tujuan">{{ optional($pemesanan->jadwal)->tujuan }}</div>
            </div>
        </div>
        <div class="form-group row">
            <label for="namaPemesan" class="col-sm-3 col-form-label">Nama Pemesan</label>
            <div class="col-sm-9">
                <div class="form-control" id="namaPemesan">{{ $pemesanan->nama_pemesan }}</div>
            </div>
        </div>
        <div class="form-group row">
            <label for="nomorTelepon" class="col-sm-3 col-form-label">Nomor Telepon</label>
            <div class="col-sm-9">
                <div class="form-control" id="nomorTelepon">{{ $pemesanan->no_hp }}</div>
            </div>
        </div>
        <div class="form-group row">
            <label for="emailPemesan" class="col-sm-3 col-form-label">Email Pemesan</label>
            <div class="col-sm-9">
                <div class="form-control" id="emailPemesan">{{ $pemesanan->email_pemesan }}</div>
            </div>
        </div>
        <div class="form-group row">
            <label for="jumlahKursi" class="col-sm-3 col-form-label">Jumlah Kursi</label>
            <div class="col-sm-9">
                <div class="form-control" id="jumlahKursi">{{ $pemesanan->jumlah_kursi }}</div>
            </div>
        </div>
        <div class="form-group row">
            <label for="nomorKursi" class="col-sm-3 col-form-label">Nomor Kursi</label>
            <div class="col-sm-9">
                <div class="form-control" id="nomorKursi">{{ $pemesanan->nomor_kursi }}</div>
            </div>
        </div>
        <div class="form-group row">
            <label for="namaPenumpang" class="col-sm-3 col-form-label">Nama Penumpang</label>
            <div class="col-sm-9">
                <div class="form-control" id="namaPenumpang">{{ $pemesanan->nama_penumpang }}</div>
            </div>
        </div>
        <div class="form-group row">
            <label for="tanggalPemesanan" class="col-sm-3 col-form-label">Tanggal Pemesanan</label>
            <div class="col-sm-9">
                <div class="form-control" id="tanggalPemesanan">{{ $pemesanan->tanggal_pesan }}</div>
            </div>
        </div>
        <div class="form-group row">
            <label for="hargaTiket" class="col-sm-3 col-form-label">Harga Tiket</label>
            <div class="col-sm-9">
                <div class="form-control" id="harga">Rp. {{ $pemesanan->harga }}</div>
            </div>
        </div>
        <div class="form-group row">
            <label for="totalHarga" class="col-sm-3 col-form-label">Total Harga</label>
            <div class="col-sm-9">
                <div class="form-control" id="totalHarga">Rp. {{ $pemesanan->total_harga }}</div>
            </div>
        </div>
        <div class="form-group row">
            <label for="metodePembayaran" class="col-sm-3 col-form-label">Metode Pembayaran</label>
            <div class="col-sm-9">
                <div class="form-control" id="metodePembayaran">{{ $pemesanan->metode_bayar }}</div>
            </div>
        </div>
        <div class="form-group row">
            <label for="buktiPembayaran" class="col-sm-3 col-form-label">Bukti Pembayaran</label>
            <div class="col-sm-9">
                <div class="form-control lihat-bukti-pembayaran" data-toggle="modal" data-placement="top" title="Bukti Pembayaran" data-target="#lihatBuktiPembayaranModal{{ $pemesanan->bukti_bayar }}">Lihat bukti pembayaran</div>
            </div>
        </div>
        <div class="form-group row">
            <label for="statusPemesanan" class="col-sm-3 col-form-label">Status Pemesanan</label>
            <div class="col-sm-3">
                <div class="form-control badge badge-pill badge-warning px-3 py-2" id="status-pemesanan">{{ $pemesanan->status_pemesanan }}</div>
            </div>
        </div>
        <div class="d-flex justify-content-between mt-4">
            <a href="{{ route('admin.pemesanan') }}" class="btn btn-secondary" >Keluar</a>
            <button class="btn btn-primary" type="submit">Konfirmasi Pemesanan</button>
        </div>
    </div>

</div>

<!-- Modal Lihat Bukti Pembayaran -->
<div class="modal fade" id="lihatBuktiPembayaranModal{{ $pemesanan->bukti_bayar }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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