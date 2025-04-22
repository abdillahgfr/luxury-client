<?php

namespace App\Http\Controllers\BackendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\PenggunaRequest;
use Illuminate\Support\Facades\Hash;

class DataPenggunaController extends Controller
{
    /**
     * Constructor Controller
     *
     * 
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Function Data Pengguna 
     *
     * 
     */
    public function dataPengguna()
    {
        $query = User::all()->sortByDesc('id');
        return view(
            'Backend.Pages.DataPengguna.index',
            [
                'title' => 'Insan Tera Semenjana | Data Pengguna',
                'dataPengguna' => $query
            ]
        );
    }

    /**
     * Function Tambah Data Pengguna Form (GET)
     *
     * 
     */
    public function add()
    {
        return view(
            'Backend.Pages.DataPengguna.add',
            [
                'title' => 'Insan Tera Semenjana | Tambah Data Pengguna',
            ]
        );
    }

    /**
     * Function Tambah Data Pengguna Form (POST)
     *
     * 
     */
    public function addData(PenggunaRequest $penggunaRequest)
    {
        $data = $penggunaRequest->validated();
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        return redirect()->route('adminPengguna')->with('pesan', 'Data berhasil ditambahkan!');
    }
    /**
     * Function Show Data Pengguna Form (GET)
     *
     * 
     */
    public function show($id)
    {
        $query = User::find($id);
        return view(
            'Backend.Pages.DataPengguna.show',
            [
                'title' => 'Insan Tera Semenjana | Lihat Data Pengguna',
                'dataPengguna' => $query
            ]
        );
    }

    /**
     * Function Edit Data Pengguna Form (GET)
     *
     * 
     */
    public function edit($id)
    {
        $query = User::find($id);
        return view(
            'Backend.Pages.DataPengguna.update',
            [
                'title' => 'Bimtek | Dashboard',
                'dataPengguna' => $query
            ]
        );
    }
    /**
     * Function Edit Data Pengguna Form (POST)
     *
     * 
     */
    public function editData($id)
    {
        $query = User::find($id);
        if (!$query) {
            abort(404);
        }
        if (Request()->password <> "") {
            $query = User::find($id);
            $data = [
                'name' => Request()->name,
                'email' => Request()->email,
                'password' => Hash::make(Request()->password),
            ];
            $query->update($data);
        }
        $query = User::find($id);
        $data = [
            'name' => Request()->name,
            'email' => Request()->email,
        ];
        $query->update($data);
        return redirect()->route('adminPengguna')->with('pesan', 'Data Pengguna Berhasil Diupdate');
    }
    /**
     * Function Delete Pengguna (GET)
     *
     * 
     */
    public function delete($id)
    {
        $query = User::find($id);
        if (!$query) {
            abort(404);
        }
        User::destroy($id);
        return redirect()->route('adminPengguna')->with('pesan', 'Data Pengguna Berhasil Dihapus');
    }
}
