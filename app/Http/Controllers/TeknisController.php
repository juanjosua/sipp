<?php

namespace App\Http\Controllers;

use App\Teknis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TeknisController extends Controller
{
    // buat pelatihan teknis baru
    public function store(Request $request)
    {
        if(Session::get('pelatihan')){
            $pelatihan_id = Session::get('pelatihan')->id;
            $pelaporan_id = null;
        } else {
            $pelaporan_id = Session::get('pelaporan')->id;
            $pelatihan_id = null;
        }

        Teknis::create([
            'nama_pelatihan'            => $request->input('nama_pelatihan'),
            'tipe_penyuluh'             => $request->input('tipe_penyuluh'),
            'jenjang'                   => $request->input('jenjang'),
            'pelatihan_id'              => $pelatihan_id,
            'pelaporan_id'              => $pelaporan_id
        ]);

        if(Session::get('pelatihan')){
            Session::forget('pelatihan');
            return redirect()->route('pelatihan')->with('message', 'success');
        } else { 
            Session::forget('pelaporan');
            return redirect()->route('pelaporan')->with('message', 'success');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teknis  $teknis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teknis $teknis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teknis  $teknis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teknis $teknis)
    {
        //
    }
}
