<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Generasi extends Model
{
    protected $table = 'generasis';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_pelatihan', 'pelatihan_id', 'pelaporan_id'
    ];

    public function pelatihan()
    {
        return $this->belongsTo(Pelatihan::class);
    }

    public function pelaporan()
    {
        return $this->belongsTo(Pelaporan::class);
    }
}
