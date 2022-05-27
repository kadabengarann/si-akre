<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Permission;
use App\Models\Prodi;
use App\Models\Lkps\{
    Reratadtpr
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
                # code...
                break;
            case '401':
                return $this->insertReretadtpr($request);
                break;
            default:
                # code...
                break;
        }
        
    }
    public function deleteLkps($tableId, $id, Request $request){
        switch ($tableId) {
            case '301':
                # code...
                break;
            case '401':
                return $this->deleteReretadtpr($id, $request);
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
                # code...
                break;
            case '401':
                return $this->editReretadtpr($id, $request);
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
            'skd_psl_pts' => ($request->sks_pss ? $request->skd_psl_pts : 0),
            'skd_ptl' => ($request->sks_pss ? $request->skd_ptl : 0),
            'skd_penelitian' => ($request->sks_pss ? $request->skd_penelitian : 0),
            'skd_pengmas' => ($request->sks_pss ? $request->skd_pengmas : 0),
            'sksmen_pts' => ($request->sks_pss ? $request->sksmen_pts : 0),
            'sksmen_ptl' => ($request->sks_pss ? $request->sksmen_ptl : 0),
            'prodi_id' => (int)($request->prodi_id),
        ]);
        $admin_path = '';
        if (Auth::user()->level == 1) {
            $admin_path = '?id=' . $request->prodi_id;
        }
        return redirect('/lkps/view/401' . $admin_path);
    }
    private function deleteReretadtpr($id, Request $request){
        $data = Reratadtpr::find($id);
        $data->delete();
        $admin_path = '';
        if (Auth::user()->level == 1) {
            $admin_path = '?id=' . $request->prodi_id;
        }
        return redirect('/lkps/view/401' . $admin_path)->with('pesan', 'Deleted a data !');

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
