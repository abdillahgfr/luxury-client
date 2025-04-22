<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;

class KotaPelaksanaanController extends Controller
{
    
    public function __construct(){
        
       
    }
    public function index(){
        SEOMeta::setTitle('Kota Pelaksanaan Bimtek PELNASINDO '. date("Y") .' | Pelnasindo');
        SEOMeta::setDescription('Kota Pelaksaaan Bimtek / Diklat Tahun ' . date("Y") . ' Dapat Dilaksanakan di Seluruh Provinsi/Kabupaten/Kota di Indonesia Sesuai Permintaan dari calon peserta Bimtek / Diklat. Daftar Sekarang !');

        SEOMeta::setKeywords('pelnasindo, bimtek, jadwal bimtek, pelatihan bimtek, info bimtek 2023, jadwal bimtek hari ini, pelnasindo bimtek, info pendaftaran bimtek, bimtek nasional, bimtek keuangan, bimtek kearsipan, bimtek kepegawaian, bimtek BLUD');
        SEOMeta::setRobots('all, index, follow');
        SEOMeta::setCanonical(route('fe-jadwal'));


        OpenGraph::setTitle('Kota Pelaksanaan Bimtek PELNASINDO '. date("Y") .' | Pelnasindo');
        OpenGraph::setDescription('Kota Pelaksaaan Bimtek / Diklat Tahun ' . date("Y") . ' Dapat Dilaksanakan di Seluruh Provinsi/Kabupaten/Kota di Indonesia Sesuai Permintaan dari calon peserta Bimtek / Diklat. Daftar Sekarang !');
        OpenGraph::addImage(url('assets/favicons/logo.png'));
        OpenGraph::setUrl(route('fe-kotapelaksanaan'));
        OpenGraph::addProperty('site_name', 'bimtekpelatihannasional.com');
        OpenGraph::addProperty('type', 'articles');


        TwitterCard::setTitle('Kota Pelaksanaan Bimtek PELNASINDO '. date("Y") .' | Pelnasindo');
        TwitterCard::setSite('@pelnasindo');
        TwitterCard::setDescription('Kota Pelaksaaan Bimtek / Diklat Tahun ' . date("Y") . ' Dapat Dilaksanakan di Seluruh Provinsi/Kabupaten/Kota di Indonesia Sesuai Permintaan dari calon peserta Bimtek / Diklat. Daftar Sekarang !');


        JsonLd::setTitle('Kota Pelaksanaan Bimtek PELNASINDO '. date("Y") .' | Pelnasindo');
        JsonLd::setDescription('Kota Pelaksaaan Bimtek / Diklat Tahun ' . date("Y") . ' Dapat Dilaksanakan di Seluruh Provinsi/Kabupaten/Kota di Indonesia Sesuai Permintaan dari calon peserta Bimtek / Diklat. Daftar Sekarang !');
        JsonLd::addImage(url('assets/favicons/logo.png'));
        JsonLd::setType('Article');
        
        return view('Frontend.KotaPelaksanaan');
    }
    
    public function kotapelaksanaanDetail(){
         SEOMeta::setTitle('Kota Pelaksanaan Bimtek PELNASINDO '. date("Y") .' | Pelnasindo');
        SEOMeta::setDescription('Kota Pelaksaaan Bimtek / Diklat Tahun ' . date("Y") . ' Dapat Dilaksanakan di Seluruh Provinsi/Kabupaten/Kota di Indonesia Sesuai Permintaan dari calon peserta Bimtek / Diklat. Daftar Sekarang !');

        SEOMeta::setKeywords('pelnasindo, bimtek, jadwal bimtek, pelatihan bimtek, info bimtek 2023, jadwal bimtek hari ini, pelnasindo bimtek, info pendaftaran bimtek, bimtek nasional, bimtek keuangan, bimtek kearsipan, bimtek kepegawaian, bimtek BLUD');
        SEOMeta::setRobots('all, index, follow');
        SEOMeta::setCanonical(route('fe-jadwal'));


        OpenGraph::setTitle('Kota Pelaksanaan Bimtek PELNASINDO '. date("Y") .' | Pelnasindo');
        OpenGraph::setDescription('Kota Pelaksaaan Bimtek / Diklat Tahun ' . date("Y") . ' Dapat Dilaksanakan di Seluruh Provinsi/Kabupaten/Kota di Indonesia Sesuai Permintaan dari calon peserta Bimtek / Diklat. Daftar Sekarang !');
        OpenGraph::addImage(url('assets/favicons/logo.png'));
        OpenGraph::setUrl(route('fe-kotapelaksanaandetail')); 
        OpenGraph::addProperty('site_name', 'bimtekpelatihannasional.com');
        OpenGraph::addProperty('type', 'articles');


        TwitterCard::setTitle('Kota Pelaksanaan Bimtek PELNASINDO '. date("Y") .' | Pelnasindo');
        TwitterCard::setSite('@pelnasindo');
        TwitterCard::setDescription('Kota Pelaksaaan Bimtek / Diklat Tahun ' . date("Y") . ' Dapat Dilaksanakan di Seluruh Provinsi/Kabupaten/Kota di Indonesia Sesuai Permintaan dari calon peserta Bimtek / Diklat. Daftar Sekarang !');


        JsonLd::setTitle('Kota Pelaksanaan Bimtek PELNASINDO '. date("Y") .' | Pelnasindo');
        JsonLd::setDescription('Kota Pelaksaaan Bimtek / Diklat Tahun ' . date("Y") . ' Dapat Dilaksanakan di Seluruh Provinsi/Kabupaten/Kota di Indonesia Sesuai Permintaan dari calon peserta Bimtek / Diklat. Daftar Sekarang !');
        JsonLd::addImage(url('assets/favicons/logo.png'));
        JsonLd::setType('Article');
        return view('Frontend.SingleKotaPelaksanaan');
    }
    
    


}