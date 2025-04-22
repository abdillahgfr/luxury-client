<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\Materi;
use App\Models\Galeri;
use Illuminate\Support\Str;

class SeoController extends Controller
{
    
    public function __construct(){
        
       
    }
    public function feed(){
        $dataMateri = Materi::all();
        return response()->view('rss', compact('dataMateri'))->header('Content-Type', 'application/xml');
    }
   
    public function sitemap(){
        $jadwal = Jadwal::all();
        $materi = Materi::all();
        return response()->view('sitemap',
        [
            'jadwalBimtek' => $jadwal,
            'materiBimtek' => $materi,
        ])->header('Content-Type', 'text/xml');
    }
    


}