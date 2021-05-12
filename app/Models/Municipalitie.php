<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipalitie extends Model
{
    use HasFactory;
    protected $fillable = ['municipalitie', 'id'];

    public function department()
    {
        return $this->belongsTo('App\Models\Department');
        // Municipalitie::where('id',1)->with('department')->get();

    }


    public function publications()
    {
        return $this->hasMany('App\Models\Publication');
    }



    public function first_publication()
    {
        return $this->hasOne('App\Models\Publication')->latest();
        // ->with('categorie:id,parent_id')->
    }
}
