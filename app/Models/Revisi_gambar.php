<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revisi_gambar extends Model
{
    protected $fillable = [
        'id_project',
        'status_revisi',
        'judul_revisi',
        'keterangan_revisi',
    ];
    use HasFactory;
}
