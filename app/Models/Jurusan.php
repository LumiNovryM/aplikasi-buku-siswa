<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    # Fillable Field Table
    protected $guarded = [];

    # Disabled timestamp For Jurusan
    public $timestamps = false;
}
