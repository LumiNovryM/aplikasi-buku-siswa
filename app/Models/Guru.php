<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    # Table Name
    protected $table = 'gurus';

    # Disabled timestamp For Guru
    public $timestamps = false;

    # Fillable Field Table
    protected $guarded = [];
}
