<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';
    protected $fillable = [
        'nama',
        'nim',
        'tgl_lahir',
        'tmp_lahir',
        'alamat',
        'img_url',
        'prodi_id',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'mhs_id');
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
