<?php

namespace App\Http\Controllers;

use App\Teknis;
use Illuminate\Http\Request;

class TeknisController extends Controller
{
    // buat pelatihan teknis baru
    public function store(Request $request)
    {
        if( $request->input ){

        } else {

        }

        Teknis::create([
            'jenis'             => $request->input('jenis'),
            'tempat'            => $request->input('tempat'),
            'waktu'             => $request->input('waktu'),
            'pelaksana'		    => $request->input('pelaksana'),
            'sertif'			=> $request->input('sertif'),
            'user_id'		    => $id
        ]);

        return redirect()->route('pelatihan')->with('message', 'success');
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
