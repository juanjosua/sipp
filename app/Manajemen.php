<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manajemen extends Model
{
    protected $table = 'manajemens';
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
