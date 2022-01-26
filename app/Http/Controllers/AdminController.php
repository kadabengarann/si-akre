<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Prodi;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;

use Yajra\Datatables\Datatables;

// use Datatables;
use File;

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
                <a class="btn btn-info" href="/manage/prodi/' . $prodi->id . '"><i class="fas fa-info-circle"></i> Detail</a>
                <a class="btn btn-secondary" href="/manage/prodi/edit/' . $prodi->id . '"><i class="far fa-edit"></i> Edit</a>
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
                    return strtoupper($prodi->user->username);
                })
                ->addColumn('action', function (Prodi $prodi) {
                    $btn = '
                <a class="btn btn-info" href="/manage/prodi/' . $prodi->id . '"><i class="fas fa-info-circle"></i> Detail</a>
                <a class="btn btn-secondary" href="/manage/prodi/edit/' . $prodi->id . '"><i class="far fa-edit"></i> Edit</a>
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
        if ($user->level == 1) {
            $user_url = '#';
        } elseif ($user->level == 2) {
            $user_url = '/manage/prodi/' . $user->id;
        } elseif ($user->level == 3) {
            $user_url =
                '/manage/dosen/' . $user->id;
        } elseif ($user->level == 4) {
            $user_url =
                '/manage/mhs/' . $user->id;
        }
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
            'user_url' => $user_url,
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
            'username' => 'required|regex:/^[A-Za-z0-9 ]+$/|unique:users,username|max:10',
            'password' =>  ['required', 'min:8', 'max:16'],
            're-password' => ['required', 'min:8', 'max:16', 'same:password'],
        ]);

        $prodi = Prodi::create([
            'nama' => Request()->name,
        ]);

        User::create([
            'username' => Request()->username,
            'password' => Hash::make(
                Request()->password
            ),
            'level' => 2,
            'prodi_id' => $prodi->id,
        ]);

        return redirect()->route('prodiList')->with('pesan', 'Added new data !1!1');
    }

    public function deleteProdi($id)
    {
        $prodi = Prodi::find($id);
        $user = User::where('prodi_id', $id);
        $prodi->delete();
        $user->delete();
        return redirect()->route('prodiList')->with('pesan', 'Deleted a data !1!1');
    }
    public function editProdi($id)
    {

        if (!Prodi::find($id)) {
            abort(404);
        }
        $data = [
            'prodi' => Prodi::find($id),
            // 'user' => Prodi::find($id)->user,
        ];
        return view('admin.prodi.v_edit_prodi', $data);
    }

    public function updateProdi($id)
    {
        $prodi = Prodi::find($id);
        $user = $prodi->user;

        Request()->validate([
            'username' => 'required|unique:users,username,' . $prodi->user->id . 'max:5|max:10',
            'name' => 'required',
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

        $prodi->nama = Request()->name;
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

        if (Request()->username != $user->username) {
            $user->username = Request()->username;
            $user->save();
        }
        return redirect()->route('prodiDetail', $id)->with('pesan', 'Updated a data !1!1');
    }
    public function editProdiPassword($id)
    {
        $data = [
            'prodi' => Prodi::find($id),
        ];

        return view('admin.prodi.v_edit_password', $data);
    }
    public function updateProdiCredential($id)
    {
        $prodi = Prodi::find($id);
        $user = $prodi->user;

        Request()->validate([
            // 'id' => 'required|unique:teacher,id|min:10|max:10',
            'admin-password' => ['required', new MatchOldPassword],
            'new_password' =>  ['required', 'min:8', 'max:16'],
            'retype_new_password' => ['required', 'min:8', 'max:16', 'same:new_password'],
        ]);

        $user->password = Hash::make(Request()->new_password);
        $user->save();
        return redirect()->route('prodiDetail', $id)->with('pesan', 'Password changed!');
    }

    public function index_mhs(Request $request)
    {
        if ($request->ajax()) {
            return Datatables::of(Mahasiswa::all())
                ->addColumn('kode_mhs', function (Mahasiswa $mhs) {
                    return strtoupper($mhs->user->username);
                })
                ->addColumn('action', function (Mahasiswa $mhs) {
                    $btn = '
                <a class="btn btn-info" href="/manage/mhs/' . $mhs->id . '"><i class="fas fa-info-circle"></i> Detail</a>
                <a class="btn btn-secondary" href="/manage/mhs/edit/' . $mhs->id . '"><i class="far fa-edit"></i> Edit</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete' . $mhs->id . '">
                <i class="fas fa-trash-alt"></i> Hapus
                </button>
                ';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->toJson();
        }
        $data = [
            'mhs' => Mahasiswa::get(),
        ];
        return view('admin.mhs.v_mhs', $data);
    }
    public function detailMhs($id)
    {

        if (!Mahasiswa::find($id)) {
            abort(404);
        }

        $data = [
            'mhs' => Mahasiswa::find($id),
        ];
        return view('admin.mhs.v_mhs_detail', $data);
    }

    public function addMhs()
    {
        $data = [
            'prodi' => Prodi::all(),
        ];

        return view('admin.mhs.v_add_mhs', $data);
    }
    public function insertMhs()
    {
        Request()->validate([
            // 'id' => 'required|unique:teacher,id|min:10|max:10',
            'name' => 'required',
            'id_prodi' => 'required',
            'username' => 'required|regex:/^[A-Za-z0-9 ]+$/|unique:users,username|max:10',
            'foto_mhs' => 'file|image|mimes:jpeg,png,jpg|max:2048',


            'password' =>  ['required', 'min:8', 'max:16'],
            're-password' => ['required', 'min:8', 'max:16', 'same:password'],
        ]);
        if (Request()->foto_mhs <> "") {
            $file = Request()->file('foto_mhs');
            $nama_file = time() . Request()->name . "." . $file->extension();

            $tujuan_upload = 'img/mhs';
            $file->move($tujuan_upload, $nama_file);
            $img_url = $nama_file;
        } else {
            $img_url  = 'user.jpg';
        }
        $mhs = Mahasiswa::create([
            'nama' => Request()->name,
            'nim' => Request()->username,
            'img_url' =>  $img_url,
            'prodi_id' => Request()->id_prodi,
        ]);

        User::create([
            'username' => Request()->username,
            'password' => Hash::make(
                Request()->password
            ),
            'level' => 4,
            'mhs_id' => $mhs->id,

        ]);

        return redirect()->route('mhsList')->with('pesan', 'Added new data !1!1');
    }

    public function deleteMhs($id)
    {
        $mhs = Mahasiswa::find($id);
        $user = User::where('mhs_id', $id);
        File::delete('img/mhs/' . $mhs->img_url);

        $mhs->delete();
        $user->delete();
        return redirect()->route('mhsList')->with('pesan', 'Deleted a data !1!1');
    }
    public function editMhs($id)
    {

        if (!Mahasiswa::find($id)) {
            abort(404);
        }
        $data = [
            'mhs' => Mahasiswa::find($id),
            'prodi' => Prodi::all(),
            // 'user' => Mahasiswa::find($id)->user,
        ];
        return view('admin.mhs.v_edit_mhs', $data);
    }

    public function updateMhs($id)
    {
        $mhs = Mahasiswa::find($id);
        $user = $mhs->user;

        Request()->validate([
            'username' => 'required|unique:users,username,' . $mhs->user->id . 'max:5|max:16',
            'name' => 'required',
            'address' => 'required',
            'foto_mhs' => 'file|image|mimes:jpeg,png,jpg|max:2048',

        ]);
        if (Request()->foto_mhs <> "") {
            $file = Request()->file('foto_mhs');
            $nama_file = time() . Request()->name . "." . $file->extension();

            $tujuan_upload = 'img/mhs';
            $file->move($tujuan_upload, $nama_file);

            $mhs = Mahasiswa::find($id);
            File::delete('img/mhs/' . $mhs->img_url);

            $mhs->nama = Request()->name;
            $mhs->prodi_id = Request()->id_prodi;
            $mhs->alamat = Request()->address;
            $mhs->tgl_lahir = Request()->date;
            $mhs->tmp_lahir = Request()->birthplace;
            $mhs->img_url = $nama_file;
            $mhs->save();
        } else {
            $mhs->nama = Request()->name;
            $mhs->prodi_id = Request()->id_prodi;

            $mhs->alamat = Request()->address;
            $mhs->tgl_lahir = Request()->date;
            $mhs->tmp_lahir = Request()->birthplace;
            $mhs->save();
        }

        if (Request()->username != $user->username) {
            $user->username = Request()->username;
            $user->save();
        }
        return redirect()->route('mhsDetail', $id)->with('pesan', 'Updated a data !1!1');
    }
    public function editMhsPassword($id)
    {
        $data = [
            'mhs' => Mahasiswa::find($id),
        ];

        return view('admin.mhs.v_edit_password', $data);
    }
    public function updateMhsCredential($id)
    {
        $mhs = Mahasiswa::find($id);
        $user = $mhs->user;

        Request()->validate([
            // 'id' => 'required|unique:teacher,id|min:10|max:10',
            'admin-password' => ['required', new MatchOldPassword],
            'new_password' =>  ['required', 'min:8', 'max:16'],
            'retype_new_password' => ['required', 'min:8', 'max:16', 'same:new_password'],
        ]);

        $user->password = Hash::make(Request()->new_password);
        $user->save();
        return redirect()->route('mhsDetail', $id)->with('pesan', 'Password changed!');
    }



    public function index_dosen(Request $request)
    {
        if ($request->ajax()) {
            return Datatables::of(Dosen::all())
                // ->addColumn('kode_mhs', function (Dosen $mhs) {
                //     return strtoupper($mhs->user);
                // })
                ->addColumn('action', function (Dosen $dosen) {
                    $btn = '
                <a class="btn btn-info" href="/manage/dosen/' . $dosen->id . '"><i class="fas fa-info-circle"></i> Detail</a>
                <a class="btn btn-secondary" href="/manage/dosen/edit/' . $dosen->id . '"><i class="far fa-edit"></i> Edit</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete' . $dosen->id . '">
                <i class="fas fa-trash-alt"></i> Hapus
                </button>
                ';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->toJson();
        }
        $data = [
            'dosen' => Dosen::get(),
        ];
        return view('admin.dosen.v_dosen', $data);
    }

    public function detailDosen($id)
    {

        if (!Dosen::find($id)) {
            abort(404);
        }

        $data = [
            'dosen' => Dosen::find($id),
        ];
        return view('admin.dosen.v_dosen_detail', $data);
    }

    public function addDosen()
    {
        $data = [
            'prodi' => Prodi::all(),
        ];

        return view('admin.dosen.v_add_dosen', $data);
    }
    public function insertDosen()
    {
        Request()->validate([
            // 'id' => 'required|unique:teacher,id|min:10|max:10',
            'name' => 'required',
            'id_prodi' => 'required',
            'username' => 'required|regex:/^[A-Za-z0-9 ]+$/|unique:users,username|max:10',
            'foto_dos' => 'file|image|mimes:jpeg,png,jpg|max:2048',


            'password' =>  ['required', 'min:8', 'max:16'],
            're-password' => ['required', 'min:8', 'max:16', 'same:password'],
        ]);
        if (Request()->foto_dos <> "") {
            $file = Request()->file('foto_dos');
            $nama_file = time() . Request()->name . "." . $file->extension();

            $tujuan_upload = 'img/dos';
            $file->move($tujuan_upload, $nama_file);
            $img_url = $nama_file;
        } else {
            $img_url  = 'user.jpg';
        }
        $dosen = Dosen::create([
            'nama' => Request()->name,
            'nip' => Request()->username,
            'img_url' =>  $img_url,
            'prodi_id' => Request()->id_prodi,
        ]);

        User::create([
            'username' => Request()->username,
            'password' => Hash::make(
                Request()->password
            ),
            'level' => 3,
            'dosen_id' => $dosen->id,

        ]);

        return redirect()->route('dosenList')->with('pesan', 'Added new data !1!1');
    }

    public function deleteDosen($id)
    {
        $dosen = Dosen::find($id);
        $user = User::where('dosen_id', $id);
        File::delete('img/dos/' . $dosen->img_url);

        $dosen->delete();
        $user->delete();
        return redirect()->route('dosenList')->with('pesan', 'Deleted a data !1!1');
    }
    public function editDosen($id)
    {

        if (!Dosen::find($id)) {
            abort(404);
        }
        $data = [
            'dosen' => Dosen::find($id),
            'prodi' => Prodi::all(),
            // 'user' => Dosen::find($id)->user,
        ];
        return view('admin.dosen.v_edit_dosen', $data);
    }

    public function updateDosen($id)
    {
        $dosen = Dosen::find($id);
        $user = $dosen->user;

        Request()->validate([
            'username' => 'required|unique:users,username,' . $dosen->user->id . 'max:5|max:16',
            // 'id_prodi' => 'required',
            'name' => 'required',
            'address' => 'required',
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
            // $dosen->prodi_id = Request()->id_prodi;
            $dosen->alamat = Request()->address;
            $dosen->tgl_lahir = Request()->date;
            $dosen->tmp_lahir = Request()->birthplace;
            $dosen->img_url = $nama_file;
            $dosen->save();
        } else {
            $dosen->nama = Request()->name;
            // $dosen->prodi_id = Request()->id_prodi;
            $dosen->alamat = Request()->address;
            $dosen->tgl_lahir = Request()->date;
            $dosen->tmp_lahir = Request()->birthplace;
            $dosen->save();
        }

        if (Request()->username != $user->username) {
            $user->username = Request()->username;
            $dosen->nip = Request()->username;
            $user->save();
        }
        return redirect()->route('dosenDetail', $id)->with('pesan', 'Updated a data !1!1');
    }
    public function editDosenPassword($id)
    {
        $data = [
            'dosen' => Dosen::find($id),
        ];

        return view('admin.dosen.v_edit_password', $data);
    }
    public function updateDosenCredential($id)
    {
        $dosen = Dosen::find($id);
        $user = $dosen->user;

        Request()->validate([
            // 'id' => 'required|unique:teacher,id|min:10|max:10',
            'admin-password' => ['required', new MatchOldPassword],
            'new_password' =>  ['required', 'min:8', 'max:16'],
            'retype_new_password' => ['required', 'min:8', 'max:16', 'same:new_password'],
        ]);

        $user->password = Hash::make(Request()->new_password);
        $user->save();
        return redirect()->route('dosenDetail', $id)->with('pesan', 'Password changed!');
    }
}
