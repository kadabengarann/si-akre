<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProdiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index_prodi()
    {
        return view('dosen.prodi');
    }

}
