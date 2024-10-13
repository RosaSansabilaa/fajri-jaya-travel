<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_berangkat');
            $table->time('jam_berangkat');
            $table->enum('asal', ['Mataram', 'Sumbawa Besar', 'Taliwang']);
            $table->enum('tujuan', ['Mataram', 'Sumbawa Besar', 'Taliwang']);
            $table->string('nama_pemesan');
            $table->string('no_hp');
            $table->string('email_pemesan')->unique(); 
            $table->integer('jumlah_kursi'); 
            $table->string('nomor_kursi'); 
            $table->string('nama_penumpang');
            $table->timestamp('tanggal_pesan');
            $table->integer('harga');
            $table->integer('total_harga');
            $table->enum('metode_bayar',['Transfer', 'Tunai']);
            $table->string('bukti_bayar')->nullable();
            $table->enum('status_pemesanan', ['Terkonfirmasi', 'Menunggu konfirmasi', 'Dibatalkan'])->default('Menunggu konfirmasi');
            $table->string('slug')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemesanans');
    }
}
