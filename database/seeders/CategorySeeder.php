<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['tingkat_pelanggaran' => 'Rendah', 'poin' => 10],
            ['tingkat_pelanggaran' => 'Sedang', 'poin' => 25],
            ['tingkat_pelanggaran' => 'Tinggi', 'poin' => 35]
        ];
        foreach($data as $value){
            Category::insert([
                "tingkat_pelanggaran" => $value['tingkat_pelanggaran'],
                "poin" => $value['poin'],
            ]);
        }
    }
}
