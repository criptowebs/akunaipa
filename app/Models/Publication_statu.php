<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication_statu extends Model
{
    use HasFactory;

    protected $fillable = ['publication_status_name'];

    public function publications()
    {
        // return $this->belongsTo('App\Models\User');
        return $this->hasMany('App\Models\publication');
    }
}
