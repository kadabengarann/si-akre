<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Prodi;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;
// use Datatables;

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
    public function prodi_data(Request $request)
    {
        return Datatables::of(Prodi::all())
            ->addColumn('kode_prodi', function (Prodi $prodi) {
                return sprintf('PR%03d', $prodi->id);
            })
            ->addColumn('action', function (Prodi $prodi) {
                $btn = '
                <a class="btn btn-info" href="/prodi/detail/' . $prodi->id . '"><i class="fas fa-info-circle"></i> Detail</a>
                <a class="btn btn-secondary" href="/prodi/edit/' . $prodi->id . '"><i class="far fa-edit"></i> Edit</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete' . $prodi->id . '">
                <i class="fas fa-trash-alt"></i> Hapus
                </button>
                ';
                return $btn;
            })
            ->rawColumns(['action'])
            ->toJson();
    }
    public function index_iaps()
    {
        $data = [
            'prodi' => Prodi::get(),
        ];
        return view('admin.admin.iaps_prodi', $data);
    }

    public function index_prodi(Request $request)
    {
        if ($request->ajax()) {
            return Datatables::of(Prodi::all())
                ->addColumn('kode_prodi', function (Prodi $prodi) {
                    return sprintf('PR%03d', $prodi->id);
                })
                ->addColumn('action', function (Prodi $prodi) {
                    $btn = '
                <a class="btn btn-info" href="/prodi/detail/' . $prodi->id . '"><i class="fas fa-info-circle"></i> Detail</a>
                <a class="btn btn-secondary" href="/prodi/edit/' . $prodi->id . '"><i class="far fa-edit"></i> Edit</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete' . $prodi->id . '">
                <i class="fas fa-trash-alt"></i> Hapus
                </button>
                ';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->toJson();
        }
        $data = [
            'prodi' => Prodi::get(),
        ];
        return view('admin.prodi.v_prodi', $data);
    }
    public function index_audit_log(Request $request)
    {
        if ($request->ajax()) {
            return Datatables::of(DB::table('audits')->orderBy('id', 'ASC')->get())
                ->addColumn('user', function ($audit) {
                    $user = DB::table('users')->where('id', '=', $audit->user_id)->first();
                    return  $user->username;
                })
                ->addColumn('log_event', function ($audit) {
                    $badge = '<span class=" badge rounded-pill '
                        . (($audit->event == 'created') ? ' bg-green '  : ($audit->event == 'deleted' ? ' bg-red ' : ($audit->event == 'updated' ? ' bg-yellow ' : '')))
                        . '">' . $audit->event . '</span>';
                    return  $badge;
                })
                ->addColumn('action', function ($audit) {
                    $btn = '
                    <a class="btn btn-info" href="/audit-log/' . $audit->id . '"><i class="fas fa-info-circle"></i> Detail</a>                    ';
                    return $btn;
                })
                ->rawColumns(['log_event', 'action'])
                ->toJson();
        }
        return view('admin.audit_log');
    }
    public function audit_log_detail($id)
    {
        $roles = array("Super Admin", "Admin Prodi", "Dosen", "Mahasiswa");
        $audit = DB::table('audits')->where('id', '=', $id)->first();
        $user = User::find($audit->user_id);
        $user_role = $roles[$user->level - 1];
        // $audit = DB::table('audits')->where('id', '=', $id)->first();
        if ($audit->event == 'updated' || $audit->event == 'created') {
            $data_modified = json_decode($audit->new_values);
            $data_modified2 = json_decode($audit->old_values);
        } else if ($audit->event == 'deleted') {
            $data_modified = json_decode($audit->old_values);
            $data_modified2 = json_decode($audit->new_values);
        }
        $data = [
            'audit' => $audit,
            'data_modified' => $data_modified,
            'data_modified2' => $data_modified2,
            'user' => $user,
            'user_role' => $user_role,
        ];

        // return $audit;
        return view('admin.audit_log_detail', $data);
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

        return redirect()->route('prodiList')->with('pesan', 'Added new data !1!1');
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
