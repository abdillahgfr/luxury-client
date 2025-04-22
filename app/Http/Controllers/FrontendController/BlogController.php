<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

//Import SEO and Meta
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;

class BlogController extends Controller
{


    public function index()
    {
        SEOMeta::setTitle('Berita dan Informasi Yayasan Terkini dan Terbaru Hari ini - Insan Tera Semenjana');
        SEOMeta::setDescription('Insan Tera Semenjana merupakan yayasan yang bergerak dalam pelayanan dan pendampingan bidang pendidikan. Ceruk pendidikan Indonesia begitu luas dan mendalam sehingga diperlukan partisipasi publik sebagai mitra pemerintah untuk berkontribusi secara langsung dalam dunia pendidikan.');
        SEOMeta::setCanonical('https://www.insanterasemenjana.com/blog');

        OpenGraph::setTitle('Berita dan Informasi Yayasan Terkini dan Terbaru Hari ini - Insan Tera Semenjana');
        OpenGraph::setDescription('Informasi terupdate dan berita lengkap seputar bimtek. Temukan tips menarik tentang website, blog, pendidikan, penerimaan mahasiswa baru, digital marketing, bisnis online, dan SEO.');
        OpenGraph::setUrl('https://www.insanterasemenjana.com/blog');
        OpenGraph::addProperty('type', 'articles');
        OpenGraph::addProperty('locale', 'id');
        OpenGraph::addProperty('site_name', 'Berita dan Informasi Yayasan Terkini dan Terbaru Hari ini - Insan Tera Semenjana');
        OpenGraph::addImage('https://insanterasemenjana.com/assets/favicons/logo.png', ['height' => 366, 'width' => 650]);

        TwitterCard::setTitle('Berita dan Informasi Yayasan Terkini dan Terbaru Hari ini - Insan Tera Semenjana');
        TwitterCard::setSite('@insanterasemenjana.com');

        JsonLd::setTitle('Berita dan Informasi Yayasan Terkini dan Terbaru Hari ini - Insan Tera Semenjana');
        JsonLd::setDescription('Informasi terupdate dan berita lengkap seputar bimtek. Temukan tips menarik tentang website, blog, pendidikan, penerimaan mahasiswa baru, digital marketing, bisnis online, dan SEO.');
        JsonLd::addImage('https://insanterasemenjana.com/assets/favicons/logo.png');
     
        $blogTerbaru = Blog::inRandomOrder()->limit('3')->get();
        $query = Blog::paginate(6);
        
        $query = [
            'title' => 'Bimtek Pelnasindo | Blog',
            'blogTerbaru' => $blogTerbaru,
            'dataBlog' => $query
        ];
        return view('Frontend.Blog', $query);
    }


    public function details($slug)
    {
         $blogs = Blog::where('slug_judul', $slug)->first();
        if (!$blogs) {
            abort(404);
        }
        Blog::where('slug_judul', $slug)->increment('views');
        $blogDetail = Blog::where('slug_judul', $slug)->first();
        $blogContent = Blog::orderBy('created_at', 'desc')->limit('4')->get();
        $bacaJuga = Blog::inRandomOrder()->limit('4')->get();
        $blogContentDetails = Blog::orderBy('created_at', 'desc')->limit('1')->get();
        $gambarDetail = Galeri::inRandomOrder()->limit('2')->get();
        
        
        SEOMeta::setTitle($blogDetail->judul .' - Insan Tera Semenjana');
        SEOMeta::setDescription($blogDetail->desc);
        SEOMeta::setCanonical('https://www.insanterasemenjana.com/blog/'.$blogDetail->slug_judul);

        OpenGraph::setTitle($blogDetail->judul .' - Insan Tera Semenjana');
        OpenGraph::setDescription($blogDetail->desc);
        OpenGraph::setUrl('https://insanterasemenjana.com/blog/'.$blogDetail->slug_judul);
        OpenGraph::addProperty('type', 'articles');
        OpenGraph::addProperty('locale', 'id');
        OpenGraph::addProperty('site_name', $blogDetail->judul .' - Insan Tera Semenjana');
        OpenGraph::addImage('/Frontend/img/blog/'.$blogDetail->image, ['height' => 366, 'width' => 650]);

        TwitterCard::setTitle($blogDetail->judul .' - Insan Tera Semenjana');
        TwitterCard::setSite('@insanterasemenjana.com');

        JsonLd::setTitle($blogDetail->judul .' - Insan Tera Semenjana');
        JsonLd::setDescription($blogDetail->desc);
        JsonLd::addImage('/Frontend/img/blog/'.$blogDetail->image);
        $query = [
            'title' => 'Edunesia | Blog Content',
            'blogContent' => $blogContent,
            'bacaJuga' => $bacaJuga,
            'blogDetail' => $blogDetail,
            'gambarDetail' => $gambarDetail,
        ];

        return view('Frontend.BlogDetails', $query);
    }
    
}
