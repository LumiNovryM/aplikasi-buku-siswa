<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['jurusan' => 'PPLG 1'],
            ['jurusan' => 'PPLG 2'],
            ['jurusan' => 'PPLG 3'],
            ['jurusan' => 'BRF'],
            ['jurusan' => 'TKJT 1'],
            ['jurusan' => 'TKJT 2'],
            ['jurusan' => 'MM 1'],
            ['jurusan' => 'MM 2'],
            ['jurusan' => 'MM 3'],
            ['jurusan' => 'MM 4'],
            ['jurusan' => 'TE'],
        ];
        foreach($data as $value){
            Jurusan::insert([
                "jurusan" => $value['jurusan']
            ]);
        }
    }
}
