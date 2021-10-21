<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Prodi;
// use Yajra\Datatables\Datatables;
use Datatables;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::user()->level == 1) {

            // index_dosen();
        }
    }
    public function index_prodi(Request $request)
    {
        // if ($request->ajax()) {
        //     return Datatables::of(Prodi::all())
        //         ->addColumn('kode_prodi', function (Prodi $prodi) {
        //             return sprintf('PR%03d', $prodi->id);
        //         })
        //         ->addColumn('action', function (Prodi $prodi) {
        //             $btn = '
        //         <a class="btn btn-info" href="/prodi/detail/' . $prodi->id . '"><i class="fas fa-info-circle"></i> Detail</a>
        //         <a class="btn btn-secondary" href="/prodi/edit/' . $prodi->id . '"><i class="far fa-edit"></i> Edit</a>
        //         <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete' . $prodi->id . '">
        //         <i class="fas fa-trash-alt"></i> Hapus
        //         </button>
        //         ';
        //             return $btn;
        //         })
        //         ->rawColumns(['action'])
        //         ->toJson();
        // }
        $data = [
            'prodi' => Prodi::get(),
        ];
        return view('admin.prodi.v_prodi', $data);
    }
    public function detailProdi($id)
    {

        if (!Prodi::find($id)) {
            abort(404);
        }

        $data = [
            'prodi' => Prodi::find($id),
        ];
        return view('admin.prodi.v_prodi_detail', $data);
    }

    public function addProdi()
    {
        return view('admin.prodi.v_add_prodi');
    }
    public function insertProdi()
    {
        Request()->validate([
            // 'id' => 'required|unique:teacher,id|min:10|max:10',
            'name' => 'required',
        ]);

        Prodi::create([
            'nama' => Request()->name,
        ]);

        return redirect()->route('dosenList')->with('pesan', 'Added new data !1!1');
    }

    public function deleteProdi($id)
    {
        $dosen = Prodi::find($id);
        $dosen->delete();
        return redirect()->route('prodiList')->with('pesan', 'Deleted a data !1!1');
    }
    public function editProdi($id)
    {

        if (!Prodi::find($id)) {
            abort(404);
        }
        $data = [
            'prodi' => Prodi::find($id),
        ];
        return view('admin.prodi.v_edit_prodi', $data);
    }

    public function updateProdi($id)
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
