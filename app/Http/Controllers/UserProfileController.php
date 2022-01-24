<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Prodi;
use App\Models\Dosen;
use App\Models\Mahasiswa;

class UserProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::user()->level == 2) {
            $id_user = auth()->user()->prodi_id;
            $prodi = new Prodi;

            $data = [
                'prodi' => Prodi::find($id_user),
                'isComplete' => $prodi->isComplete()

            ];
            return view('admin_prodi.profile', $data);
        } elseif (Auth::user()->level == 3) {
            $id_user = auth()->user()->dosen_id;

            $data = [
                'dosen' => Dosen::find($id_user),
            ];

            return view('dosen.profile', $data);
        } elseif (Auth::user()->level == 4) {
            $id_user = auth()->user()->mhs_id;

            $data = [
                'mhs' => Mahasiswa::find($id_user),
            ];

            return view('mhs.profile', $data);
        }
    }
    public function editProfile()
    {
        if (Auth::user()->level == 2) {
            $id_user = auth()->user()->prodi_id;
            $data = [
                'prodi' => Prodi::find($id_user),
            ];
            return view('admin_prodi.edit_profile', $data);
        } elseif (Auth::user()->level == 3) {
            $id_user = auth()->user()->dosen_id;

            $data = [
                'dosen' => Dosen::find($id_user),
            ];

            return view('dosen.edit_profile', $data);
        } elseif (Auth::user()->level == 4) {

            $id_user = auth()->user()->mhs_id;

            $data = [
                'mhs' => Mahasiswa::find($id_user),
            ];

            return view('mhs.edit_profile', $data);
        }
    }
    public function editPassword()
    {
        if (Auth::user()->level == 2) {
            $id_user = auth()->user()->prodi_id;
            $data = [
                'prodi' => Prodi::find($id_user),
            ];
            return view('admin_prodi.edit_profile', $data);
        } elseif (Auth::user()->level == 3) {
            $id_user = auth()->user()->dosen_id;

            $data = [
                'dosen' => Dosen::find($id_user),
            ];

            return view('dosen.edit_password', $data);
        } elseif (Auth::user()->level == 4) {

            $id_user = auth()->user()->mhs_id;

            $data = [
                'mhs' => Mahasiswa::find($id_user),
            ];

            return view('mhs.edit_profile', $data);
        }
    }
}
