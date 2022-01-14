<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

use File;

class DosenController extends Controller
{
    //
    public function index()
    {
        $id_user = auth()->user()->dosen_id;

        $data = [
            'dosen' => Dosen::find($id_user),
        ];


        return view('dosen.dashboard');
    }
    public function profile()
    {
        $id_user = auth()->user()->dosen_id;

        $data = [
            'dosen' => Dosen::find($id_user),
        ];

        return view('dosen.profile', $data);
    }
    public function editProfile()
    {
        $id_user = auth()->user()->dosen_id;

        $data = [
            'dosen' => Dosen::find($id_user),
        ];

        return view('dosen.edit_profile', $data);
    }
    public function updateProfile()
    {
        $id = auth()->user()->dosen_id;
        Request()->validate([
            // 'id' => 'required|unique:teacher,id|min:10|max:10',
            'name' => 'required',
            // 'address' => 'required',
            'date' => 'required',
            'birthplace' => 'required',
            'foto_dos' => 'file|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        if (Request()->foto_dos <> "") {
            $file = Request()->file('foto_dos');
            $nama_file = time() . Request()->name . "." . $file->extension();

            $tujuan_upload = 'img/dos';
            $file->move($tujuan_upload, $nama_file);

            $dosen = Dosen::find($id);
            File::delete('img/dos/' . $dosen->img_url);

            $dosen->nama = Request()->name;
            $dosen->alamat = Request()->address;
            $dosen->tgl_lahir = Request()->date;
            $dosen->tmp_lahir = Request()->birthplace;
            $dosen->img_url = $nama_file;
            $dosen->save();
        } else {
            $dosen = Dosen::find($id);
            $dosen->nama = Request()->name;
            $dosen->alamat = Request()->address;
            $dosen->tgl_lahir = Request()->date;
            $dosen->tmp_lahir = Request()->birthplace;
            $dosen->save();
        }
        return redirect()->route('pageProfile')->with('pesan', 'Profile updated!');
    }
}
