<?php

namespace App\Http\Controllers\BackendController;

use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\BlogRequest;
use App\Http\Requests\BlogEditRequest;
use App\Models\Blog;


class BlogsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    



    public function index()
    {
        $dataBlog = Blog::orderBy('id', 'DESC')->get();
        return view('Backend.Pages.DataBlog.views')->with([
            'title' => 'Data Blog | Insan Tera Semenjana',
            'dataBlog' => $dataBlog
        ]);
    }

    public function add()
    {
        return view('Backend.Pages.DataBlog.add')->with([
            'title' => 'Tambah Data Blog | Insan Tera Semenjana'
        ]);
    }


    public function addData(BlogRequest $blogRequest)
    {
        $data = $blogRequest->validated();
        $random = Str::random(40);
        $fileImageBlog = $data['image'];
        $namaFileBlog = $random . '.' . $fileImageBlog->extension();
        $fileImageBlog->move(public_path('Frontend/img/blog'), $namaFileBlog);

        Blog::create([
            'judul' => $data['judul'],
            'slug_judul' => Str::slug($data['judul']),
            'desc' => $data['desc'],
            'content' => $data['content'],
            'image' =>  $namaFileBlog,
            'author' => $data['author'],
            
        ]);
        return redirect()->route('be-blog')->with('pesan', 'Data berhasil Ditambahkan!');
    }


    public function edit($id)
    {
        $query =  Blog::find($id);
        if (!$query) {
            abort(404);
        }
        return view('Backend.Pages.DataBlog.edit')->with([
            'title' => 'Edit Blog | Edunesia.co.id',
            'dataBlog' => $query
        ]);
    }


    public function editData($id, BlogEditRequest $blogEditRequest)
    {
        $query = Blog::find($id);
        if (!$query) {
            abort(404);
        }
        if (Request()->image <> "") {
            $data = $blogEditRequest->validated();
            $query = Blog::find($id);
            $random = Str::random(40);
            $fileImageBlog = $data['image'];
         
            $namaFileBlog = $random . '.' . $fileImageBlog->extension();
            $fileImageBlog->move(public_path('Frontend/img/blog'), $namaFileBlog);
          
            $data = [
                'judul' =>  Str::title(Request()->judul),
                'slug_judul' =>  Str::slug(Request()->judul),
                'kategori' =>  Request()->kategori,
                'slug_kategori' =>  Str::slug(Request()->kategori),
                'desc' =>  Request()->desc,
                'image' =>  $namaFileBlog,
                'content' =>  Request()->content,
                
            ];
            $query->update($data);
            // unlink(public_path('Frontend/img/blog') . '/' . $query->image);
          
        }
        $query = Blog::find($id);
        $data = [
                'judul' => Str::title(Request()->judul),
                'slug_judul' => Str::slug(Request()->judul),
                'desc' =>  Request()->desc,
                'content' =>  Request()->content,
        ];
        $query->update($data);
        return redirect()->route('be-blog')->with('pesan', 'Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $query = Blog::find($id);
        if (!$query) {
            abort(404);
        }
        
        Blog::destroy($id);
        return redirect()->route('be-blog')->with('pesan', 'Data Berhasil Dihapus');
    }
    
    

}
