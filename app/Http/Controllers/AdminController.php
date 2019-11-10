<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // tampilan halaman users
    public function index()
    {
        $users = User::all()->except(Auth::id());
        return view('users', compact('users'));
    }

    // ubah status user
    public function update(Request $request, $id)
    {   
        $user = User::find($id);
        $user->update([
            'admin'      => true,
        ]);

        return redirect()->back()->with('message', 'success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
