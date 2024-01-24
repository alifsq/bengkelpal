<?php


namespace App\Http\Controllers;

use App\Models\Menu_lanjutan;
use App\Models\Project_menu;
use App\Models\Tool;

class DashboardController extends Controller
{
    public function index()
    {

        return view('dashboard', [
            'judul' => 'Dashboard',
            'sidebar'=>'Dashboard',
            'jml_project'=>Project_menu::count(),
            'jml_person'=>Menu_lanjutan::count(),
            'jml_toolsnon'=>Tool::where('status_tools','Non Aktif')->count(),
            'jml_toolsactive'=>Tool::where('status_tools','Aktif')->count(),

        ]);
    }
}
