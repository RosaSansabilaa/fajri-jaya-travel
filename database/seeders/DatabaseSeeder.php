<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kendaraan;
use App\Models\Supir;
use App\Models\Jadwal;
use App\Models\Pemesanan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Kendaraan::create([
            'nomor_plat' => 'EA1234DA',
            'tipe' => 'Jetbus',
            'kapasitas' => '15',
            'keterangan' => 'Putih'
        ]);

        Kendaraan::create([
            'nomor_plat' => 'EA5728HG',
            'tipe' => 'Jetbus',
            'kapasitas' => '12',
            'keterangan' => 'Kuning'
        ]);

        Supir::create([
            'nama' => 'Dido',
            'no_hp' => '085271736661',
            'alamat' => 'Mataram',
            'username' => 'didosupir',
            'password' => 'dido1234'
        ]);
        
        Supir::create([
            'nama' => 'Bambang',
            'no_hp' => '085271736661',
            'alamat' => 'Sumbawa Besar',
            'username' => 'bambangsupir',
            'password' => 'bambang1234'
        ]);

        Supir::create([
            'nama' => 'Mulyono',
            'no_hp' => '085271736661',
            'alamat' => 'Taliwang',
            'username' => 'mulyonosupir',
            'password' => 'mulyono1234'
        ]);

        Jadwal::create([
            'kendaraan_id' => '1',
            'supir_id' => '1',
            'tanggal_berangkat' => '2024-10-01',
            'jam_berangkat' => '10:30',
            'asal' => 'Sumbawa Besar',
            'tujuan' => 'Mataram',
            'kapasitas' => '15',
            'kursi_dipesan' => '1',
            'harga' => '240000'
        ]);
        
        Jadwal::create([
            'kendaraan_id' => '2',
            'supir_id' => '2',
            'tanggal_berangkat' => '2024-02-20',
            'jam_berangkat' => '08:30',
            'asal' => 'Taliwang',
            'tujuan' => 'Sumbawa Besar',
            'kapasitas' => '12',
            'kursi_dipesan' => '1',
            'harga' => '240000'
        ]);

        Jadwal::create([
            'tanggal_berangkat' => '2024-09-30',
            'jam_berangkat' => '11:30',
            'asal' => 'Mataram',
            'tujuan' => 'Taliwang',
            'kapasitas' => '15',
            'harga' => '120000'
        ]);

        Pemesanan::create([
            'tanggal_berangkat' => '2024-07-12',
            'jam_berangkat' => '12:00',
            'asal' => 'Taliwang',
            'tujuan' => 'Mataram',
            'nama_pemesan' => 'Fufufafa',
            'no_hp' => '081234514221',
            'email_pemesan' => 'chlipari@gmail.com',
            'jumlah_kursi' => '2',
            'nomor_kursi' => '3, 4',
            'nama_penumpang' => 'Raka, Gnarly',
            'tanggal_pesan' => '2024-07-11',
            'harga' => '240000',
            'total_harga' => '480000',
            'metode_bayar' => 'Tunai',
            'bukti_bayar' => '',
            'slug' => 'fufufafa'
        ]);
        
        Pemesanan::create([
            'tanggal_berangkat' => '2024-09-14',
            'jam_berangkat' => '12:20',
            'asal' => 'Sumbawa Besar',
            'tujuan' => 'Mataram',
            'nama_pemesan' => 'Putra Mulyono',
            'no_hp' => '081234514000',
            'email_pemesan' => 'mulyono@gmail.com',
            'jumlah_kursi' => '1',
            'nomor_kursi' => '1',
            'nama_penumpang' => 'Mulyono',
            'tanggal_pesan' => '2024-09-13',
            'harga' => '120000',
            'total_harga' => '120000',
            'metode_bayar' => 'Transfer',
            'bukti_bayar' => '',
            'slug' => 'putra-mulyono'
        ]);
    }
}
