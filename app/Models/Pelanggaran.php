<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggaran extends Model
{
    use HasFactory;

    # Fillabel Table
    protected $guarded = [];

    public $timestamps = false;
    # Relasi To Siswa
    public function siswa()
    {
        return $this->belongsToMany(Siswa::class, SiswaPelanggaran::class);
    }
    # Relasi To Category
    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category', 'id');
    }
}
