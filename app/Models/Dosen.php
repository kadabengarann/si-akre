<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Dosen extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $table = 'dosen';
    public function user()
    {
        return $this->hasOne(User::class);
    }
    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }
    public function getDosenID()
    {
        return sprintf('D%03d', $this->id);
    }
}
