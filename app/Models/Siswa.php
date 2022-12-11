<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    # Table Name
    protected $table = 'siswas';

    # Disabled timestamp For Siswa
    public $timestamps = false;

    # Fillable Field Table
    protected $guarded = [];

    # Relasi To Kelas
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas', 'id');
    }

    # Relasi To Jurusan
    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'id_jurusan', 'id');
    }

    # Relasi To Guru 
    public function guru()
    {
        return $this->belongsTo(Guru::class, 'id_guru', 'id');
    }
    # Relasi To Transaksi
    public function pelanggaran()
    {
        return $this->belongsToMany(Pelanggaran::class, SiswaPelanggaran::class);
    }

}
