<?php

namespace App\Http\Controllers;

use Auth;
use App\Pelaporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PelaporanController extends Controller
{
    // tampilkan halaman pelaporan
    public function index()
    {
        // untuk admin admin semua daftar pelaporan user
        // untuk user biasa daftar pelaporan yang pernah diadakannya
        if (Auth::user()->admin == false) {
            $pelaporans =  Pelaporan::all()->where('user_id', Auth::user()->id);
            if( $pelaporans->count() == 0 ){
                return redirect()->route('add-pelaporan');
            }
        } else { 
            $pelaporans =  Pelaporan::all();
        }

        return view('pelaporan', compact('pelaporans'));
    }

    // halaman tambah pelaporan
    public function create()
    {
        return view('tambahPelaporan');
    }

    // simpan pelaporan yang baru
    public function store(Request $request)
    {
        $id = Auth::user()->id;
        $pelaporan = Pelaporan::create([
            'nama_pelatih'      => $request->input('nama_pelatih'),
            'jenis'             => $request->input('jenis'),
            'tempat'            => $request->input('tempat'),
            'waktu'             => $request->input('waktu'),
            'peserta'           => $request->input('peserta'),
            'user_id'           => $id
        ]);

        Session::put('pelaporan', $pelaporan);

        if ($request->input('jenis') == "Teknis Pelayanan") {
            return redirect()->route('teknis', $request);
        } elseif ($request->input('jenis') == "Manajemen") {
            return redirect()->route('manajemen', $request);
        } else {
            return redirect()->route('generasi', $request);
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
