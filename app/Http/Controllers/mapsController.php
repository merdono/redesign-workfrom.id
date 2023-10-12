<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mapsController extends Controller
{
    public function index(){
        return view('maps.index');
    }
}
?>