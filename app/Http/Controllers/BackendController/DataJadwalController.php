<?php

namespace App\Http\Controllers\BackendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\JadwalRequest;
use App\Http\Requests\JadwalUpdateRequest;
use App\Models\Jadwal;
use Illuminate\Support\Str;

class DataJadwalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dataJadwal()
    {
        $query = Jadwal::all()->sortByDesc('id');

        return view(
            'Backend.Pages.DataJadwal.index',
            [
                'title' => 'Insan Tera Semenjana | Data Jadwal',
                'dataJadwal' => $query
            ]
        );
    }
    public function add()
    {
        return view(
            'Backend.Pages.DataJadwal.add',
            [
                'title' => 'Insan Tera Semenjana | Tambah Data Jadwal',
            ]
        );
    }

    public function addData(JadwalRequest $jadwalRequest)
    {
        $data =  $jadwalRequest->validated();
        $random = Str::random(40);
        $fotoJadwal = $data['foto'];
        $namaFotoJadwal = $random . '.' . $fotoJadwal->extension();
        $fotoJadwal->move(public_path('assets/images/jadwal'), $namaFotoJadwal);
        Jadwal::create([
            'judul' => $data['judul'],
             'slug_judul' => Str::slug($data['judul']),
            'content' => $data['content'],
            'foto' => $namaFotoJadwal,
        ]);
        return redirect()->route('adminJadwal')->with('pesan', 'Data berhasil ditambahkan!');
    }

    public function show($id)
    {
        $query = Jadwal::find($id);
        return view(
            'Backend.Pages.DataJadwal.show',
            [
                'title' => 'Insan Tera Semenjana | Lihat Data Jadwal',
                'dataJadwal' => $query
            ]
        );
    }

    public function edit($id)
    {
        $query = Jadwal::find($id);
        return view(
            'Backend.Pages.DataJadwal.update',
            [
                'title' => 'Insan Tera Semenjana | Edit Data Jadwal',
                'dataJadwal' => $query
            ]
        );
    }

    public function editData($id, JadwalUpdateRequest $jadwalUpdateRequest)
    {
        $query = Jadwal::find($id);
        if (!$query) {
            abort(404);
        }
        if (Request()->foto <> "") {
            $data = $jadwalUpdateRequest->validated();
            $query = Jadwal::find($id);
            unlink(public_path('assets/images/jadwal') . '/' . $query['foto']);
            $random = Str::random(40);
            $fotoJadwal = Request()->foto;
            $namaFotoJadwal = $random . '.' . $fotoJadwal->extension();
            $fotoJadwal->move(public_path('assets/images/jadwal'), $namaFotoJadwal);
            $dataUpdate = [
                'judul' => $data['judul'],
                 'slug_judul' => Str::slug($data['judul']),
                'content' => $data['content'],
                'foto' => $namaFotoJadwal,
            ];
            $query->update($dataUpdate);
        }
        $query = Jadwal::find($id);
        $data = [
            'judul' => Request()->judul,
             'slug_judul' => Str::slug(Request()->judul),
            'content' => Request()->content,
        ];
        $query->update($data);
        return redirect()->route('adminJadwal')->with('pesan', 'Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $query = Jadwal::find($id);
        if (!$query) {
            abort(404);
        }
        if ($query->foto <> "") {
            unlink(public_path('assets/images/jadwal') . '/' . $query->foto);
        }
        Jadwal::destroy($id);
        return redirect()->route('adminJadwal')->with('pesan', 'Data Berhasil Dihapus');
    }
}
