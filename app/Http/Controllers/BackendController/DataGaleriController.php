<?php

namespace App\Http\Controllers\BackendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\GaleriRequest;
use App\Models\Galeri;
use Illuminate\Support\Str;

class DataGaleriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dataGaleri()
    {
        $query = Galeri::paginate(8);

        return view(
            'Backend.Pages.DataGaleri.index',
            [
                'title' => 'Luxury Palace Oman | Data Galeri',
                'dataGaleri' => $query
            ]
        );
    }
    public function add()
    {
        return view(
            'Backend.Pages.DataGaleri.add',
            [
                'title' => 'Luxury Palace Oman | Tambah Data Galeri',
            ]
        );
    }

    public function addData(GaleriRequest $galeriRequest)
    {
        $data =  $galeriRequest->validated();
        $random = Str::random(40);
        $fotoGaleri = $data['foto'];
        $namaFotoGaleri = $random . '.' . $fotoGaleri->extension();
        $fotoGaleri->move(public_path('assets/images/galeri'), $namaFotoGaleri);
        
        Galeri::create([
            'judul' => $data['judul'],
            'foto' => $namaFotoGaleri,
        ]);
        return redirect()->route('adminGaleri')->with('pesan', 'Data berhasil ditambahkan!');
    }

    
    public function delete($id)
    {
        $query = Galeri::find($id);
        if (!$query) {
            abort(404);
        }
        if ($query->foto <> "") {
            unlink(public_path('assets/images/galeri') . '/' . $query->foto);
        }
        Galeri::destroy($id);
        return redirect()->route('adminGaleri')->with('pesan', 'Data Berhasil Dihapus');
    }
}
