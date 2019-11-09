<?php

namespace App\Http\Controllers;

use Auth;
use App\Pelatihan;
use Illuminate\Http\Request;

class PelatihanController extends Controller
{
    // tampilkan halaman pelatihan
    public function index()
    {
        // untuk admin admin semua daftar pelatihan user
        // untuk user biasa daftar pelatihan yang pernah diikutinya
        if (Auth::user()->admin == false) {
            $pelatihans =  Pelatihan::all()->where('user_id', Auth::user()->id);
            if( $pelatihans->count() == 0 ){
                return redirect()->route('add-pelatihan');
            }
        } else { 
            $pelatihans =  Pelatihan::all();
        }

        return view('pelatihan', compact('pelatihans'));
    }

    // halaman tambah pelatihan
    public function create()
    {
        return view('tambahPelatihan');
    }

    // simpan pelatihan yang baru
    public function store(Request $request)
    {
        $id = Auth::user()->id;
        $pelatihan = Pelatihan::create([
            'jenis'             => $request->input('jenis'),
            'tempat'            => $request->input('tempat'),
            'waktu'             => $request->input('waktu'),
            'pelaksana'		    => $request->input('pelaksana'),
            'sertif'			=> $request->input('sertif'),
            'user_id'		    => $id
        ]);

        if ($request->input('jenis') == "Teknis Pelayanan") {
            return redirect()->route('teknis', [$request, $pelatihan]);
        } elseif ($request->input('jenis') == "Manajemen") {
            return redirect()->route('manajemen', [$request, $pelatihan]);
        } else {
            return redirect()->route('generasi', [$request, $pelatihan]);
        } 
      
    }

    // simpan perubahan pelatihan
    public function update(Request $request, Pelatihan $pelatihan)
    {
        //
    }

    // hapus pelatihan
    public function destroy(Pelatihan $pelatihan)
    {
        //
    }
}
