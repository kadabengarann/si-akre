<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;
    protected $table = 'prodi';
    protected $fillable = ['nama'];


    public function getProdiID()
    {
        return sprintf('PR%03d', $this->id);
    }
    public function dosen()
    {
        return $this->hasMany(Dosen::class);
    }
    public function isComplete()
    {
        return true;
    }
}
