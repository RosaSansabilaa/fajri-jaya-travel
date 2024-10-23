<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PemesananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'jadwal_id' => mt_rand(1,7),
            'pengguna_id' => mt_rand(1,10),
            'jumlah_kursi' => $jumlahKursi = $this->faker->numberBetween(1, 10),
            'nomor_kursi' => $this->generateNomorKursi($jumlahKursi), // Menghasilkan nomor kursi berdasarkan jumlah kursi yang dipesan
            'nama_penumpang' => $this->generateNamaPenumpang($jumlahKursi), // Menghasilkan nama penumpang berdasarkan jumlah kursi
            'tanggal_pesan' => $this->faker->dateTimeThisYear(),
            'harga' => $harga = $this->faker->randomElement(['50000', '120000', '180000']),
            'total_harga' => $this->calculateTotalHarga($harga, $jumlahKursi), // Menghitung total harga tiket
            'metode_bayar' => $this->faker->randomElement(['Tunai', 'Transfer']),
            'bukti_bayar' => '',
            'slug' => $this->faker->slug(),
        ];
    }

    private function generateNomorKursi($jumlahKursi)
    {
        $seatNumbers = [];
        
        for ($i = 1; $i <= $jumlahKursi; $i++) {
            $seatNumbers[] = $this->faker->numberBetween(1, 15); // Nomor kursi antara 1 hingga 15
        }

        // Menghapus duplikasi dan mengurutkan nomor kursi
        $seatNumbers = array_unique($seatNumbers);
        sort($seatNumbers);
        
        return implode(', ', $seatNumbers); // Menggabungkan nomor kursi dengan koma
    }

    private function generateNamaPenumpang($jumlahKursi)
    {
        $names = [];
        
        for ($i = 0; $i < $jumlahKursi; $i++) {
            $names[] = $this->faker->name(); // Menghasilkan nama acak
        }

        return implode(', ', $names); // Menggabungkan nama-nama dengan koma
    }

    private function calculateTotalHarga($hargaPerKursi, $jumlahKursi)
    {
        return $hargaPerKursi * $jumlahKursi; // Menghitung total harga tiket
    }
}
