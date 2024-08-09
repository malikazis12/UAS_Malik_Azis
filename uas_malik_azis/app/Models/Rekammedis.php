<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Rekammedis extends Model
{
    use HasFactory;
        public function pasiens(): HasOne
    {
        return $this->hasOne(Pasien::class, 'id', 'pasiens_id');
    }
        public function petugas(): HasOne
    {
        return $this->hasOne(Petugas::class, 'id', 'petugas_id');
    }

}
