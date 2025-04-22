<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jadwal;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
use Illuminate\Support\Str;

class JadwalController extends Controller
{

    public function __construct()
    {
    }


    public function index()
    {
        SEOMeta::setTitle('Jadwal Insan Tera Semenjana '. date("Y") .' | Insan Tera Semenjana');
        SEOMeta::setDescription('Insan Tera Semenjana merupakan yayasan yang bergerak dalam pelayanan dan pendampingan bidang pendidikan. Ceruk pendidikan Indonesia begitu luas dan mendalam sehingga diperlukan partisipasi publik sebagai mitra pemerintah untuk berkontribusi secara langsung dalam dunia pendidikan.');
        SEOMeta::setKeywords('insan tera semenjana, yayasan insan tera semenjana, yayasan kebumen, pelayanan sosial kebumen, pendamping pendidikan kebumen');
        SEOMeta::setRobots('all, index, follow');
        SEOMeta::setCanonical(route('fe-jadwal'));


        OpenGraph::setTitle('Jadwal Insan Tera Semenjana '. date("Y") .' | Insan Tera Semenjana');
        OpenGraph::setDescription('Insan Tera Semenjana merupakan yayasan yang bergerak dalam pelayanan dan pendampingan bidang pendidikan. Ceruk pendidikan Indonesia begitu luas dan mendalam sehingga diperlukan partisipasi publik sebagai mitra pemerintah untuk berkontribusi secara langsung dalam dunia pendidikan.');
        OpenGraph::addImage(url('assets/apple-touch-icon.png'));
        OpenGraph::setUrl(route('fe-jadwal'));
        OpenGraph::addProperty('site_name', 'insanterasemenjana.com');
        OpenGraph::addProperty('type', 'articles');


        TwitterCard::setTitle('Jadwal Insan Tera Semenjana '. date("Y") .' | Insan Tera Semenjana');
        TwitterCard::setSite('@insanterasemenjana');
        TwitterCard::setDescription('Insan Tera Semenjana merupakan yayasan yang bergerak dalam pelayanan dan pendampingan bidang pendidikan. Ceruk pendidikan Indonesia begitu luas dan mendalam sehingga diperlukan partisipasi publik sebagai mitra pemerintah untuk berkontribusi secara langsung dalam dunia pendidikan.');


        JsonLd::setTitle('Jadwal Insan Tera Semenjana '. date("Y") .' | Insan Tera Semenjana');
        JsonLd::setDescription('Insan Tera Semenjana merupakan yayasan yang bergerak dalam pelayanan dan pendampingan bidang pendidikan. Ceruk pendidikan Indonesia begitu luas dan mendalam sehingga diperlukan partisipasi publik sebagai mitra pemerintah untuk berkontribusi secara langsung dalam dunia pendidikan.');
        JsonLd::addImage(url('assets/apple-touch-icon.png'));
        JsonLd::setType('Article');
        $query = Jadwal::paginate(10);

        return view('Frontend.Jadwal')->with([
            'dataJadwal' => $query
        ]);
    }







    public function jadwalDetail($slug)
    {
        $query = Jadwal::where('slug_judul', $slug)->get();
        $meta = ucwords(str_replace('-', ' ', $slug));

        SEOMeta::setTitle($meta . ' | Insan Tera Semenjana');
        SEOMeta::setDescription('Insan Tera Semenjana merupakan yayasan yang bergerak dalam pelayanan dan pendampingan bidang pendidikan. Ceruk pendidikan Indonesia begitu luas dan mendalam sehingga diperlukan partisipasi publik sebagai mitra pemerintah untuk berkontribusi secara langsung dalam dunia pendidikan.');

        SEOMeta::setKeywords('insan tera semenjana, yayasan insan tera semenjana, yayasan kebumen, pelayanan sosial kebumen, pendamping pendidikan kebumen');
        SEOMeta::setRobots('all','index, follow');
        SEOMeta::setCanonical(route('fe-singlejadwal', $slug));


        OpenGraph::setTitle($meta . ' | Insan Tera Semenjana');
        OpenGraph::setDescription('Insan Tera Semenjana merupakan yayasan yang bergerak dalam pelayanan dan pendampingan bidang pendidikan. Ceruk pendidikan Indonesia begitu luas dan mendalam sehingga diperlukan partisipasi publik sebagai mitra pemerintah untuk berkontribusi secara langsung dalam dunia pendidikan.');
        OpenGraph::addImage(url('assets/apple-touch-icon.png'));
        OpenGraph::setUrl(route('fe-home'));
        OpenGraph::addProperty('site_name', 'insanterasemenjana.com');
        OpenGraph::addProperty('type', 'articles');


        TwitterCard::setTitle($meta . ' | Insan Tera Semenjana');
        TwitterCard::setSite('@insanterasemenjana');
        TwitterCard::setDescription('Insan Tera Semenjana merupakan yayasan yang bergerak dalam pelayanan dan pendampingan bidang pendidikan. Ceruk pendidikan Indonesia begitu luas dan mendalam sehingga diperlukan partisipasi publik sebagai mitra pemerintah untuk berkontribusi secara langsung dalam dunia pendidikan.');


        JsonLd::setTitle($meta . ' | Insan Tera Semenjana');
        JsonLd::setDescription('Insan Tera Semenjana merupakan yayasan yang bergerak dalam pelayanan dan pendampingan bidang pendidikan. Ceruk pendidikan Indonesia begitu luas dan mendalam sehingga diperlukan partisipasi publik sebagai mitra pemerintah untuk berkontribusi secara langsung dalam dunia pendidikan.');
        JsonLd::addImage(url('assets/apple-touch-icon.png'));
        JsonLd::setType('Article');

        if (!$query) {
            abort(404);
        }
        $query = Jadwal::where('slug_judul', $slug)->get();
        return view('Frontend.SingleJadwal')->with([
            'dataDetailJadwal' => $query
        ]);
    }
}
