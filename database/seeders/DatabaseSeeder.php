<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kendaraan;
use App\Models\Supir;
use App\Models\Jadwal;
use App\Models\Pemesanan;
use App\Models\Pengguna;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Kendaraan::factory(5)->create();
        Supir::factory(5)->create();
        Pengguna::factory(10)->create();
        Jadwal::factory(7)->create();
        Pemesanan::factory(12)->create();

        // Kendaraan::create([
        //     'nomor_plat' => 'EA1234DA',
        //     'tipe' => 'Jetbus',
        //     'kapasitas' => '15',
        //     'keterangan' => 'Putih'
        // ]);

        // Kendaraan::create([
        //     'nomor_plat' => 'EA5728HG',
        //     'tipe' => 'Jetbus',
        //     'kapasitas' => '12',
        //     'keterangan' => 'Kuning'
        // ]);

        // Supir::create([
        //     'nama' => 'Dido',
        //     'no_hp' => '085271736661',
        //     'alamat' => 'Mataram',
        //     'username' => 'didosupir',
        //     'password' => 'dido1234'
        // ]);
        
        // Supir::create([
        //     'nama' => 'Bambang',
        //     'no_hp' => '085271736661',
        //     'alamat' => 'Sumbawa Besar',
        //     'username' => 'bambangsupir',
        //     'password' => bcrypt('bambang1234')
        // ]);

        // Supir::create([
        //     'nama' => 'Agus',
        //     'no_hp' => '085271736661',
        //     'alamat' => 'Taliwang',
        //     'username' => 'agussupir',
        //     'password' => bcrypt('agus1234')
        // ]);

        // Pengguna::create([
        //     'nama' => 'Malika',
        //     'no_hp' => '085271736661',
        //     'username' => 'malika12',
        //     'email' => 'malika@gmail.com',
        //     'password' => bcrypt('malika123')
        // ]);

        // Pengguna::create([
        //     'nama' => 'Bagus',
        //     'no_hp' => '085271736661',
        //     'username' => 'bagus12',
        //     'email' => 'bagus@gmail.com',
        //     'password' => bcrypt('bagus123')
        // ]);

        // Jadwal::create([
        //     'kendaraan_id' => '1',
        //     'supir_id' => '1',
        //     'tanggal_berangkat' => '2024-10-01',
        //     'jam_berangkat' => '10:30',
        //     'asal' => 'Sumbawa Besar',
        //     'tujuan' => 'Mataram',
        //     'kapasitas' => '15',
        //     'kursi_dipesan' => '1',
        //     'harga' => '240000'
        // ]);
        
        // Jadwal::create([
        //     'kendaraan_id' => '2',
        //     'supir_id' => '2',
        //     'tanggal_berangkat' => '2024-02-20',
        //     'jam_berangkat' => '08:30',
        //     'asal' => 'Taliwang',
        //     'tujuan' => 'Sumbawa Besar',
        //     'kapasitas' => '12',
        //     'kursi_dipesan' => '1',
        //     'harga' => '240000'
        // ]);

        // Jadwal::create([
        //     'tanggal_berangkat' => '2024-09-30',
        //     'jam_berangkat' => '11:30',
        //     'asal' => 'Mataram',
        //     'tujuan' => 'Taliwang',
        //     'kapasitas' => '15',
        //     'harga' => '120000'
        // ]);

        // Pemesanan::create([
        //     'jadwal_id' => '1',
        //     'pengguna_id' => '1',
            // 'jumlah_kursi' => '2',
            // 'nomor_kursi' => '3, 4',
            // 'nama_penumpang' => 'Miska, Abel',
            // 'tanggal_pesan' => '2024-07-11',
            // 'harga' => '240000',
            // 'total_harga' => '480000',
            // 'metode_bayar' => 'Tunai',
            // 'bukti_bayar' => '',
            // 'slug' => 'malika'
        // ]);
        
        // Pemesanan::create([
        //     'jadwal_id' => '2',
        //     'pengguna_id' => '2',
        //     'jumlah_kursi' => '1',
        //     'nomor_kursi' => '1',
        //     'nama_penumpang' => 'Intan',
        //     'tanggal_pesan' => '2024-09-13',
        //     'harga' => '120000',
        //     'total_harga' => '120000',
        //     'metode_bayar' => 'Transfer',
        //     'bukti_bayar' => '',
        //     'slug' => 'bagus'
        // ]);
    }
}
