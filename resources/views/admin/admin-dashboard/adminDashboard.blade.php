@extends('layouts.admin')

@section('content')

<body>
    <!-- Begin Page Content -->
    <div class="container-fluid h-100">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Dashboard Admin</h1>

        <div class="dashboard-page">
        <div class="dashboard-box">
            <div class="top-section bg-gray-600 text-gray-100">
                <a>Selamat datang <br> di dashboard admin</a>
            </div>
            <div class="bottom-section bg-gray-200 d-flex justify-content-between">
                <a href="{{ route('admin.pemesanan') }}" class="btn btn-primary" >Lihat Data Pemesanan</a>
                <a href="{{ route('admin.jadwalPerjalanan') }}" class="btn btn-primary" >Lihat Jadwal Perjalanan</a>
            </div>
            
            
        </div>
        </div>
    </div>
</body>

@endsection