<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aktivitas extends Model
{
    protected $fillable = [
        'id_project',
        'nama_aktivitas',
        'status_aktivitas',
        'start_aktivitas',
        'finish_aktivitas',
        'keterangan_aktivitas',
    ];
    use HasFactory;
}
