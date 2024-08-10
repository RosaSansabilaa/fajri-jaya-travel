@extends('layouts.app')

@section('content')

<section class="jumbotron">
    <div class="overlay"></div>
    <div class="jumbotron-content">
        <p class="jumbotron-heading"> Lorem, ipsum dolor sit amet consectetur adipisicing elit </p>
        <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque eos nobis perspiciatis, asperiores id fugit, iste at mollitia beatae eligendi ipsa nisi deleniti non. Quibusdam optio vitae sapiente ut laborum?</p>
    </div>
</section>

<div class="card cariJadwalPage-card">
    <h4> Cari Jadwal Perjalanan </h4>
    <div class="search-box">
        {{-- <div class="card-body"> --}}
            {{-- <form method="GET" action="{{ route('jadwal.hasilCari') }}">
                @csrf --}}

                <div class="form-group row input-search">
                    <div class="form-group col">
                        <label for="asal" class="col-lg-12 col-form-label">Asal Keberangkatan</label>

                        <div class="col-lg-12">
                            <select class="form-control @error('asal') is-invalid @enderror" name="asal" id="asal" required>
                                <option selected disabled hidden>Pilih asal keberangkatan</option>
                                <option value="mataram">Mataram</option>
                                <option value="taliwang">Taliwang</option>
                                <option value="sumbawa-besar">Sumbawa Besar</option>
                            </select>

                            @error('asal')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group col">
                        <label for="tujuan" class="col-lg-12 col-form-label">Tujuan</label>

                        <div class="col-lg-12">
                            <select class="form-control @error('tujuan') is-invalid @enderror" name="tujuan" id="tujuan" required>
                                <option selected disabled hidden>Pilih tujuan perjalanan</option>
                                <option value="mataram">Mataram</option>
                                <option value="taliwang">Taliwang</option>
                                <option value="sumbawa-besar">Sumbawa Besar</option>
                            </select>

                            @error('tujuan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group col">
                        <label for="tanggalKeberangkatan" class="col-md-12 col-form-label">Tanggal Berangkat</label>
    
                        <div class="col-md-12">
                            <input id="tanggalKeberangkatan" type="date" class="form-control @error('tanggalKeberangkatan') is-invalid @enderror" name="tanggalKeberangkatan" min="{{ date("Y-m-d", strtotime('tomorrow')) }}">
    
                            @error('tanggalKeberangkatan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="search-button-container">
                        <button type="submit" class="btn btn-primary" data-toggle="" data-target="">Cari</button>
                    </div>
                </div>
            {{-- </form> --}}
        {{-- </div> --}}
    </div>
</div>

@endsection