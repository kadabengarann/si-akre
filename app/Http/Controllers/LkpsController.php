<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Prodi;

class LkpsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if (Auth::user()->level == 1) {
            $data = [
                'prodi' =>
                Prodi::find(
                    $request->query('id')
                ),
            ];
            return view('admin.lkps', $data);
        }
        return view('dosen.lkps');
    }
    public function lkps($id)
    {
        $data = [
            'prodi' => Prodi::find($id),
        ];
        return view('admin.lkps', $data);
    }
    public function form($id)
    {

        if ($id < 111) {
            return view('lkps.identitas.' . $id[1] . $id[2]);
        }
        return view('lkps.' . $id[0] . '.' . $id[1] . $id[2]);
    }
    public function input($id)
    {
        if ($id < 111) {
            return view('lkps.input.identitas.' . $id[1] . $id[2]);
        }
        return view('lkps.input.' . $id[0] . '.' . $id[1] . $id[2]);
    }
}
