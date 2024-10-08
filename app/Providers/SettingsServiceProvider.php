<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Setting;

class SettingsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Ambil semua settings dari database
        $settings = Setting::all();
        if($settings){
        // Simpan setting ke dalam konfigurasi
        foreach ($settings as $setting) {
            config(["settings.{$setting->setting_name}" => $setting->setting_value]);
        }
        }else {
            $settings = [ 'mempelai_pria_long' => '',
            'mempelai_pria_short' => '',
            'mempelai_wanita_long' => '',
            'mempelai_wanita_short' => '',
            'akad_date' => '',
            'akad_time' => '',
            'resepsi_date' => '',
            'resepsi_time' => '',
            'resepsi_place' => '',
            'akad_place' => '',
            'wedding_name' => '',
            'invitation_template' => ''];
             // Simpan setting ke dalam konfigurasi
        foreach ($settings as $setting) {
            config(["settings.{$setting->setting_name}" => $setting->setting_value]);
        }
        }


    }

    public function register()
    {
        //
    }
}
