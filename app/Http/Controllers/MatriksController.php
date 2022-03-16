<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Prodi;

class MatriksController extends Controller
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

            ];
            if (null == $request->query('id')) {
                return redirect('/admin/iaps');
            }

            return view('matriks.index', $data);
        } elseif (Auth::user()->level == 2) {
            $prodi = Prodi::find(Auth::user()->prodi->id);
            $data = [
                'prodi' => $prodi,
            ];
            return view('matriks.index', $data);
        }
    }
    public function form($id, Request $request)
    {
        if (Auth::user()->level == 1) {
            if (null == $request->query('id')) {
                return redirect('/admin/iaps');
            }
            $prodi = Prodi::find(
                $request->query('id')
            );
        } elseif (Auth::user()->level == 2) {
            $prodi = Prodi::find(Auth::user()->prodi->id);
        } elseif (Auth::user()->level == 3) {
            $prodi = Prodi::find(Auth::user()->dosen->prodi_id);
        } elseif (Auth::user()->level == 4) {
            $prodi = Prodi::find(Auth::user()->mhs->prodi_id);
        }
        $data = [
            'prev' => $this->prev_num($id),
            'next' => $this->next_num($id),
            'prodi' => $prodi
        ];
        // return $tables;
        return view('matriks.' . $id[0]  . $id[1] . $id[2], $data);
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
                    if (view()->exists('matriks.' . $i  . $j . $k)) {
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

                    if (view()->exists('matriks.' . $i  . $j . $k)) {
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
