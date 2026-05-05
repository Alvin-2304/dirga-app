<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LombaController extends Controller
{
    public function index()
    {
        return view('peserta.daftar-lomba');
    }
}