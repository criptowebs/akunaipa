<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagesPublication extends Model
{
    use HasFactory;
    // Relación Inversa (Opcional)
    public function publication()
    {
        return $this->belongsTo('App\Models\Publication');
    }
}
