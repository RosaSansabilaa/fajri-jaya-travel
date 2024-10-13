<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kendaraan_id')->nullable();  //constrained -> memberitahu laravel bahwa kendaraan_id merujuk pada tabel kendaraan
            $table->foreignId('supir_id')->nullable();  //onDelete(cascade) -> agar ketika record/data di hapus di tabel supirs, maka akan dihapus juga pada tabel jadwal
            $table->date('tanggal_berangkat');
            $table->time('jam_berangkat');
            // $table->string('asal');
            $table->set('asal', ['Mataram', 'Sumbawa Besar', 'Taliwang']);
            // $table->string('tujuan');
            $table->set('tujuan', ['Mataram', 'Sumbawa Besar', 'Taliwang']);
            // $table->set('kendaraan', ['EA1234DA', 'EA5343GH', 'EA5728HG'])->nullable();
            // $table->set('supir', ['Budi', 'Surya', 'Brando'])->nullable();
            $table->integer('kapasitas');
            $table->integer('kursi_dipesan')->nullable();
            $table->integer('harga');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwals');
    }
}
