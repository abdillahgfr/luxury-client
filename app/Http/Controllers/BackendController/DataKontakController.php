<?php

namespace App\Http\Controllers\BackendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Kontak;


class DataKontakController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dataKontak()
    {
        $query = Kontak::all()->sortByDesc('id');

        return view(
            'Backend.Pages.DataKontak.index',
            [
                'title' => 'Insan Tera Semenjana | Data Kontak',
                'dataKontak' => $query
            ]
        );
    }
   




    
    public function delete($id)
    {
        $query = Kontak::find($id);
        if (!$query) {
            abort(404);
        }
        
        Kontak::destroy($id);
        return redirect()->route('adminKontak')->with('pesan', 'Data Berhasil Dihapus');
    }
}
