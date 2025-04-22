<?php

namespace App\Http\Controllers\BackendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\GaleriRequest;
use App\Models\PO;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;
use Barryvdh\DomPDF\Facade\Pdf;

class DataPOController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dataPO()
    {
        $query = PO::all()->sortByDesc('id');

        return view(
            'Backend.Pages.DataPO.index',
            [
                'title' => 'Luxury Palace Oman | Data Pendaftaran',
                'dataPO' => $query
            ]
        );
    }
    
     public function reportPrint($id)
        {
            $dataBooking = PO::find($id);
        
            if ($dataBooking) {
                $pdf = PDF::loadview('Backend.Pages.DataPO.report-print', ['dataCetak' => $dataBooking])->setPaper('a4', 'portrait');
                return $pdf->stream('invoice-booking-luxury.pdf');
            } else {
                // Handle the case where the record doesn't exist, e.g., show an error message or redirect to an error page.
            }
        }
   

   public function show($id)
    {
       
        $decrypted = Crypt::decryptString($id);
        $query = PO::find($decrypted);
        return view(
            'Backend.Pages.DataPO.show',
            [
                'title' => 'Luxury Palace Oman | Lihat Data Pendaftaran',
                'dataPO' => $query
            ]
        );
    }
    
     public function edit($id)
    {
        $query = PO::find($id);
        return view(
            'Backend.Pages.DataPO.update',
            [
                'title' => 'Luxury Palace Oman | Dashboard',
                'dataPO' => $query
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
        $query = PO::find($id);
    
        if (!$query) {
            abort(404);
        }
    
        // Retrieve the 'content' from the request and update only that field
        $content = Request()->content;
        $discount = Request()->discount;
        $item = Request()->item;
        $person = Request()->person;
    
        // Update only the 'content' field in the database for the specific record
        $query->update([
            'content' => $content,
            'discount' => $discount,
            'item' => $item,
            'person' => $person
            ]);
    
        return redirect()->route('adminPO')->with('pesan', 'Content Successfully Updated');
    }



    
    public function delete($id)
    {
        $decrypted = Crypt::decryptString($id);
        $query = PO::find($decrypted);
        if (!$query) {
            abort(404);
        }
        if ($query->berkas_po <> "") {
            unlink(public_path('assets/file-berkas') . '/' . $query->berkas_po);
        }
        PO::destroy($id);
        return redirect()->route('adminPO')->with('pesan', 'Data Berhasil Dihapus');
    }
}
