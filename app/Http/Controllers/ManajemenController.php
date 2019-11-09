<?php

namespace App\Http\Controllers;

use App\Manajemen;
use Illuminate\Http\Request;

class ManajemenController extends Controller
{
    // buat pelatihan manajemen baru
    public function store(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Manajemen  $manajemen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manajemen $manajemen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Manajemen  $manajemen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manajemen $manajemen)
    {
        //
    }
}
