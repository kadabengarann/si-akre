<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reviewer;

use File;

class ReviewerController extends Controller
{
    public function index()
    {
        $id_user = auth()->user()->rev_id;

        $data = [
            'reviewer' => Reviewer::find($id_user),
        ];


        return view('reviewer.dashboard');
    }
    public function profile()
    {
        $id_user = auth()->user()->rev_id;

        $data = [
            'reviewer' => Reviewer::find($id_user),
        ];

        return view('reviewer.profile', $data);
    }
    public function editProfile()
    {
        $id_user = auth()->user()->rev_id;

        $data = [
            'mhs' => Reviewer::find($id_user),
        ];

        return view('reviewer.edit_profile', $data);
    }
    public function updateProfile()
    {
        $id = auth()->user()->rev_id;
        Request()->validate([
            // 'id' => 'required|unique:teacher,id|min:10|max:10',
            'name' => 'required',
            // 'address' => 'required',
            'date' => 'required',
            // 'birthplace' => 'required',
            // 'foto_mhs' => 'file|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        // if (Request()->foto_mhs <> "") {
        //     $file = Request()->file('foto_mhs');
        //     $nama_file = time() . Request()->name . "." . $file->extension();

        //     $tujuan_upload = 'img/mhs';
        //     $file->move($tujuan_upload, $nama_file);

        //     $mhs = Mahasiswa::find($id);
        //     File::delete('img/mhs/' . $mhs->img_url);

        //     $mhs->nama = Request()->name;
        //     $mhs->alamat = Request()->address;
        //     $mhs->tgl_lahir = Request()->date;
        //     $mhs->tmp_lahir = Request()->birthplace;
        //     $mhs->img_url = $nama_file;
        //     $mhs->save();
        // } else {
        //     $mhs = Mahasiswa::find($id);
        //     $mhs->nama = Request()->name;
        //     $mhs->alamat = Request()->address;
        //     $mhs->tgl_lahir = Request()->date;
        //     $mhs->tmp_lahir = Request()->birthplace;
        //     $mhs->save();
        // }
        return redirect()->route('pageProfile')->with('pesan', 'Profile updated!');
    }
}
