<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
   public function index()
   {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
   }

   public function store(Request $request)
   {
        $validatedData = $request -> validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'digits_between:9,14', 'unique:users'],
            'email' => ['required', 'string', 'email:dns', 'unique:users'],
            'password' => ['required', 'min:8']
        ]);
        
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        $request->session()->flash('success', 'Registration successfully!');

        return redirect('/login');
    }
}
?>