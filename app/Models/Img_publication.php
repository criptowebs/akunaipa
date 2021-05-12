<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Img_publication extends Model
{
    use HasFactory;

    protected $fillable = ['url', 'number', 'publication_id'];

    // Relación Inversa (Opcional)
    public function publication()
    {
        return $this->belongsTo('App\Models\Publication');
    }
}
