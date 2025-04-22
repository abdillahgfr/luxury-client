<?php

namespace App\Http\Controllers\BackendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Models\PO;
use App\Models\Materi;
use App\Models\Jadwal;



class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        $pengguna = User::count();
        $materi = Materi::count();
        $jadwal = Jadwal::count();
        $po = PO::count();
        
        return view('Backend.Pages.Dashboard.Dashboard')->
        with([
             'title' => 'Luxury Palace Oman | Dashboard',
                'dataPengguna' => $pengguna,
                'dataMateri' => $materi,
                'dataJadwal' => $jadwal,
                'dataPO' => $po
            ]);
    }
}
