<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'id'];
    public function municipalities()
    {
        return $this->hasMany('App\Models\Municipalitie');
    }

    public function publicationExist()
    {
        return $this->hasMany('App\Models\Municipalitie')
            ->has('publications', '>', 0);
    }
    public function nation()
    {
        return $this->belongsTo('App\Models\Nation');
    }
}
