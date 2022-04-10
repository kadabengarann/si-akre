<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Prodi;
use App\Models\Matriks;
use DeepCopy\Matcher\Matcher;

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
        $matriks = Matriks::all()->where('prodi_id', $prodi->id);
        $data = [
            'prev' => $this->prev_num($id),
            'next' => $this->next_num($id),
            'prodi' => $prodi,
            'matriks' => $matriks,
        ];
        // return $matriks;
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
    public function updateMatriks(Request $request)
    {
        if (Matriks::find($request->id)) {
            $matriks = Matriks::find($request->id);
            $matriks->row_id = $request->row_id;
            $matriks->grade = $request->grade;
            $matriks->skor = $request->skor;
            $matriks->prodi_id = $request->prodi_id;
            $matriks->save();
        } else {
            $data = array_merge(
                [
                    'id' => $request->id,
                    'row_id' => $request->row_id,
                    'grade' => $request->grade,
                    'skor' => $request->skor,
                    'prodi_id' => $request->prodi_id,
                ]
            );
            Matriks::create($data);
        }
        return response()->json(['success' => 'Nilai matriks berhasil disimpan!']);
    }
    public function updateMatriksBukti(Request $request)
    {
        if (Matriks::find($request->id)) {
            $matriks = Matriks::find($request->id);
            $matriks->bukti = $request->bukti;
            $matriks->save();
        } else {
            $data = array_merge(
                [
                    'id' => $request->id,
                    'bukti' => $request->bukti,
                ]
            );
            Matriks::create($data);
        }
        $data =
        Matriks::find($request->id)->bukti;
        return response()->json(['success' => 'Bukti matriks berhasil disimpan!',
    'data' => $data]);
    }
}
