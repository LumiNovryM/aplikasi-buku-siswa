<?php

namespace Database\Seeders;

use App\Models\Pelanggaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PelanggaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nama_pelanggaran' => 'Datang Terlambat', 'tindak_lanjut' => 'Berbaris 30 Menit', 'id_category' => 1],
            ['nama_pelanggaran' => 'Bolos Jam Pelajaran', 'tindak_lanjut' => 'Teguran', 'id_category' => 2],
            ['nama_pelanggaran' => 'Tawuran', 'tindak_lanjut' => 'Panggilan Orang Tua', 'id_category' => 3],
            ['nama_pelanggaran' => 'Berkelahi', 'tindak_lanjut' => 'Panggilan Orang Tua', 'id_category' => 3],
            ['nama_pelanggaran' => 'Rambut Panjang', 'tindak_lanjut' => 'Teguran', 'id_category' => 1],
        ];
        foreach($data as $value){
            Pelanggaran::insert([
                "nama_pelanggaran" => $value['nama_pelanggaran'],
                "tindak_lanjut" => $value['tindak_lanjut'],
                "id_category" => $value['id_category']
            ]);
        }
    }
}
