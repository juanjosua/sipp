<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teknis extends Model
{
    protected $table = 'teknis';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_pelatihan', 'jenjang', 'pelatihan_id', 'pelaporan_id'
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
