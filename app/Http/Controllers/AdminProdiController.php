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

    public function detailProdi()
    {
        $id_user = auth()->user()->prodi->id;
        if (!Prodi::find($id_user)) {
            abort(404);
        }

        $data = [
            'prodi' => Prodi::find($id_user),
        ];
        return view('admin.prodi.v_prodi_detail', $data);
    }
    public function editProdi()
    {

        if (!Prodi::find($id)) {
            abort(404);
        }
        $data = [
            'prodi' => Prodi::find($id),
        ];
        return view('admin.prodi.v_edit_prodi', $data);
    }

    public function updateProdi()
    {
        Request()->validate([
            // 'id' => 'required|unique:teacher,id|min:10|max:10',
            'name' => 'required',
        ]);

        $dosen = Prodi::find($id);
        $dosen->nama = Request()->name;
        $dosen->save();
        return redirect()->route('prodiDetail', $id)->with('pesan', 'Updated a data !1!1');
    }
}
