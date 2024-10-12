<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Database\QueryException;
use RealRashid\SweetAlert\Facades\Alert;

class SettingController extends Controller
{
    // Fungsi untuk menampilkan semua data tamu
    public function index()
    {
        $setting = Setting::all();
        return view('setting.index')->with(compact('setting'));
    }
    // Fungsi untuk menampilkan data tamu berdasarkan ID
    public function edit($id)
    {
        $setting = Setting::findOrFail($id);
        return view('setting.edit',compact('setting'));
    }

    // Fungsi untuk memperbarui data tamu berdasarkan ID
    public function update(Request $request, $id)
    {
        $setting = Setting::findOrFail($id);

        $request->validate([
            'setting_name' => 'required',
            'setting_value' => 'required',
        ]);

        try {
            $setting->update($request->all());
            alert('Sukses','Data Berhasil Diubah', 'success');
            return redirect('mempelai/setting');
        } catch (QueryException $e) {
            alert('Gagal','Data Gagal Diubah', 'error');
        }
    }

    // Fungsi untuk menghapus data tamu berdasarkan ID
    public function destroy($id)
    {
        $tamu = Setting::findOrFail($id);
        $tamu->delete();

        return response()->json(['message' => 'Data tamu berhasil dihapus']);
    }
}
