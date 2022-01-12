<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\Prodi;

use File;

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

    public function updateProfile()
    {
        $id = auth()->user()->prodi_id;
        Request()->validate([
            // 'id' => 'required|unique:teacher,id|min:10|max:10',
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'website' => 'required',
            // 'no_sk_pembukaan' => 'required',
            // 'tgl_sk_pembukaan' => 'required',
            // 'pejabat_sk_pembukaan' => 'required',
            // 'thn_menerima_mhs' => 'required',
            // 'akreditasi' => 'required',
            // 'no_sk_ban_pt' => 'required',
        ]);

        $prodi = Prodi::find($id);
        $prodi->nama = Request()->nama;
        $prodi->alamat = Request()->alamat;
        $prodi->email = Request()->email;
        $prodi->website = Request()->website;
        $prodi->no_sk_pembukaan = Request()->no_sk_pembukaan;
        $prodi->tgl_sk_pembukaan = Request()->tgl_sk_pembukaan;
        $prodi->pejabat_sk_pembukaan = Request()->pejabat_sk_pembukaan;
        $prodi->thn_menerima_mhs = Request()->thn_menerima_mhs;
        $prodi->akreditasi = Request()->akreditasi;
        $prodi->no_sk_ban_pt = Request()->no_sk_ban_pt;
        $prodi->save();
        return redirect()->route('pageProfile')->with('pesan', 'Profile updated successfully!');
    }
    public function detailProdi()
    {
        $id_user = auth()->user()->dosen->prodi->id;
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
