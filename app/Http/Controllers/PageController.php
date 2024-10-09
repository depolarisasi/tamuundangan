<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Tamu;

class PageController extends Controller
{
    private function replacePlaceholders($template)
    {
        // Daftar pengaturan yang akan digunakan untuk mengganti placeholder
        $settings = [
            'wedding_name' => config('settings.wedding_name'),
            'wedding_day' => config('settings.resepsi_day'),
            'wedding_date' => config('settings.wedding_date'),
            'akad_place' => config('settings.akad_place'),
            'akad_date' => config('settings.akad_date'),
            'akad_time' => config('settings.akad_time'),
            'resepsi_place' => config('settings.resepsi_place'),
            'resepsi_date' => config('settings.resepsi_date'),
            'resepsi_time' => config('settings.resepsi_time'),
        ];

        // Ganti setiap placeholder dengan nilai yang sesuai
        foreach ($settings as $key => $value) {
            $template = preg_replace('/\[' . preg_quote($key, '/') . '\]/', $value, $template);
        }

        return $template;
    }

    public function index(Request $request){
        if($request->get('guest')){
            $tamu = Tamu::where('tamu_uniquecode',$request->get('guest'))->first();
         }else {
            $tamu = "";
         }
        return view('index',compact('tamu'));
    }

    public function dashboard(){
        return view('dashboard');
    }


    public function undangan($uniquecode = null){
         // Ambil template undangan dari pengaturan
         if($uniquecode){
            $nama_tamu = Tamu::where('tamu_uniquecode',$uniquecode)->first();
         }else {
            $nama_tamu = "";
         }
         $template = config('settings.invitation_template');

         // Ganti placeholder dengan nilai yang sesuai
         $filledTemplate = $this->replacePlaceholders($template);

        return view('undangan',compact('filledTemplate','nama_tamu'));
    }
}
