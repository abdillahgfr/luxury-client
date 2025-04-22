<?php

namespace App\Http\Controllers\BackendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\MateriRequest;
use App\Http\Requests\MateriUpdateRequest;
use App\Models\Materi;
use Illuminate\Support\Str;

class DataMateriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dataMateri()
    {
        $query = Materi::all()->sortByDesc('id');

        return view(
            'Backend.Pages.DataMateri.index',
            [
                'title' => 'PT.PELNASINDO | Data Materi',
                'dataMateri' => $query
            ]
        );
    }
    public function add()
    {
        return view(
            'Backend.Pages.DataMateri.add',
            [
                'title' => 'PT.PELNASINDO | Tambah Data Materi',
            ]
        );
    }

    public function addData(MateriRequest $materiRequest)
    {
        $data =  $materiRequest->validated();
        $random = Str::random(40);
        $fotoMateri = $data['foto'];
        $namaFotoMateri = $random . '.' . $fotoMateri->extension();
        $fotoMateri->move(public_path('assets/images/materi'), $namaFotoMateri);
        Materi::create([
            'judul' => $data['judul'],
             'slug_judul' => Str::slug($data['judul']),
             'kategori' => $data['kategori'],
            'content' => $data['content'],
            'pilihan_materi' => $data['pilihan_materi'],
            'foto' => $namaFotoMateri,
        ]);
        return redirect()->route('adminMateri')->with('pesan', 'Data berhasil ditambahkan!');
    }

    public function show($id)
    {
        $query = Materi::find($id);
        return view(
            'Backend.Pages.DataMateri.show',
            [
                'title' => 'PT.PELNASINDO | Lihat Data Materi',
                'dataMateri' => $query
            ]
        );
    }

    public function edit($id)
    {
        $query = Materi::find($id);
        return view(
            'Backend.Pages.DataMateri.update',
            [
                'title' => 'PT.PELNASINDO | Edit Data Materi',
                'dataMateri' => $query
            ]
        );
    }

    public function editData($id, MateriUpdateRequest $materiUpdateRequest)
    {
        $query = Materi::find($id);
        if (!$query) {
            abort(404);
        }
        if (Request()->foto <> "") {
            $data = $materiUpdateRequest->validated();
            $query = Materi::find($id);
            unlink(public_path('assets/images/materi') . '/' . $query['foto']);
            $random = Str::random(40);
            $fotoMateri = Request()->foto;
            $namaFotoMateri = $random . '.' . $fotoMateri->extension();
            $fotoMateri->move(public_path('assets/images/materi'), $namaFotoMateri);
            $dataUpdate = [
                'judul' => $data['judul'],
                   'slug_judul' => Str::slug($data['judul']),
                 'kategori' => $data['kategori'],
                'content' => $data['content'],
                'pilihan_materi' => $data['pilihan_materi'],
                'foto' => $namaFotoMateri,
            ];
            $query->update($dataUpdate);
        }
        $query = Materi::find($id);
        $data = [
            'judul' => Request()->judul,
            'slug_judul' => Str::slug(Request()->judul),
            'content' => Request()->content,
            'pilihan_materi' =>  Request()->pilihan_materi,
        ];
        $query->update($data);
        return redirect()->route('adminMateri')->with('pesan', 'Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $query = Materi::find($id);
        if (!$query) {
            abort(404);
        }
        if ($query->foto <> "") {
            unlink(public_path('assets/images/materi') . '/' . $query->foto);
        }
        Materi::destroy($id);
        return redirect()->route('adminMateri')->with('pesan', 'Data Berhasil Dihapus');
    }
}
