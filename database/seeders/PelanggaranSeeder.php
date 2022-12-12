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
            ['nama_pelanggaran' => 'Datang Terlambat', 'tindak_lanjut' => 'Berbaris 30 Menit', 'poin' => '10'],
            ['nama_pelanggaran' => 'Bolos Jam Pelajaran', 'tindak_lanjut' => 'Berbaris 30 Menit', 'poin' => '20'],
            ['nama_pelanggaran' => 'Berkelahi', 'tindak_lanjut' => 'Berbaris 30 Menit', 'poin' => '35'],
        ];
        foreach($data as $value){
            Pelanggaran::insert([
                "nama_pelanggaran" => $value['nama_pelanggaran'],
                "tindak_lanjut" => $value['tindak_lanjut'],
                "poin" => $value['poin']
            ]);
        }
    }
}
