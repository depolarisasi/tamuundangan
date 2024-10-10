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
        $ucapan = Ucapan::all();
        $count_ucapan_pria = Ucapan::where('ucapan_keluarga','ucapan Mempelai Pria')->count();
        $count_ucapan_wanita = Ucapan::where('ucapan_keluarga','ucapan Mempelai Wanita')->count();
        $count_ucapan_keluarga_pria = Ucapan::where('ucapan_keluarga','ucapan Keluarga Pria')->count();
        $count_ucapan_keluarga_wanita = Ucapan::where('ucapan_keluarga','ucapan Keluarga Wanita')->count();
        return view('ucapan.index')->with(compact('ucapan','count_ucapan_pria','count_ucapan_wanita','count_ucapan_keluarga_pria','count_ucapan_keluarga_wanita'));
    }

    // Fungsi untuk menyimpan data ucapan baru
    public function store(Request $request)
    {
        $request->validate([
            'ucapan_nama' => 'required|string|max:255',
            'ucapan_organisasi' => 'nullable|string|max:255',
            'ucapan_keluarga' => 'nullable|string|max:255',
            'ucapan_nohp' => 'required|string|max:15',
        ]);
        $form_data = collect($request->all());

        try {
            $ucapan = Ucapan::create($form_data->all());
        alert('Sukses','Data Berhasil Ditambahkan', 'success');
        return redirect('mempelai/ucapan');
        } catch (QueryException $e) {
        alert('Gagal','Data Gagal Ditambahkan', 'error');
        return redirect('mempelai/ucapan');
        }
    }

    // Fungsi untuk menampilkan data ucapan berdasarkan ID
    public function edit($id)
    {
        $ucapan = Ucapan::findOrFail($id);
        return view('ucapan.edit',compact('ucapan'));
    }

    // Fungsi untuk memperbarui data ucapan berdasarkan ID
    public function update(Request $request, $id)
    {
        $ucapan = Ucapan::findOrFail($id);

        $request->validate([
            'ucapan_nama' => 'required|required|string|max:255',
            'ucapan_organisasi' => 'nullable|string|max:255',
            'ucapan_keluarga' => 'nullable|string|max:255',
            'ucapan_nohp' => 'required|required|string|max:15',

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
