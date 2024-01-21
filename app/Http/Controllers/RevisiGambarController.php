<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RevisiGambarController extends Controller
{
    public function index()
    {
        return view('revisigambar', [
            'judul' => 'revisigambar'
        ]);
    }
}
