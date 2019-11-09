<?php

namespace App\Http\Controllers;

use App\Generasi;
use Illuminate\Http\Request;

class GenerasiController extends Controller
{
    // pelatihan generasi baru
    public function store(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Generasi  $generasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Generasi $generasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Generasi  $generasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Generasi $generasi)
    {
        //
    }
}
