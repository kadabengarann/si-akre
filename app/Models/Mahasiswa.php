<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';
    public function user()
    {
        return $this->hasOne(User::class);
    }
    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }
    public function isComplete()
    {
        return true;
    }
}
