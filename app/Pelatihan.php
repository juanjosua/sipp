<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelatihan extends Model
{
    protected $table = 'pelatihans';
    protected $primaryKey = 'id';
    protected $fillable = [
        'jenis', 'tempat', 'waktu', 'pelaksana', 'sertif', 'user_id'
    ];

    public function user()
    {
       return $this->belongsTo(User::class);
    }

    public function teknis()
    {
       return $this->hasOne(Teknis::class);
    }

    public function manajemen()
    {
       return $this->hasOne(Manajemen::class);
    }

    public function generasi()
    {
       return $this->hasOne(Generasi::class);
    }
}
