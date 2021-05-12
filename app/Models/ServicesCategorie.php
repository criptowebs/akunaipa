<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesCategorie extends Model
{
    use HasFactory;

    protected  $filleble = ['categorie_id', 'service_id'];
    protected $hidden = ['pivot'];
    public function categorie()
    {
        return $this->belongsTo('App\Models\Categorie');
    }

    public function service()
    {
        return $this->belongsTo('App\Models\Service');
    }
}
