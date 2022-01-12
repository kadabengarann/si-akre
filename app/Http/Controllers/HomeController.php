<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Prodi;
use App\Models\Dosen;
use App\Models\Mahasiswa;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->level == 1) {

            $data = [
                'prodi' => Prodi::get(),
            ];
            return view('admin.dashboard', $data);
        } elseif (Auth::user()->level == 2) {
            $prodi = new Prodi;
            $data = [
                'isComplete' => $prodi->isComplete()
            ];

            return view('admin_prodi.dashboard', $data);
        } elseif (Auth::user()->level == 3) {
            $prodi = new Dosen;
            $data = [
                'isComplete' => $prodi->isComplete()
            ];

            return view('dosen.dashboard', $data);
        } elseif (Auth::user()->level == 4) {
            $prodi = new Mahasiswa;
            $data = [
                'isComplete' => $prodi->isComplete()
            ];

            return view('mhs.dashboard', $data);
        }
    }
}
