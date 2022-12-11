<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    # Table Name
    protected $table = 'kelas';

    # Disabled timestamp For Kelas
    public $timestamps = false;

    # Fillable Field Table
    protected $guarded = [];

    # Relasi To Siswa
    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'id', 'id_kelas');
    }
}
