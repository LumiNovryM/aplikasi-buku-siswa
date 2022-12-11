<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaPelanggaran extends Model
{
    use HasFactory;

    
    protected $guarded = [];

    public function pelanggaran()
    {
        return $this->belongsTo(Pelanggaran::class);
    }
    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
