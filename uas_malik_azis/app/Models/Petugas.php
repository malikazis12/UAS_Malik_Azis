<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongTo;

class Petugas extends Model
{
    use HasFactory;
    public function rekammedis(): BelongTo
    {
        return $this->belongTo(RekamMedis::class);
    }

}
