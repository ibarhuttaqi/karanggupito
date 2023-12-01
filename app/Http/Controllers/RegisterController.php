<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    //
    public function index() {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request) {
        // return $request->all();
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);
        // $validatedData['is_admin'] = true;

        // $validatedData['password'] = bcrypt($validatedData['password']);

        // dd('registrasi berhasil');
        User::create($validatedData);
        $request = session();
        $request->flash('success', 'Registrasi berhasil! silahkan login');
        return redirect('/home');
    }
}
