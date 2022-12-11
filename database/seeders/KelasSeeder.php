<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['kelas' => 'X'],
            ['kelas' => 'XI'],
            ['kelas' => 'XII'],
        ];
        foreach($data as $value){
            Kelas::insert([
                "kelas" => $value['kelas']
            ]);
        }
    }
}
