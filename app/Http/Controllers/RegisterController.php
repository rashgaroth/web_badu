<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function register()
    {
        return view('daftar.daftar');
    }

    public function registMitra(Request $request)
    {
        # code...
        $this->validate($request, [
            'nama_pemilik' => 'required',
            'lapangan' => 'required',
            'alamat_pemilik' => 'required',
            'alamat_usaha' => 'required',
            'email' => 'required',
            'no_hp_pemilik' => 'required',
            'nama_pemilik' => 'required',
            'wa_pemilik',
            'fb_pemilik',
            'ig_pemilik',
            'no_rek' => 'required',
            'nama_bank' => 'required',
            // foto
            'foto_ktp' => 'required',
        ]);
        
    }
}
