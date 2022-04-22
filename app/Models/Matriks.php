<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Support\Facades\DB;


class Matriks extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
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
        'user_id',
    ];

    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public static function getSummary($prodi_id, $rev_id)
    {
        $matriks = DB::table('matriks')
            ->where('prodi_id', $prodi_id)
            ->where('user_id', $rev_id)
            ->select(DB::raw('t_group as id, sum(skor) as skor , count(*) - count(skor) + count(*) - count(bukti) as remainingField'))
            ->groupBy("t_group")
            ->get();
        return $matriks;
    }
    public static function getSummaryRev($prodi_id, $rev_id)
    {
        $matriks = DB::table('matriks')
            ->where('prodi_id', $prodi_id)
            ->where('user_id', $rev_id)
            ->select(DB::raw('t_group as id, sum(skor) as skor , count(*) - count(skor) as remainingField'))
            ->groupBy("t_group")
            ->get();
        return $matriks;
    }
    public static function getSummaryRow($prodi_id, $rev_id)
    {
        $matriks = DB::table('matriks')
            ->where('prodi_id', $prodi_id)
            ->where('user_id', $rev_id)
            ->select(DB::raw('row_id as id, count(*) - count(skor) + count(*) - count(bukti) as remainingField'))
            ->groupBy("row_id")
            ->get();

        return $matriks;
    }
    public static function getSummaryRowRev($prodi_id, $rev_id)
    {
        $matriks = DB::table('matriks')
            ->where('prodi_id', $prodi_id)
            ->where('user_id', $rev_id)
            ->select(DB::raw('row_id as id, count(*) - count(skor) as remainingField'))
            ->groupBy("row_id")
            ->get();

        return $matriks;
    }
    public static function getSummaryAllRev($prodi_id)
    {
        $array1 = array();
        $revs = DB::table('reviewer')
            ->join('users', 'users.rev_id', '=', 'reviewer.id')
            ->select('users.id')
            ->get();

        foreach ($revs as $n) {
            $matriks = DB::table('matriks')
                ->where('prodi_id', $prodi_id)
                ->where('user_id', $n->id)
                ->select(DB::raw('t_group as id, sum(skor) as skor , count(*) - count(skor) + count(*) - count(bukti) as remainingField'))
                ->groupBy("t_group")
                ->get();
            array_push($array1, $matriks);
        }
        // $matriks = DB::table('matriks')
        //     ->where('prodi_id', $prodi_id)
        //     ->select(DB::raw('t_group, sum(skor) as skor , count(*) - count(skor) + count(*) - count(bukti) as remainingField'))
        //     ->groupBy("t_group")
        //     ->get();

        return $array1;
    }
    public static function getSummaryAll($prodi_id)
    {
        $matriks = Matriks::all()
            ->where('prodi_id', $prodi_id)
            ->sum('skor');
        return $matriks;
    }
}
