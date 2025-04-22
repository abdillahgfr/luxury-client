<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\KontakRequest;
use App\Models\Kontak;
class KontakController extends Controller
{
    
    public function __construct(){
        
       
    }
    public function index(){
        
        return view('Frontend.Kontak');
    }
    
    public function save(KontakRequest $kontakRequest){
          
        $data =  $kontakRequest->validated();
        Kontak::create([
            'nama' => $data['nama'],
            'email' => $data['email'],
            'no_telp' => $data['no_telp'],
            'perihal' => $data['perihal'],
            'pesan' => $data['pesan'],
           
        ]);
        return redirect()->route('fe-kontak')->with('pesan', 'Pesan Anda Terkirim, Terima Kasih!');
        
        return view('Frontend.Kontak');
    }


}