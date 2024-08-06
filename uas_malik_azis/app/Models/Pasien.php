<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pasien extends Model
{
    use HasFactory;
    public function rekammedis(): HasOne
    {
        return $this->hasOne(RekamMedis::class, 'id', 'rekammedis_id');
    }

}
