<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hobby extends Model
{
    protected $fillable = ['hobby'];

    public function siswas()
    {
        return $this->belongsToMany(Siswa::class, 'siswa_hobbies', 'hobbies_id', 'siswa_id');
    }
    
}
