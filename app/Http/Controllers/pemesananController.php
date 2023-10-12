<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pemesananController extends Controller
{
    public function index(){
        return view('pemesanan.index');
    }
}
