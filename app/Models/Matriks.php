<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Matriks extends Model
{
    use HasFactory;

    protected $table = 'matriks';
    protected $fillable = [
        'id',
        'row_id',
        't_group',
        'grade',
        'skor',
        'bukti',
        'prodi_id',
    ];

    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }
    public static function getSummary($prodi_id)
    {
        $matriks = DB::table('matriks')
            ->where('prodi_id', $prodi_id)
            ->select(DB::raw('t_group, sum(skor) as skor'))
            ->groupBy("t_group")
            ->get();
        return $matriks;
    }
    public static function getSummaryAll($prodi_id)
    {
        $matriks = Matriks::all()
        ->where('prodi_id', $prodi_id)
            ->sum('skor');
        return $matriks;
    }
}
