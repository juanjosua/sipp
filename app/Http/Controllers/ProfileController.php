<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    //profile page
    public function index()
    {
        return view('profile');
    }

    //update profile
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $pob = Str::ucfirst($request->input('gender'));
        $name = Str::ucfirst($request->input('name'));
        $email = Str::lower($request->input('email'));

        $user->update([
            'name'         => $name,
            'email'        => $email,

            'gender'        => $request->input('gender'),
            'pob'		    => $pob,
            'dob'			=> $request->input('dob'),
            'address'		=> $request->input('address'),
            'phone'			=> $request->input('phone'),
            'status'		=> $request->input('status'),
       ]);

       return redirect()->back();
    }
}
