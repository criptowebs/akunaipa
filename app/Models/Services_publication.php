<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services_publication extends Model
{
    use HasFactory;
    protected  $filleble = ['publication_id', 'service_id'];
    protected $hidden = ['pivot'];

    public function publication()
    {
        return $this->belongsTo('App\Models\Publication');
    }

    public function service()
    {
        return $this->belongsTo('App\Models\Service');
    }
}
