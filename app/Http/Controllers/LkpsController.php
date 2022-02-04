<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Permission;
use App\Models\Prodi;

class LkpsController extends Controller
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
                ),            'tables' => $this->allowedTable(),

            ];
            if (null == $request->query('id')) {
                return redirect('/');
            }

            return view('admin.lkps', $data);
        }
        $data = [
            'tables' => $this->allowedTable(),

        ];

        return view('admin_prodi.lkps', $data);
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
    public function form($id)
    {
        $form = Permission::find($id);
        $permit = json_decode($form->access, true);
        $tables = $this->allowedTable();
        if (Auth::user()->level == 1) {
            $prodi = Prodi::find(7);
        } elseif (Auth::user()->level == 2) {
            $prodi = Prodi::find(Auth::user()->prodi->id);
        } elseif (Auth::user()->level == 3) {
            $prodi = Prodi::find(Auth::user()->dosen->prodi_id);
        } elseif (Auth::user()->level == 4) {
            $prodi = Prodi::find(Auth::user()->mhs->prodi_id);
        }
        $data = [
            'tables' => $this->allowedTable(),
            'prev' => $this->prev_num($id),
            'next' => $this->next_num($id),
            'prodi' => $prodi,
            'permit' => $form
        ];
        // return $tables;
        if (in_array(Auth::user()->level, $permit)) {
            # code...
            return view('lkps.' . $id[0] . '.' . $id[1] . $id[2], $data);
        } else {
            return view('welcome');
        }
    }

    public function admin_input($id, Request $request)
    {
        $data = [
            'prodi' =>
            Prodi::find(
                $request->query('id')
            ),

        ];

        if ($id < 111) {
            return view('lkps.input.identitas.' . $id[1] . $id[2], $data);
        }
        return view('lkps.input.' . $id[0] . '.' . $id[1] . $id[2], $data);
    }
    public function admin_form($id, Request $request)
    {
        $data = [
            'prev' => $this->prev_num($id),
            'next' => $this->next_num($id),
            'prodi' =>
            Prodi::find(
                $request->query('id')
            ),

        ];
        if (null == $request->query('id')) {
            return redirect('/');
        }
        return view('lkps.' . $id[0] . '.' . $id[1] . $id[2], $data);
    }

    public function input($id, Request $request)
    {
        $data = [
            'prodi' =>
            Prodi::find(
                $request->query('id')
            ),

        ];
        if ($id < 111) {
            return view('lkps.input.identitas.' . $id[1] . $id[2], $data);
        }
        return view('lkps.input.' . $id[0] . '.' . $id[1] . $id[2], $data);
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
                    if (view()->exists('lkps.' . $i . '.' . $j . $k)) {
                        $id[0] = $i;
                        $id[1] = $j;
                        $id[2] = $k;

                        $form = Permission::find($id);
                        if (Permission::find($id)) {
                            $permit = json_decode($form->access, true);
                        } else {
                            $permit  = array(1);
                        }
                        if (in_array(Auth::user()->level, $permit)) {
                            return $id;
                        }
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
                        $form = Permission::find($id);
                        if (Permission::find($id)) {
                            $permit = json_decode($form->access, true);
                        } else {
                            $permit  = array(1);
                        }
                        if (in_array(Auth::user()->level, $permit)) {
                            return $id;
                        }
                    }
                    $loop++;
                }
            }
        }
        return 0;
    }
}
