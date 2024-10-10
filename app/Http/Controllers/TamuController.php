<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tamu;
use Illuminate\Database\QueryException;

class TamuController extends Controller
{
        // Fungsi untuk menampilkan semua data tamu
        public function index()
        {
            $tamus = Tamu::all();
            $count_tamu_pria = Tamu::where('tamu_keluarga','Tamu Mempelai Pria')->count();
            $count_tamu_wanita = Tamu::where('tamu_keluarga','Tamu Mempelai Wanita')->count();
            $count_tamu_keluarga_pria = Tamu::where('tamu_keluarga','Tamu Keluarga Pria')->count();
            $count_tamu_keluarga_wanita = Tamu::where('tamu_keluarga','Tamu Keluarga Wanita')->count();
            return view('tamu.index')->with(compact('tamus','count_tamu_pria','count_tamu_wanita','count_tamu_keluarga_pria','count_tamu_keluarga_wanita'));
        }

        // Fungsi untuk menyimpan data tamu baru
        public function store(Request $request)
        {
            $request->validate([
                'tamu_nama' => 'required|string|max:255',
                'tamu_organisasi' => 'nullable|string|max:255',
                'tamu_keluarga' => 'nullable|string|max:255',
                'tamu_nohp' => 'required|string|max:15',
            ]);
            $uniquecode = str_pad(mt_rand(0, 999999999), 9, '0', STR_PAD_LEFT);
            $form_data = collect($request->all());
            $form_data->put('tamu_uniquecode',$uniquecode);
            $form_data->put('tamu_qr','undangan/'.$uniquecode);

            try {
                $tamu = Tamu::create($form_data->all());
            alert('Sukses','Data Berhasil Ditambahkan', 'success');
            return redirect('mempelai/tamu');
            } catch (QueryException $e) {
            alert('Gagal','Data Gagal Ditambahkan', 'error');
            return redirect('mempelai/tamu');
            }
        }

        // Fungsi untuk menampilkan data tamu berdasarkan ID
        public function edit($id)
        {
            $tamu = Tamu::findOrFail($id);
            return view('tamu.edit',compact('tamu'));
        }

        // Fungsi untuk memperbarui data tamu berdasarkan ID
        public function update(Request $request, $id)
        {
            $tamu = Tamu::findOrFail($id);

            $request->validate([
                'tamu_nama' => 'required|required|string|max:255',
                'tamu_organisasi' => 'nullable|string|max:255',
                'tamu_keluarga' => 'nullable|string|max:255',
                'tamu_nohp' => 'required|required|string|max:15',

            ]);

            try {
                $tamu->update($request->all());
                alert('Sukses','Data Berhasil Diubah', 'success');
            return redirect('mempelai/tamu');
            } catch (QueryException $e) {
                alert('Gagal','Data Gagal Diubah', 'error');
                return redirect('mempelai/tamu');
            }
        }

        // Fungsi untuk menghapus data tamu berdasarkan ID
        public function destroy($id)
        {
            $tamu = Tamu::findOrFail($id);
            try {
                $tamu->delete();
            alert('Sukses','Data Berhasil Dihapus', 'success');
            return redirect('mempelai/tamu');
            } catch (QueryException $e) {
            alert('Gagal','Data Gagal Dihapus', 'error');
            return redirect('mempelai/tamu');
            }

        }

        public function konfirmasi_kehadiran(Request $request){
             // Validate the request data
        $request->validate([
            'kehadiran' => 'required|string|in:Ya akan hadir,Tidak akan hadir,Belum Menentukan',
        ]);
        $tamu = Tamu::where('tamu_uniquecode',$request->guestId)->first();

        try {
        $tamu->tamu_kehadiran = $request->kehadiran;
        $tamu->update();
        // Respond with success
        return response()->json([
            'message' => 'Konfirmasi kehadiran berhasil diterima.'
        ], 200);
        } catch (QueryException $e) {
       return $request->guestId;
        }

        }

}
