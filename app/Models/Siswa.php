<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = ['nama'];

    public function nisn()
    {
        return $this->hasOne(NISN::class);
    }

    public function phone_numbers()
    {
        return $this->hasMany(PhoneNumber::class);
    }

    public function hobbies()
    {
        return $this->belongsToMany(Hobby::class, 'siswa_hobbies', 'siswa_id', 'hobbies_id');
    }
    

}


