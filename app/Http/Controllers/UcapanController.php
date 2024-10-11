<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tamu;
use App\Models\Ucapan;
use Illuminate\Database\QueryException;
use Carbon\Carbon;

class UcapanController extends Controller
{   // Fungsi untuk menampilkan semua data ucapan
    public function index()
    {
        $ucapans = Ucapan::join('tamu','tamu.tamu_uniquecode','=','ucapan.ucapan_tamu')
        ->select('tamu.tamu_nama','tamu.tamu_organisasi','tamu.tamu_uniquecode','ucapan.*')
        ->get();
        return view('ucapan.index')->with(compact('ucapans'));
    }


    // Fungsi untuk menampilkan data ucapan berdasarkan ID
    public function edit($id)
    {
        $ucapan = Ucapan::join('tamu','tamu.tamu_uniquecode','=','ucapan.ucapan_tamu')
        ->select('tamu.tamu_nama','tamu.tamu_organisasi','tamu.tamu_uniquecode','ucapan.*')
        ->where('ucapan_id', $id)->first();
        return view('ucapan.edit',compact('ucapan'));
    }

    // Fungsi untuk memperbarui data ucapan berdasarkan ID
    public function update(Request $request, $id)
    {
        $ucapan = Ucapan::findOrFail($id);

        $request->validate([
            'ucapan_isiucapan' => 'required|string',

        ]);

        try {
            $ucapan->update($request->all());
            alert('Sukses','Data Berhasil Diubah', 'success');
        return redirect('mempelai/ucapan');
        } catch (QueryException $e) {
            alert('Gagal','Data Gagal Diubah', 'error');
            return redirect('mempelai/ucapan');
        }
    }

    // Fungsi untuk menghapus data ucapan berdasarkan ID
    public function destroy($id)
    {
        $ucapan = Ucapan::findOrFail($id);
        try {
            $ucapan->delete();
        alert('Sukses','Data Berhasil Dihapus', 'success');
        return redirect('mempelai/ucapan');
        } catch (QueryException $e) {
        alert('Gagal','Data Gagal Dihapus', 'error');
        return redirect('mempelai/ucapan');
        }

    }

     // Method to handle form submission
     public function submitWish(Request $request)
     {
         $request->validate([
             'tamu_uniquecode' => 'required|string',
             'wishes' => 'required|string|max:1000',
         ]);

         // Create the new wish in the database
         Ucapan::create([
             'ucapan_tamu' => $request->tamu_uniquecode,
             'ucapan_isiucapan' => $request->wishes,
             'ucapan_date' => Carbon::now(),
         ]);

         // Return success response
         return response()->json(['message' => 'Ucapan berhasil diterima!'], 200);
     }

     // Method to get all wedding wishes
     public function getWishes()
     {
         $wishes = Ucapan::join('tamu','tamu.tamu_uniquecode','=','ucapan.ucapan_tamu')
         ->select('tamu.tamu_nama','tamu.tamu_organisasi','ucapan.*')
         ->latest()->get(); // Get all wishes ordered by latest

         // Return the list of wishes as JSON
         return response()->json(['wishes' => $wishes]);
     }

}
