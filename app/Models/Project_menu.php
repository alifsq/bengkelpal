<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project_menu extends Model
{
    protected $fillable = [
        'nama_project',
        'start_project',
        'finish_project',
        'keterangan_project',
    ];
    use HasFactory;

}
