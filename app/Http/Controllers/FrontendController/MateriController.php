<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Materi;
use Illuminate\Support\Str;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;

class MateriController extends Controller
{
    
    public function __construct(){
        
       
    }
    public function materi(){
         SEOMeta::setTitle('Materi Bimtek Pelatihan Nasional Indonesia | Pelnasindo');
        SEOMeta::setDescription('Pilihan materi bimtek di pelnasindo yaitu materi bimtek keuangan, materi bimtek perpajakan, materi bimtek kepegawaian, materi bimtek barang dan jasa, materi bimtek aset daerah dan masih banyak lagi, silahkan daftar sekarang.');
        SEOMeta::setKeywords('pelnasindo, bimtek, jadwal bimtek, pelatihan bimtek, info bimtek 2023, jadwal bimtek hari ini, pelnasindo bimtek, info pendaftaran bimtek, bimtek nasional, bimtek keuangan, bimtek kearsipan, bimtek kepegawaian, bimtek BLUD');
        SEOMeta::setRobots('index, follow');
        SEOMeta::setCanonical(route('fe-home'));
        
        
        OpenGraph::setTitle('Materi Bimtek Pelatihan Nasional Indonesia | Pelnasindo');
        OpenGraph::setDescription('Pilihan materi bimtek di pelnasindo yaitu materi bimtek keuangan, materi bimtek perpajakan, materi bimtek kepegawaian, materi bimtek barang dan jasa, materi bimtek aset daerah dan masih banyak lagi, silahkan daftar sekarang.');
        OpenGraph::addImage(url('assets/favicons/logo.png'));
        OpenGraph::setUrl(route('fe-materi'));
        OpenGraph::addProperty('site_name', 'bimtekpelatihannasional.com');
        OpenGraph::addProperty('type', 'articles');
        
        
        TwitterCard::setTitle('Materi Bimtek Pelatihan Nasional Indonesia | Pelnasindo');
        TwitterCard::setSite('@pelnasindo');
        TwitterCard::setDescription('Pilihan materi bimtek di pelnasindo yaitu materi bimtek keuangan, materi bimtek perpajakan, materi bimtek kepegawaian, materi bimtek barang dan jasa, materi bimtek aset daerah dan masih banyak lagi, silahkan daftar sekarang.');
        
        
        JsonLd::setTitle('Materi Bimtek Pelatihan Nasional Indonesia | Pelnasindo');
        JsonLd::setDescription('Pilihan materi bimtek di pelnasindo yaitu materi bimtek keuangan, materi bimtek perpajakan, materi bimtek kepegawaian, materi bimtek barang dan jasa, materi bimtek aset daerah dan masih banyak lagi, silahkan daftar sekarang.');
        JsonLd::addImage(url('assets/favicons/logo.png'));
        JsonLd::setType('Article');
        
        $query = Materi::paginate(5);
        
        return view('Frontend.Materi')->with([
            'dataMateri' => $query
            ]);
    }
    
    
      public function materiDetail($slug){
          

        $query =  Materi::where('slug_judul', $slug)->get();
        $meta = ucwords(str_replace('-', ' ', $slug));
        
        SEOMeta::setTitle('Materi '.$meta.' | Pelnasindo');
        SEOMeta::setDescription('Materi '.$meta.' Pelnasindo adalah materi yang paling banyak di minati karena materinya sangat bagus. Dapatkan jadwal dan materi '.$meta.' di pelnasindo.');
        SEOMeta::setKeywords('pelnasindo, bimtek, jadwal bimtek, pelatihan bimtek, info bimtek 2023, jadwal bimtek hari ini, pelnasindo bimtek, info pendaftaran bimtek, bimtek nasional, bimtek keuangan, bimtek kearsipan, bimtek kepegawaian, bimtek BLUD');
        SEOMeta::setRobots('index, follow');
        SEOMeta::setCanonical(route('fe-home'));
        
        
        OpenGraph::setTitle('Materi '.$meta.' | Pelnasindo');
        OpenGraph::setDescription('Materi '.$meta.' Pelnasindo adalah materi yang paling banyak di minati karena materinya sangat bagus. Dapatkan jadwal dan materi '.$meta.' di pelnasindo.');
        OpenGraph::addImage(url('assets/favicons/logo.png'));
        OpenGraph::setUrl(route('fe-materi'));
        OpenGraph::addProperty('site_name', 'bimtekpelatihannasional.com');
        OpenGraph::addProperty('type', 'articles');
        
        
        TwitterCard::setTitle('Materi '.$meta.' | Pelnasindo');
        TwitterCard::setSite('@pelnasindo');
        TwitterCard::setDescription('Materi '.$meta.' Pelnasindo adalah materi yang paling banyak di minati karena materinya sangat bagus. Dapatkan jadwal dan materi '.$meta.' di pelnasindo.');
        
        
        JsonLd::setTitle('Materi '.$meta.' | Pelnasindo');
        JsonLd::setDescription('Materi '.$meta.' Pelnasindo adalah materi yang paling banyak di minati karena materinya sangat bagus. Dapatkan jadwal dan materi '.$meta.' di pelnasindo.');
        JsonLd::addImage(url('assets/favicons/logo.png'));
        JsonLd::setType('Article');

        return view('Frontend.SingleMateri')->with([
            'dataDetailMateri' => $query
            ]);
    }
    
    


}