<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelaporan extends Model
{
    protected $table = 'pelaporans';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama', 'pelatihan', 'tempat', 'waktu', 'peserta', 'user_id'
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
