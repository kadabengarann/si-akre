<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class LkpsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('dosen.lkps');
    }
    public function form($id)
    {
        // if (!MataKuliah::find($id)) {
        //     abort(404);
        // }
        // $hah = $id[3];
        // $parent = 1;
        // $child = 0;
        // for ($i=1001; $i <= $id; $i++) {
        //     $child++; 
        //     if (view()->exists('lkps.'.$parent.'.'.$child))
        //     {
        //         continue;
        //     }else {
        //         $parent++;
        //         $child = 1;
        //     }
        // }
        if ($id < 111) {
            return view('lkps.identitas.'.$id[1].$id[2]);
        }
        return view('lkps.'.$id[0].'.'.$id[1].$id[2]);
    }
    public function input($id)
    {
        if ($id < 111) {
            return view('lkps.input.identitas.'.$id[1].$id[2]);
        }
        return view('lkps.input.'.$id[0].'.'.$id[1].$id[2]);
    }

}
