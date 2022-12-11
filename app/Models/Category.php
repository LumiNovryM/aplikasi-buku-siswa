<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

        # Disabled timestamp For Category
        public $timestamps = false;

        # Fillable Field Table
        protected $guarded = [];
}
