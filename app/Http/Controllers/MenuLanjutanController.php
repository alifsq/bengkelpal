<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuLanjutanController extends Controller
{
    public function index()
    {
        return view('menulanjutan', [
            'judul' => 'Menulanjutan'
        ]);
    }
}
