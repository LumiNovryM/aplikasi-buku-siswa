<?php

namespace Database\Factories;
use Faker\Factory as faker;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = faker::create();
        return [
            'nama' => $faker->name(),
            'id_kelas' => Arr::random(['1','2','3']),
            'id_jurusan' => Arr::random(['1','2','3','4','5','6','7','8','10','11']),
            'id_guru' => Arr::random(['1','2','3','4','5','6','7','8','9','10']),
            'jenis_kelamin' => Arr::random(['Laki-Laki','Perempuan'])
        ];
    }
}
