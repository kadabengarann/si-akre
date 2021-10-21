<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Prodi;


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
            return view('admin_prodi.dashboard');
        } elseif (Auth::user()->level == 3) {

            return view('dosen.dashboard');
        }
    }
}
