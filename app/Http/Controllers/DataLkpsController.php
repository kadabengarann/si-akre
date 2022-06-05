<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Permission;
use App\Models\Prodi;
use App\Models\Lkps\{
    Jcmb,
    Reratadtpr,
    Sarpra,
    Pnpkm,
    Ktk,
    Addsi,
    Kpl,
};
class DataLkpsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public static function getLkpsData($id, $prodi_id)
    {
        $lkpsData = json_decode(file_get_contents(storage_path() . "/lkps.json"), true);
        $lkpsData = $lkpsData['lkps'];

        foreach ($lkpsData as $n) {
            if ($n['id'] == $id) {
                $lkpsData = $n;
            }
        }
        $tableName = $lkpsData['table'];
        $tableData = DB::table($tableName)
            ->where('prodi_id', '=', $prodi_id)
            ->get();
        return $tableData;
    }
    public static function getLkpsDataRow($prodi_id, $id_row)
    {
        $tableData = DB::table('jcmb')
            ->where('prodi_id', '=', $prodi_id)
            ->get();
        foreach ($tableData as $tableRow) {
            if ($tableRow->id == $id_row) {
                return $tableRow;
            }
        }
        return null;
    }

    public function insertLkps($id, Request $request){
        switch ($id) {
            case '301':
                return $this->insertJcmb($request);
                break;
            case '401':
                return $this->insertReretadtpr($request);
                break;
            case '402':
                return $this->insertKtk($request);
                break;
            case '502':
                return $this->insertAddsi($request);
                break;
            case '503':
                return $this->insertSarpra($request);
                break;
            case '903':
                return $this->insertKpl($request);
                break;
            case '906':
                return $this->insertPnpkm($request);
                break;
            default:
                # code...
                break;
        }
        
    }
    public function deleteLkps($tableId, $id, Request $request){
        switch ($tableId) {
            case '301':
                return $this->deleteJcmb($id, $request);
                break;
            case '401':
                return $this->deleteReretadtpr($id, $request);
                break;
            case '402':
                return $this->deleteKtk($id, $request);
                break;
            case '502':
                return $this->deleteAddsi($id, $request);
                break;
            case '503':
                return $this->deleteSarpra($id, $request);
                break;
            case '903':
                return $this->deleteKpl($id, $request);
                break;
            case '906':
                return $this->deletePnpkm($id, $request);
                break;
            default:
                # code...
                break;
        }
    }
    public function edit($id, Request $request)
    {
        switch ($id) {
            case '301':
                return $this->editJcmb($id, $request);
                break;
            case '401':
                return $this->editReretadtpr($id, $request);
                break;
            case '402':
                return $this->editKtk($id, $request);
                break;
            case '402':
                return $this->editAddsi($id, $request);
                break;
            case '503':
                return $this->editSarpra($id, $request);
                break;
            case '903':
                return $this->editKpl($id, $request);
                break;
            case '906':
                return $this->editPnpkm($id, $request);
                break;
            default:
                # code...
                break;
        }

        $form = Permission::find($id);
        $permit = json_decode($form->access, true);

        $data = [
            'idTable' => $id
        ];
        if (in_array(Auth::user()->level, $permit)) {
            if ($id < 111) {
                return view('lkps.input.identitas.' . $id[1] . $id[2], $data);
            }
            return view('lkps.input.' . $id[0] . '.' . $id[1] . $id[2], $data);
        } else {
            return redirect('/lkps');
        }
    }
    // -------------------------301 JCMB------------------------------
    private function insertJcmb(Request $request)
    {
        $request->validate([
            // 'nm_dosen' => 'required',
        ]);
        // return $request->id;
        Jcmb::updateOrCreate(
            [
                'id'   => $request->id,
            ],
            [
                'ta' => $request->ta,
                'dy_tmpng' => ($request->dy_tmpng ? $request->dy_tmpng : 0),
                'jcm_pendftr' => ($request->jcm_pendftr ? $request->jcm_pendftr : 0),
                'jcm_lulus' => ($request->jcm_lulus ? $request->jcm_lulus : 0),
                'jmb_reg' => ($request->jmb_reg ? $request->jmb_reg : 0),
                'jmb_transfer' => ($request->jmb_transfer ? $request->jmb_transfer : 0),
                'jma_reg' => ($request->jma_reg ? $request->jma_reg : 0),
                'jma_transfer' => ($request->jma_transfer ? $request->jma_transfer : 0),
                'prodi_id' => (int)($request->prodi_id),
            ]
        );
        $admin_path = '';
        if (Auth::user()->level == 1) {
            $admin_path = '?id=' . $request->prodi_id;
        }
        return redirect('/lkps/view/301' . $admin_path)->with('pesan', 'Data berhasil diperbaharui !');
    }
    private function deleteJcmb($id, Request $request)
    {
        $data = Jcmb::find($id);
        $data->delete();
        $admin_path = '';
        if (Auth::user()->level == 1) {
            $admin_path = '?id=' . $request->prodi_id;
        }
        return redirect('/lkps/view/301' . $admin_path)->with('pesan', 'Data berhasil dihapus !');
    }
    private function editJcmb($id, Request $request)
    {
        $form = Permission::find($id);
        $permit = json_decode($form->access, true);
        $dataItem = Jcmb::find($request->id);
        $prodi = $dataItem->prodi_id;
        // return $dataItem->nm_dosen;
        $data = [
            'tables' => $this->allowedTable(),
            'dataItem' => $dataItem,
            'idTable' => $id,
            'prodi' => Prodi::find($prodi),
        ];
        if (in_array(Auth::user()->level, $permit)) {
            if ($id < 111) {
                return view('lkps.input.identitas.' . $id[1] . $id[2], $data);
            }
            return view('lkps.input.' . $id[0] . '.' . $id[1] . $id[2], $data);
        } else {
            return redirect('/lkps');
        }
    }

    // -------------------------401 RERETADTPR------------------------------
    private function insertReretadtpr(Request $request){
        $request->validate([
            'nm_dosen' => 'required',
        ]);
        // return $request->id;
        Reratadtpr::updateOrCreate(
            [
                'id'   => $request->id,
            ],
            [
            'nm_dosen' => $request->nm_dosen,
            'sks_pss' => ($request->sks_pss ? $request->sks_pss : 0),
            'skd_psl_pts' => ($request->skd_psl_pts ? $request->skd_psl_pts : 0),
            'skd_ptl' => ($request->skd_ptl ? $request->skd_ptl : 0),
            'skd_penelitian' => ($request->skd_penelitian ? $request->skd_penelitian : 0),
            'skd_pengmas' => ($request->skd_pengmas ? $request->skd_pengmas : 0),
            'sksmen_pts' => ($request->sksmen_pts ? $request->sksmen_pts : 0),
            'sksmen_ptl' => ($request->sksmen_ptl ? $request->sksmen_ptl : 0),
            'prodi_id' => (int)($request->prodi_id),
        ]);
        $admin_path = '';
        if (Auth::user()->level == 1) {
            $admin_path = '?id=' . $request->prodi_id;
        }
        return redirect('/lkps/view/401' . $admin_path)->with('pesan', 'Data berhasil diperbaharui !');
    }
    private function deleteReretadtpr($id, Request $request){
        $data = Reratadtpr::find($id);
        $data->delete();
        $admin_path = '';
        if (Auth::user()->level == 1) {
            $admin_path = '?id=' . $request->prodi_id;
        }
        return redirect('/lkps/view/401' . $admin_path)->with('pesan', 'Data berhasil dihapus !');

    }
    private function editReretadtpr($id, Request $request)
    {
        $form = Permission::find($id);
        $permit = json_decode($form->access, true);
        $dataItem = Reratadtpr::find($request->id);
        $prodi = $dataItem->prodi_id;
        // return $dataItem->nm_dosen;
        $data = [
            'tables' => $this->allowedTable(),
            'dataItem' => $dataItem,
            'idTable' => $id,
            'prodi' => Prodi::find($prodi),
        ];
        if (in_array(Auth::user()->level, $permit)) {
            if ($id < 111) {
                return view('lkps.input.identitas.' . $id[1] . $id[2], $data);
            }
            return view('lkps.input.' . $id[0] . '.' . $id[1] . $id[2], $data);
        } else {
            return redirect('/lkps');
        }
    }

    // -------------------------402 KTK------------------------------
    private function insertKtk(Request $request)
    {
        $request->validate([
            // 'nm_dosen' => 'required',
        ]);
        // return $request->id;
        Ktk::updateOrCreate(
            [
                'id'   => $request->id,
            ],
            [
                'jtk' => $request->jtk,
                'jtk_s3' => ($request->jtk_s3 ? $request->jtk_s3 : 0),
                'jtk_s2' => ($request->jtk_s2 ? $request->jtk_s2 : 0),
                'jtk_s1' => ($request->jtk_s1 ? $request->jtk_s1 : 0),
                'jtk_d4' => ($request->jtk_d4 ? $request->jtk_d4 : 0),
                'jtk_d3' => ($request->jtk_d3 ? $request->jtk_d3 : 0),
                'jtk_d2' => ($request->jtk_d2 ? $request->jtk_d2 : 0),
                'jtk_d1' => ($request->jtk_d1 ? $request->jtk_d1 : 0),
                'jtk_sm' => ($request->jtk_sm ? $request->jtk_sm : 0),
                'uk' => ($request->uk ? $request->uk : 0),
                
                'prodi_id' => (int)($request->prodi_id),
            ]
        );
        $admin_path = '';
        if (Auth::user()->level == 1) {
            $admin_path = '?id=' . $request->prodi_id;
        }
        return redirect('/lkps/view/402' . $admin_path)->with('pesan', 'Data berhasil diperbaharui !');
    }
    private function deleteKtk($id, Request $request)
    {
        $data = Ktk::find($id);
        $data->delete();
        $admin_path = '';
        if (Auth::user()->level == 1) {
            $admin_path = '?id=' . $request->prodi_id;
        }
        return redirect('/lkps/view/402' . $admin_path)->with('pesan', 'Data berhasil dihapus !');
    }
    private function editKtk($id, Request $request)
    {
        $form = Permission::find($id);
        $permit = json_decode($form->access, true);
        $dataItem = Ktk::find($request->id);
        $prodi = $dataItem->prodi_id;
        // return $dataItem->nm_dosen;
        $data = [
            'tables' => $this->allowedTable(),
            'dataItem' => $dataItem,
            'idTable' => $id,
            'prodi' => Prodi::find($prodi),
        ];
        if (in_array(Auth::user()->level, $permit)) {
            if ($id < 111) {
                return view('lkps.input.identitas.' . $id[1] . $id[2], $data);
            }
            return view('lkps.input.' . $id[0] . '.' . $id[1] . $id[2], $data);
        } else {
            return redirect('/lkps');
        }
    }

    // -------------------------502 ADDSI------------------------------
    private function insertAddsi(Request $request)
    {
        $request->validate([
            // 'nm_dosen' => 'required',
        ]);
        // return $request->id;
        Addsi::updateOrCreate(
            [
                'id'   => $request->id,
            ],
            [
                'jns_data' => $request->jns_data,
                'sppdd_sm' => ($request->sppdd_sm ? $request->sppdd_sm : 0),
                'sppdd_komtj' => ($request->sppdd_komtj ? $request->sppdd_komtj : 0),
                'sppdd_komlan' => ($request->sppdd_komlan ? $request->sppdd_komlan : 0),
                'sppdd_komwan' => ($request->sppdd_komwan ? $request->sppdd_komwan : 0),
                'prodi_id' => (int)($request->prodi_id),
            ]
        );
        $admin_path = '';
        if (Auth::user()->level == 1) {
            $admin_path = '?id=' . $request->prodi_id;
        }
        return redirect('/lkps/view/502' . $admin_path)->with('pesan', 'Data berhasil diperbaharui !');
    }
    private function deleteAddsi($id, Request $request)
    {
        $data = Addsi::find($id);
        $data->delete();
        $admin_path = '';
        if (Auth::user()->level == 1) {
            $admin_path = '?id=' . $request->prodi_id;
        }
        return redirect('/lkps/view/502' . $admin_path)->with('pesan', 'Data berhasil dihapus !');
    }
    private function editAddsi($id, Request $request)
    {
        $form = Permission::find($id);
        $permit = json_decode($form->access, true);
        $dataItem = Addsi::find($request->id);
        $prodi = $dataItem->prodi_id;
        // return $dataItem->nm_dosen;
        $data = [
            'tables' => $this->allowedTable(),
            'dataItem' => $dataItem,
            'idTable' => $id,
            'prodi' => Prodi::find($prodi),
        ];
        if (in_array(Auth::user()->level, $permit)) {
            if ($id < 111) {
                return view('lkps.input.identitas.' . $id[1] . $id[2], $data);
            }
            return view('lkps.input.' . $id[0] . '.' . $id[1] . $id[2], $data);
        } else {
            return redirect('/lkps');
        }
    }
    // -------------------------503 SARPRA------------------------------
    private function insertSarpra(Request $request)
    {
        $request->validate([
            'sar_pra' => 'required',
        ]);
        // return $request->id;
        Sarpra::updateOrCreate(
            [
                'id'   => $request->id,
            ],
            [
                'sar_pra' => $request->sar_pra,
                'dy_tamp' => ($request->dy_tamp ? $request->dy_tamp : 0),
                'luasr' => ($request->luasr ? $request->luasr : 0),
                'jmd' => ($request->jmd ? $request->jmd : 0),
                'jam_lay' => ($request->jam_lay ? $request->jam_lay : 0),
                'prngkt' => ($request->prngkt ? $request->prngkt : 0),
                'prodi_id' => (int)($request->prodi_id),
            ]
        );
        $admin_path = '';
        if (Auth::user()->level == 1) {
            $admin_path = '?id=' . $request->prodi_id;
        }
        return redirect('/lkps/view/503' . $admin_path)->with('pesan', 'Data berhasil diperbaharui !');
    }
    private function deleteSarpra($id, Request $request)
    {
        $data = Sarpra::find($id);
        $data->delete();
        $admin_path = '';
        if (Auth::user()->level == 1) {
            $admin_path = '?id=' . $request->prodi_id;
        }
        return redirect('/lkps/view/503' . $admin_path)->with('pesan', 'Data berhasil dihapus !');
    }
    private function editSarpra($id, Request $request)
    {
        $form = Permission::find($id);
        $permit = json_decode($form->access, true);
        $dataItem = Sarpra::find($request->id);
        $prodi = $dataItem->prodi_id;
        // return $dataItem->nm_dosen;
        $data = [
            'tables' => $this->allowedTable(),
            'dataItem' => $dataItem,
            'idTable' => $id,
            'prodi' => Prodi::find($prodi),
        ];
        if (in_array(Auth::user()->level, $permit)) {
            if ($id < 111) {
                return view('lkps.input.identitas.' . $id[1] . $id[2], $data);
            }
            return view('lkps.input.' . $id[0] . '.' . $id[1] . $id[2], $data);
        } else {
            return redirect('/lkps');
        }
    }

    // ------------------------- 903 KPL------------------------------
    private function insertKpl(Request $request)
    {
        $request->validate([
            // 'nm_dosen' => 'required',
        ]);
        // return $request->id;
        Kpl::updateOrCreate(
            [
                'id'   => $request->id,
            ],
            [
                'jns_kemp' => $request->jns_kemp,
                'tkp_ps' => ($request->tkp_ps ? $request->tkp_ps : 0),
                'tkp_b' => ($request->tkp_b ? $request->tkp_b : 0),
                'tkp_c' => ($request->tkp_c ? $request->tkp_c : 0),
                'tkp_k' => ($request->tkp_k ? $request->tkp_k : 0),
                'rnc_tndlnjt' => ($request->rnc_tndlnjt ? $request->rnc_tndlnjt : '-'),
                'prodi_id' => (int)($request->prodi_id),
            ]
        );
        $admin_path = '';
        if (Auth::user()->level == 1) {
            $admin_path = '?id=' . $request->prodi_id;
        }
        return redirect('/lkps/view/903' . $admin_path)->with('pesan', 'Data berhasil diperbaharui !');
    }
    private function deleteKpl($id, Request $request)
    {
        $data = Kpl::find($id);
        $data->delete();
        $admin_path = '';
        if (Auth::user()->level == 1) {
            $admin_path = '?id=' . $request->prodi_id;
        }
        return redirect('/lkps/view/903' . $admin_path)->with('pesan', 'Data berhasil dihapus !');
    }
    private function editKpl($id, Request $request)
    {
        $form = Permission::find($id);
        $permit = json_decode($form->access, true);
        $dataItem = Kpl::find($request->id);
        $prodi = $dataItem->prodi_id;
        // return $dataItem->nm_dosen;
        $data = [
            'tables' => $this->allowedTable(),
            'dataItem' => $dataItem,
            'idTable' => $id,
            'prodi' => Prodi::find($prodi),
        ];
        if (in_array(Auth::user()->level, $permit)) {
            if ($id < 111) {
                return view('lkps.input.identitas.' . $id[1] . $id[2], $data);
            }
            return view('lkps.input.' . $id[0] . '.' . $id[1] . $id[2], $data);
        } else {
            return redirect('/lkps');
        }
    }
    // ------------------------- 906 PNPKM------------------------------
    private function insertPnpkm(Request $request)
    {
        $request->validate([
            'dtpr' => 'required',
        ]);
        Pnpkm::updateOrCreate(
            [
                'id'   => $request->id,
            ],
            [
                'dtpr' => $request->dtpr,
                'pub_infokom' => ($request->pub_infokom ? $request->pub_infokom : 0),
                'pen_infokom' => ($request->pen_infokom ? $request->pen_infokom : 0),
                'pen_infokomHKI' => ($request->pen_infokomHKI ? $request->pen_infokomHKI : 0),
                'pkm_infokomadop' => ($request->pkm_infokomadop ? $request->pkm_infokomadop : 0),
                'pkm_infokomhki' => ($request->pkm_infokomhki ? $request->pkm_infokomhki : 0),
                'prodi_id' => (int)($request->prodi_id),
            ]
        );
        $admin_path = '';
        if (Auth::user()->level == 1) {
            $admin_path = '?id=' . $request->prodi_id;
        }
        return redirect('/lkps/view/906' . $admin_path)->with('pesan', 'Data berhasil diperbaharui !');
    }
    private function deletePnpkm($id, Request $request)
    {
        $data = Pnpkm::find($id);
        $data->delete();
        $admin_path = '';
        if (Auth::user()->level == 1) {
            $admin_path = '?id=' . $request->prodi_id;
        }
        return redirect('/lkps/view/906' . $admin_path)->with('pesan', 'Data berhasil dihapus !');
    }
    private function editPnpkm($id, Request $request)
    {
        $form = Permission::find($id);
        $permit = json_decode($form->access, true);
        $dataItem = Pnpkm::find($request->id);
        $prodi = $dataItem->prodi_id;
        // return $dataItem->nm_dosen;
        $data = [
            'tables' => $this->allowedTable(),
            'dataItem' => $dataItem,
            'idTable' => $id,
            'prodi' => Prodi::find($prodi),
        ];
        if (in_array(Auth::user()->level, $permit)) {
            if ($id < 111) {
                return view('lkps.input.identitas.' . $id[1] . $id[2], $data);
            }
            return view('lkps.input.' . $id[0] . '.' . $id[1] . $id[2], $data);
        } else {
            return redirect('/lkps');
        }
    }
    
    public function updateJCMB(Request $request)
    {
        DB::table('jcmb')
            ->updateOrInsert(
                [
                    'id' => $request->id_ta,
                ],
                [
                    'ta' => $request->ta_year,
                    'prodi_id' => (int)($request->prodi_id),
                    'dy_tmpng' => $request->dy_tmpng,
                    'jcm_pendftr' => $request->jcm_pendftr,
                    'jcm_lulus' => $request->jcm_lulus,
                    'jmb_reg' => $request->jmb_reg,
                    'jmb_transfer' => $request->jmb_transfer,
                    'jma_reg' => $request->jma_reg,
                    'jma_transfer' => $request->jma_transfer,

                ]
            );
        $admin_path = '';
        if (Auth::user()->level == 1) {
            $admin_path = '?id=' . $request->prodi_id;
        }
        return redirect('/lkps/view/301' . $admin_path);
    }

    public function updateTsYear(Request $request)
    {

        DB::table('utils')
            ->updateOrInsert(
                ['id' => $request->id],
                ['value' => $request->value],
                ['prodi_id' => $request->prodi_id]
            );


        return response()->json(['success' => 'Nilai TS berhasil disimpan!']);
    }

    public function allowedTable()
    {
        $permission =  Permission::get();
        # code...
        $tables = array();
        foreach ($permission as $n) {
            if (in_array(Auth::user()->level, json_decode($n->access, true))) {
                if (!(array_key_exists(strval($n->id)[0], $tables))) {
                    $tables[strval($n->id)[0]] = array($n->id);
                } else {
                    array_push($tables[strval($n->id)[0]], $n->id);
                }
            }
        }
        return $tables;
    }
}
