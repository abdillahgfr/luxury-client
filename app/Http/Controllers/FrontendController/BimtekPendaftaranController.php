<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PO;
use App\Http\Requests\PoRequest;
use Illuminate\Support\Str;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;

class BimtekPendaftaranController extends Controller
{
    
    public function __construct(){
        
       
    }
    
    
    public function online(){
        SEOMeta::setTitle('Pendaftaran Bimtek '. date("Y") .' | Pelnasindo');
        SEOMeta::setDescription('Pendaftaran Bimtek '. date("Y") .' Pelnasindo Dapat Dilakukan secara online atau offline dengan harga terjangkau. Dapatkan Diskon Khusus Bagi Anda yang mendaftar Bimtek Diklat Nasional Melalui Kami!, Daftarkan diri anda sekarang !');

        SEOMeta::setKeywords('pelnasindo, bimtek, jadwal bimtek, pelatihan bimtek, info bimtek 2023, jadwal bimtek hari ini, pelnasindo bimtek, info pendaftaran bimtek, bimtek nasional, bimtek keuangan, bimtek kearsipan, bimtek kepegawaian, bimtek BLUD');
        SEOMeta::setRobots('all, index, follow');
        SEOMeta::setCanonical(route('fe-pendaftaran'));


        OpenGraph::setTitle('Pendaftaran Bimtek '. date("Y") .' | Pelnasindo');
        OpenGraph::setDescription('Pendaftaran Bimtek '. date("Y") .' Pelnasindo Dapat Dilakukan secara online atau offline dengan harga terjangkau. Dapatkan Diskon Khusus Bagi Anda yang mendaftar Bimtek Diklat Nasional Melalui Kami!, Daftarkan diri anda sekarang !');
        OpenGraph::addImage(url('assets/favicons/logo.png'));
        OpenGraph::setUrl(route('fe-kotapelaksanaan'));
        OpenGraph::addProperty('site_name', 'bimtekpelatihannasional.com');
        OpenGraph::addProperty('type', 'articles');


        TwitterCard::setTitle('Pendaftaran Bimtek '. date("Y") .' | Pelnasindo');
        TwitterCard::setSite('@pelnasindo');
        TwitterCard::setDescription('Pendaftaran Bimtek '. date("Y") .' Pelnasindo Dapat Dilakukan secara online atau offline dengan harga terjangkau. Dapatkan Diskon Khusus Bagi Anda yang mendaftar Bimtek Diklat Nasional Melalui Kami!, Daftarkan diri anda sekarang !');


        JsonLd::setTitle('Pendaftaran Bimtek '. date("Y") .' | Pelnasindo');
        JsonLd::setDescription('Pendaftaran Bimtek '. date("Y") .' Pelnasindo Dapat Dilakukan secara online atau offline dengan harga terjangkau. Dapatkan Diskon Khusus Bagi Anda yang mendaftar Bimtek Diklat Nasional Melalui Kami!, Daftarkan diri anda sekarang !');
        JsonLd::addImage(url('assets/favicons/logo.png'));
        JsonLd::setType('Article');
        
         return view('Frontend.Pendaftaran');
       
    }
    
    
    
    public function pendaftaranBimtek(){
        SEOMeta::setTitle('Formulir Pendaftaran/Registrasi Bimtek '. date("Y") .' | Pelnasindo');
        SEOMeta::setDescription('Formulir Pendaftaran/Registrasi Bimtek '. date("Y") .' Pelnasindo Dapat Dilakukan secara online atau offline dengan harga terjangkau. Daftarkan diri anda sekarang !');

        SEOMeta::setKeywords('pelnasindo, bimtek, jadwal bimtek, pelatihan bimtek, info bimtek 2023, jadwal bimtek hari ini, pelnasindo bimtek, info pendaftaran bimtek, bimtek nasional, bimtek keuangan, bimtek kearsipan, bimtek kepegawaian, bimtek BLUD');
        SEOMeta::setRobots('all, index, follow');
        SEOMeta::setCanonical(route('fe-jadwal'));


        OpenGraph::setTitle('Formulir Pendaftaran/Registrasi Bimtek '. date("Y") .' | Pelnasindo');
        OpenGraph::setDescription('Formulir Pendaftaran/Registrasi Bimtek '. date("Y") .' Pelnasindo Dapat Dilakukan secara online atau offline dengan harga terjangkau. Daftarkan diri anda sekarang !');
        OpenGraph::addImage(url('assets/favicons/logo.png'));
        OpenGraph::setUrl(route('fe-kotapelaksanaan'));
        OpenGraph::addProperty('site_name', 'bimtekpelatihannasional.com');
        OpenGraph::addProperty('type', 'articles');


        TwitterCard::setTitle('Formulir Pendaftaran/Registrasi Bimtek '. date("Y") .' | Pelnasindo');
        TwitterCard::setSite('@pelnasindo');
        TwitterCard::setDescription('Formulir Pendaftaran/Registrasi Bimtek '. date("Y") .' Pelnasindo Dapat Dilakukan secara online atau offline dengan harga terjangkau. Daftarkan diri anda sekarang !');


        JsonLd::setTitle('Formulir Pendaftaran/Registrasi Bimtek '. date("Y") .' | Pelnasindo');
        JsonLd::setDescription('Formulir Pendaftaran/Registrasi Bimtek '. date("Y") .' Pelnasindo Dapat Dilakukan secara online atau offline dengan harga terjangkau. Daftarkan diri anda sekarang !');
        JsonLd::addImage(url('assets/favicons/logo.png'));
        JsonLd::setType('Article');
        return view('Frontend.PendaftaranBimtek');
    }
    
