<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu_lanjutan extends Model
{
    protected $fillable = [
        'nama',
        'jabatan',
    ];
    use HasFactory;
}
