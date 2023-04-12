<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuBesarController extends Controller
{
    public function index()
    {
        $bb = \App\Bukubesar::orderBy('created_at', 'DESC')->get();
        return view( 'bukubesar.bukubesar' , ['bukubesar' => $bb]);
    }
}
