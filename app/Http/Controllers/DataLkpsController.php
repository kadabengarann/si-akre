<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\Permission;
use App\Models\Prodi;

class DataLkpsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public static function getLkpsData($prodi_id)
    {
        $tableData = DB::table('jcmb')
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
}
