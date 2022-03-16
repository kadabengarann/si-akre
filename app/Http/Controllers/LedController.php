<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Prodi;
use Illuminate\Http\Request;

class LedController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if (Auth::user()->level == 1) {
            $data = [
                'prodi' =>
                Prodi::find(
                    $request->query('id')
                ),
                'tables' => $this->allowedTable(),

            ];
            if (null == $request->query('id')) {
                return redirect('/');
            }

            return view('admin.lkps', $data);
        } elseif (Auth::user()->level == 2) {

            return view('admin_prodi.led');
        }
    }
    public function form($id)
    {
        // $form = Permission::find($id);
        // $permit = json_decode($form->access, true);
        // $tables = $this->allowedTable();
        if (Auth::user()->level == 1) {
            $prodi = Prodi::find(7);
        } elseif (Auth::user()->level == 2) {
            $prodi = Prodi::find(Auth::user()->prodi->id);
        } elseif (Auth::user()->level == 3) {
            $prodi = Prodi::find(Auth::user()->dosen->prodi_id);
        }
        $formPenilaian  = null;
        if ($id[0] != 1 && $id[0] != 2) {
            $formPenilaian = '30' . $id[0];
        }


        $data = [
            // 'tables' => $this->allowedTable(),
            'prev' => $this->prev_num($id),
            'next' => $this->next_num($id),
            'idTable' => $id,
            'idTablePenilaian' => $formPenilaian,
            'prodi' => $prodi,
            // 'permit' => $form
        ];
        // return $tables;
        $table_path = 'led.' . $id[0] . '.' . $id[1] . $id[2];
        if (view()->exists($table_path)) {
            return view($table_path, $data);
        } else {
            return redirect('/led');
        }
    }

    public function prev_num($id)
    {
        $is = $id[0];
        $js = $id[1];
        $ks = $id[2];
        $ks -= 1;
        $loop = 0;
        $loop1 = 0;
        $loop2 = 0;
        for ($i = $is; $i >= 0; $i--) {
            if ($loop2 == 0) {
                $i = $is;
            }
            for ($j = 9; $j >= 0; $j--) {
                if ($loop1 == 0) {
                    $j = $js;
                }
                for ($k = 9; $k >= 0; $k--) {
                    if ($loop == 0) {
                        $k = $ks;
                    }
                    if (view()->exists('led.' . $i . '.' . $j . $k)) {
                        $id[0] = $i;
                        $id[1] = $j;
                        $id[2] = $k;

                        return $id;
                    }
                    $loop++;
                }
                $loop1++;
            }
            $loop2++;
        }
        return 0;
    }

    public function next_num($id)
    {

        $is = $id[0];
        $js = $id[1];
        $ks = $id[2];
        $ks += 1;
        $loop = 0;
        for ($i = $is; $i <= 9; $i++) {
            for ($j = 0; $j <= 9; $j++) {
                if ($loop == 0) {
                    $j = $js;
                }
                for ($k = 0; $k <= 9; $k++) {
                    if ($loop == 0) {
                        $k = $ks;
                    }

                    if (view()->exists('lkps.' . $i . '.' . $j . $k)) {
                        $id[0] = $i;
                        $id[1] = $j;
                        $id[2] = $k;
                        return $id;
                    }
                    $loop++;
                }
            }
        }
        return 0;
    }
}
