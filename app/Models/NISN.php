<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NISN extends Model
{

    protected $table = 'nisns';
    protected $fillable = ['siswa_id', 'nisn'];
    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