    public function pendaftaranGroup(){
         SEOMeta::setTitle('Pendaftaran Bimtek Grup '. date("Y") .' | Pelnasindo');
        SEOMeta::setDescription('Pendaftaran Bimtek Grup '. date("Y") .' Dapat Dilakukan secara inividu/personal atau grup/tim. Dapatkan Diskon Khusus Bagi Anda yang mendaftar Bimtek Diklat Nasional Melalui Kami!, Daftarkan diri anda sekarang !');

        SEOMeta::setKeywords('pelnasindo, bimtek, jadwal bimtek, pelatihan bimtek, info bimtek 2023, jadwal bimtek hari ini, pelnasindo bimtek, info pendaftaran bimtek, bimtek nasional, bimtek keuangan, bimtek kearsipan, bimtek kepegawaian, bimtek BLUD');
        SEOMeta::setRobots('all, index, follow');
        SEOMeta::setCanonical(route('fe-pendaftarangroup'));


        OpenGraph::setTitle('Pendaftaran Bimtek Grup '. date("Y") .' | Pelnasindo');
        OpenGraph::setDescription('Pendaftaran Bimtek Grup '. date("Y") .' Dapat Dilakukan secara inividu/personal atau grup/tim. Dapatkan Diskon Khusus Bagi Anda yang mendaftar Bimtek Diklat Nasional Melalui Kami!, Daftarkan diri anda sekarang !');
        OpenGraph::addImage(url('assets/favicons/logo.png'));
        OpenGraph::setUrl(route('fe-pendaftarangroup'));
        OpenGraph::addProperty('site_name', 'bimtekpelatihannasional.com');
        OpenGraph::addProperty('type', 'articles');


        TwitterCard::setTitle('Pendaftaran Bimtek Grup '. date("Y") .' | Pelnasindo');
        TwitterCard::setSite('@pelnasindo');
        TwitterCard::setDescription('Pendaftaran Bimtek Grup '. date("Y") .' Dapat Dilakukan secara inividu/personal atau grup/tim. Dapatkan Diskon Khusus Bagi Anda yang mendaftar Bimtek Diklat Nasional Melalui Kami!, Daftarkan diri anda sekarang !');


        JsonLd::setTitle('Pendaftaran Bimtek Grup '. date("Y") .' | Pelnasindo');
        JsonLd::setDescription('Pendaftaran Bimtek Grup '. date("Y") .' Dapat Dilakukan secara inividu/personal atau grup/tim. Dapatkan Diskon Khusus Bagi Anda yang mendaftar Bimtek Diklat Nasional Melalui Kami!, Daftarkan diri anda sekarang !');
        JsonLd::addImage(url('assets/favicons/logo.png'));
        JsonLd::setType('Article');
        return view('Frontend.PendaftaranGroup');
    }
    
    public function sendPo(PoRequest $poRequest){
        
        $data = $poRequest->validated();
        
        $random = Str::random(40);
        $fileBerkas = $data['berkas_po'];
        $namaFileBerkas = $random . '.' . $fileBerkas->extension();
        $fileBerkas->move(public_path('assets/file-berkas'), $namaFileBerkas);
        PO::create([
            'nama' => $data['nama'],
            'email' => $data['email'],
            'no_telp' => $data['no_telp'],
            'jk' => $data['jk'],
            'nama_instansi' => $data['nama_instansi'],
            'wilayah_instansi' => $data['wilayah_instansi'],
            'materi_bimtek' => $data['materi_bimtek'],
            'tgl_pelaksanaan' => $data['tgl_pelaksanaan'],
            'kota_pelaksanaan' => $data['kota_pelaksanaan'],
            'jml_peserta' => $data['jml_peserta'],
            'paket' => $data['paket'],
            'berkas_po' => $namaFileBerkas,
        ]);
        return redirect()->route('fe-success')->with('pesan', 'Data berhasil ditambahkan!');
        
     
    }
    


}