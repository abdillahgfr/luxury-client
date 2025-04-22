<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;

class TentangController extends Controller
{
    
    public function __construct(){
        
       
    }
    public function index(){
        SEOMeta::setTitle('Tentang Insan Tera Semenjana');
        SEOMeta::setDescription('Insan Tera Semenjana merupakan yayasan yang bergerak dalam pelayanan dan pendampingan bidang pendidikan. Ceruk pendidikan Indonesia begitu luas dan mendalam sehingga diperlukan partisipasi publik sebagai mitra pemerintah untuk berkontribusi secara langsung dalam dunia pendidikan.');
       SEOMeta::setKeywords('insan tera semenjana, yayasan insan tera semenjana, yayasan kebumen, pelayanan sosial kebumen, pendamping pendidikan kebumen');
        SEOMeta::setRobots('index, follow');
        SEOMeta::setCanonical(route('fe-home'));
         
        OpenGraph::setTitle('Tentang Yayasan Insan Tera Semenjana | ITS');
        OpenGraph::setDescription('Insan Tera Semenjana merupakan yayasan yang bergerak dalam pelayanan dan pendampingan bidang pendidikan.');
        OpenGraph::addImage(url('assets/apple-touch-icon.png'));
        OpenGraph::setUrl(route('fe-home'));
        OpenGraph::addProperty('site_name', 'insanterasemenjana.com');
        OpenGraph::addProperty('type', 'articles');
        
        
        TwitterCard::setTitle('Tentang Yayasan Insan Tera Semenjana | ITS');
        TwitterCard::setSite('@insanterasemenjana');
        TwitterCard::setDescription('Insan Tera Semenjana merupakan yayasan yang bergerak dalam pelayanan dan pendampingan bidang pendidikan.');
        
        
        JsonLd::setTitle('Tentang Yayasan Insan Tera Semenjana | ITS');
        JsonLd::setDescription('Insan Tera Semenjana merupakan yayasan yang bergerak dalam pelayanan dan pendampingan bidang pendidikan.');
        JsonLd::addImage(url('assets/apple-touch-icon.png'));
        JsonLd::setType('Article');
        
        return view('Frontend.Tentang');
    }
    
    public function struktur(){
        SEOMeta::setTitle('Struktur Organisasi Insan Tera Semenjana');
        SEOMeta::setDescription('Insan Tera Semenjana merupakan yayasan yang bergerak dalam pelayanan dan pendampingan bidang pendidikan. Ceruk pendidikan Indonesia begitu luas dan mendalam sehingga diperlukan partisipasi publik sebagai mitra pemerintah untuk berkontribusi secara langsung dalam dunia pendidikan.');
       SEOMeta::setKeywords('insan tera semenjana, yayasan insan tera semenjana, yayasan kebumen, pelayanan sosial kebumen, pendamping pendidikan kebumen');
        SEOMeta::setRobots('index, follow');
        SEOMeta::setCanonical(route('fe-home'));
         
        OpenGraph::setTitle('Struktur Organisasi Yayasan Insan Tera Semenjana | ITS');
        OpenGraph::setDescription('Insan Tera Semenjana merupakan yayasan yang bergerak dalam pelayanan dan pendampingan bidang pendidikan.');
        OpenGraph::addImage(url('assets/apple-touch-icon.png'));
        OpenGraph::setUrl(route('fe-home'));
        OpenGraph::addProperty('site_name', 'insanterasemenjana.com');
        OpenGraph::addProperty('type', 'articles');
        
        
        TwitterCard::setTitle('Struktur Organisasi Yayasan Insan Tera Semenjana | ITS');
        TwitterCard::setSite('@insanterasemenjana');
        TwitterCard::setDescription('Insan Tera Semenjana merupakan yayasan yang bergerak dalam pelayanan dan pendampingan bidang pendidikan.');
        
        
        JsonLd::setTitle('Struktur Organisasi Yayasan Insan Tera Semenjana | ITS');
        JsonLd::setDescription('Insan Tera Semenjana merupakan yayasan yang bergerak dalam pelayanan dan pendampingan bidang pendidikan.');
        JsonLd::addImage(url('assets/apple-touch-icon.png'));
        JsonLd::setType('Article');
        
        return view('Frontend.Struktur');
    }    


}